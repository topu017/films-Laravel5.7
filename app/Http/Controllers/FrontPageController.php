<?php

namespace App\Http\Controllers;

use App\Film;
use App\Comment;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $films = Film::paginate(3);
        return view('welcome')->with('films', $films);
    }

    public function showFilm($slug)
    {
        $comments = Comment::where('slug', $slug)->paginate(5);
        $film = Film::where('slug', $slug)->firstOrFail();
        return view('show-film', compact('film', 'comments'));
    }

    public function create()
    {
        return view('create');
    }

    public function storeFilm(Request $request)
    {
        //dd('Ok');
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'release_date' => 'required',
            'ticket_price' => 'required',
            'country' => 'required',
            'genre' => 'required',
            'image' => 'required|image'
        ]);
        $films = new Film();

//        $films->user_id = $request->user()->id;
        $films->name = $request->name;
        $films->slug = $request->slug;
        $films->description = $request->description;
        $films->release_date = $request->release_date;
        $films->ticket_price = $request->ticket_price;
        $films->country = $request->country;
        $films->genre = $request->genre;

        if($request->hasFile('image')){
            //store
            $films->image = $request->image->store('public/images');
        }
        $films->save();
        return redirect()->route('index')->with('success','Data saved in database successfully');
    }

    public function storeComment(Request $request)
    {
        //dd('Ok');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $comments = new Comment();

        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->comment = $request->comment;
        $comments->slug = $request->slug;

        $comments->save();
        return redirect()->back()->with('success','Data saved in database successfully');
    }
}
