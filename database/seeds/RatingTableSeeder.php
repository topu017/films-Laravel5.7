<?php

use Illuminate\Database\Seeder;
use App\Rating;
use Carbon\Carbon;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dateTimeNow = $dt->toDateTimeString();
        Rating::insert([
            'user_id' => 0,
            'film_id' => 1,
            'rating' => 4,
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);
    }
}
