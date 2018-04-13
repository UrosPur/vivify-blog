@extends('layouts.master')
@section('title')

    User

    @endsection

@section('content')

    <div class="col-sm-8 blog-main">
        <h2 class="blog-post-title">Posts by {{ $user->name }}</h2>

        @foreach($user->post as $post)

            <div class="blog-post">
                <h2 class="blog-post-title">{{ $user->name }}</h2>
                @if($post->user)
                    <p class="blog-post-meta"> by <i>{{ $post->user->name}}</i> </p>
                @endif
                <p class="blog-post-meta">{{ $post->created_at }}</p>

                <p>{{ $post->body }}</p>


                <a href="{{ route('single-post',['id' => $post->id]) }}">read more</a>

            </div><!-- /.blog-post -->
        @endforeach

    </div><!-- /.blog-main -->

@endsection








