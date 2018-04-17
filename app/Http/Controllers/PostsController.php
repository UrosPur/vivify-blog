<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class PostsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth',
            [
            'only' => ['create','create']
            ]
        );

    }

    public function index()
    {

        $posts = Post::with('user')->latest()->paginate(10);



//        foreach ($posts as $post){
//
//        dd($post->user->email);exit;
//
//        }


//        dd(auth()->user());

        return view('posts.index', compact('posts'));

    }

    public function show($id)
    {

        $post = Post::with('comments')->find($id);

        return view('posts.show', compact(['post']));

    }

    public function create()
    {

        $tags = Tag::all();

        return view('posts.create', compact('tags'));

    }

    public function store(Request $request)
    {

        $this->validate(request(),[
           'title' => 'required',
           'body' => 'required|min:15',
           'tags' => 'required|array'

        ]);

            $post = new Post();
            $post->title = request()->get('title');
            $post->body = request()->get('body');
            $post->user_id =  auth()->user()->id ;
            $post->is_published = request()->get('is_published');

            $post->save();

            $post->tags()->attach(request('tags'));

//            \Log::info($post->tags()->get());

//        Post::create(request()->all());

        return redirect()->route('posts.index');

    }
}
