@extends('layouts.master')


@section('title')

    register

@endsection


@section('content')

    <form method="POST" action="/register">
        {{ csrf_field() }}
        <h2>Register</h2>

        <div class="form-group">

            <label for="name"> Add user name</label>
            <input id="name" type="text" name="name" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'name'])

        </div>

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

            <label for="age">Add users age</label>
            <input id="age" type="number" name="age" class="form-control">
            @include('partial.error-message',['fieldTitle' => 'age'])

        </div>




        <div class="form-group">

            <button type="submit" class="btn btn-primary"> add new user</button>

        </div>

    </form>


@endsection