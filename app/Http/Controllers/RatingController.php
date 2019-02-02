<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Rating;
use App\Http\Resources\RatingResource;

class RatingController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }

    public function index()
    {
        return RatingResource::collection(Rating::with('film')->paginate(25));
    }

    public function store(Request $request, Film $film)
    {
        $rating = Rating::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'film_id' => $film->id,
            ],
            ['rating' => $request->rating]
        );

        return new RatingResource($rating);
    }
}
