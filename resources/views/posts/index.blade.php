@extends('layouts.master')
@section('title')

    {{ 'all posts' }}
@endsection

@section('content')

    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            @if($post->user)
            <p class="blog-post-meta"> by <i><a href="{{ route('users.show',[ 'id' => $post->user_id]) }}" >{{ $post->user->name}}</a></i> </p>
            @endif
            <small>
                @foreach($post->tags as $tag)
                    <a href="{{ route('tags.index', [ 'tag' => $tag]) }}">{{ $tag->name }}</a> /
                    @endforeach
            </small>
            <p class="blog-post-meta">{{ $post->createdAt }}</p>

            <p>{{ $post->body }}</p>


            <a href="{{ route('single-post',['id' => $post->id]) }}">read more</a>

        </div><!-- /.blog-post -->
        @endforeach

{{--    {{ $posts->links() }}--}}

            <nav class="blog-pagination">
                <a class="btn btn-outline-{{ $posts->currentPage() == 1? 'secondary disabled' : 'primary' }}"
                   href="{{ $posts->previousPageUrl() }}">Prev</a>

                <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary disabled' }}"
{{--                <a class="btn btn-outline-{{ $posts->nextPageUrl() ? 'primary' : 'secondary disabled' }}"--}}
                   href="{{ $posts->nextPageUrl() }}">Next</a>
            </nav>
    </div><!-- /.blog-main -->


@endsection








