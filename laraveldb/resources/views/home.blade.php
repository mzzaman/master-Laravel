@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-center text-bg-dark p-3">Home page</h1>
    <p class="text-center text-bg-warning p-2">Welcome</p>
    <div class="d-flex justify-content-evenly">
        @forelse ($posts as $post)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>

        @empty
            No Posts here
        @endforelse
    </div>
@endsection
