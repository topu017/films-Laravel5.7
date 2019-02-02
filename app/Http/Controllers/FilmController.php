<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;
use App\Http\Resources\FilmResource;

class FilmController extends Controller
{
    public function index()
    {
        return FilmResource::collection(Film::with('ratings')->paginate(25));
    }

    public function store(Request $request)
    {
        $film = Film::create([
//            'user_id' => $request->user()->id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'release_date' => $request->release_date,
            'ticket_price' => $request->ticket_price,
            'country' => $request->country,
            'genre' => $request->genre,
            'image' => $request->image,
        ]);

        return new FilmResource($film);
    }

    public function show(Film $film)
    {
        return new FilmResource($film);
    }

    public function update(Request $request, Film $film)
    {
        // check if currently authenticated user is the owner of the book
//        if ($request->user()->id !== $film->user_id) {
//            return response()->json(['error' => 'You can only edit your own films.'], 403);
//        }

        $film->update($request->only(['name','slug', 'description', 'release_date', 'ticket_price', 'country', 'genre', 'image']));

        return new FilmResource($film);
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return response()->json(null, 204);
    }
}
