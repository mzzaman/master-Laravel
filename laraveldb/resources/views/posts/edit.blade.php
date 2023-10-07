@extends('layouts.app')
@section('title', 'Create Post')
@section('content')
    <h1 class="text-center text-bg-dark p-3">Update page</h1>
    <p class="text-center text-bg-warning p-2">Title: {{ $post->title }}</p>

    <form action="{{ route('posts.update', ['post' => $post]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
            <div class="form-text text-danger border-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control">{{ old('description', $post->description) }}</textarea>
            <div class="form-text text-danger border-danger">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
