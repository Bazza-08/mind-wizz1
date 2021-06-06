@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Mindful Learning Everywhere!</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-primary btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection

