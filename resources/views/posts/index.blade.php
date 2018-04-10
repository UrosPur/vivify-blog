@extends('layouts.master')
@section('title')

    {{ 'all posts' }}
@endsection

@section('content')

    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->createdAt }} </p>

            <p>{{ $post->body }}</p>


            <a href="{{ route('single-post',['id' => $post->id]) }}">read more</a>

        </div><!-- /.blog-post -->
        @endforeach

    </div><!-- /.blog-main -->

@endsection








