<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class CommentController extends Controller
{
    public function index()
    {
        return CommentResource::collection(Comment::paginate(25));
    }

    public function store(Request $request)
    {
        $comment = Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'slug' => $request->slug,
        ]);

        return new CommentResource($comment);
    }
}
