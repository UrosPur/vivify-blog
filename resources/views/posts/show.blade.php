@extends('layouts.master')

<?php

?>
@section('title')

    {{ $post->title }}

@endsection

@section('content')


    <div class="col-sm-8 blog-main">


        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->createdAt }} </p>
            @if($post->user)
                <p class="blog-post-meta"> by <i><a href="{{ route('users.show',[ 'id' => $post->user_id]) }}">

                        {{ $post->user->name}} </a></i> </p>
            @endif

            <p>{{ $post->body }}</p>

            @if(count($post->comments))
                <hr/>
                <h4>Coments</h4>
                <form method="POST" action="{{ route('comment-post', [ 'post_id' => $post->id ]) }}">
                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="text"> add comment</label>
                        <textarea id="text" name="text" class="form-control"></textarea>
                        @include('partial.error-message',['fieldTitle' => 'text'])

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary"> submit comment</button>
                    </div>

                </form>

                <hr/>

                <ul class="list-unstyled">
                    @forelse($post->comments as $comment)

                        <li>
                            <p>{{ $comment->text }}</p>
                        </li>

                    @empty
                        <li>
                            nema komentara
                        </li>
                    @endforelse
                </ul>
            @endif


        </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->

@endsection