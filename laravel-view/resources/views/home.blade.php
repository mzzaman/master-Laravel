@extends('layouts.app')
@section('title', 'home page')
@section('content')
    <h1> How to Install Bootstrap 5 in Laravel 10 </h1>
    <div class="row">
        <div class="col-md-4 mt-3">
            @foreach ($posts as $post)
                <h1 class="text-center text-capitalize">{{ $post['title'] }}</h1>
                <p class="text-center">{{ $post['description'] }}</p>
            @endforeach
        </div>
    </div>
@endsection
