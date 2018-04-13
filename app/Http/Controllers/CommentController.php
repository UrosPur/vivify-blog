<?php

namespace App\Http\Controllers;

use App\Mail\CommentReceived;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store($postId){

        $post = Post::find($postId);

        $this->validate(request(), [

            'text' => 'required|min:15'
        ]);

        $post->comments()->create(request()->all());

        Mail::to($post->user)->send(new CommentReceived($post));

        return redirect()->back();
    }
}
