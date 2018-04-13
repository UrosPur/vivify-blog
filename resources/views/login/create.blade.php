@extends('layouts.master')


@section('title')

    login

@endsection


@section('content')

    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <h2>Login</h2>


        <div class="form-group">

            <label for="email">Add user email</label>
            <input id="email" type="email" name="email" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'email'])

        </div>

        <div class="form-group">

            <label for="password">Add user password</label>
            <input id="password" type="password" name="password" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'password'])

        </div>




        <div class="form-group">

            <button type="submit" class="btn btn-primary"> login</button>

        </div>

    </form>



@endsection