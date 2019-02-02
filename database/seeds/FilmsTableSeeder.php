<?php

use Illuminate\Database\Seeder;
use App\Film;
use Carbon\Carbon;

class FilmsTableSeeder extends Seeder
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
        Film::insert([
            'user_id' => 0,
            'name' => 'The Mountain Between us',
            'slug' => 'The-Mountain-Between-us',
            'description' => 'Maecenas orci metus, congue et efficitur et, facilisis in nisi. Curabitur maximus purus aliquam consequat aliquet. Nullam tortor magna, tincidunt sed erat at, tristique vulputate ante. Vivamus iaculis lacus et erat gravida, eget fringilla nulla laoreet. Nam enim magna, consectetur id fermentum eu, rutrum pharetra tortor.',
            'release_date' => '2018-09-01 15:45:32',
            'ticket_price' =>150,
            'country' =>'USA',
            'image' => $url = Storage::url('mountain.jpg'),
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);

        Film::insert([
            'user_id' => 0,
            'name' => 'The Predator',
            'slug' => 'The-Predator',
            'description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus luctus mauris ut ante malesuada, ac vehicula ligula tempus. Curabitur ex tortor, aliquet non fermentum id, sagittis at sapien. Curabitur aliquam auctor elit, a lacinia turpis rutrum ut.',
            'release_date' => '2018-11-01 11:25:37',
            'ticket_price' =>200,
            'country' =>'USA',
            'image' => $url = Storage::url('predator.jpg'),
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);
    }
}
