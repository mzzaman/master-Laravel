@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-center text-bg-dark p-3">Show page</h1>
    <p class="text-center text-bg-warning p-2">Welcome</p>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <div class="d-flex justify-content-between">
                <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary">update</a>
                <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
