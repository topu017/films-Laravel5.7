<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['film_id', 'user_id', 'rating'];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
