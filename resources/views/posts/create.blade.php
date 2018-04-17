@extends('layouts.master')


@section('title')

    Create new post

@endsection


@section('content')

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <h2>Create new post</h2>

        <div class="form-group">

            <label for="title"> Upisi naslov posta</label>
            <input id="title" type="text" name="title" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'title'])

        </div>

        <div class="form-group">

            <label for="body"> Upisi text posta</label>
            <textarea id="body" name="body" class="form-control"></textarea>
            @include('partial.error-message',['fieldTitle' => 'body'])

        </div>

        <div class="form-group">

            <label for="published">Check if you wish to publish this</label>
            <input id="published" class="form-control" type="checkbox" name="is_published" value="0">
        </div>

        @if(count($tags))
            <div class="form-group">

                <label for="tags[]"></label> <br>

                @foreach($tags as $tag)

                    <input type="checkbox" id="tag" name="tags[]" value="{{ $tag->id }}">
                    {{ $tag->name }}</br>

                @endforeach

            </div>

        @endif

        <div class="form-group">

            <button type="submit" class="btn btn-primary"> submit post</button>

        </div>

    </form>


@endsection