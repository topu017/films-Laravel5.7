<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['user_id', 'name', 'slug', 'description', 'release_date', 'ticket_price', 'country', 'genre', 'image',];

    protected $hidden = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
