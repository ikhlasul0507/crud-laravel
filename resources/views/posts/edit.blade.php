@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <a href="{{ route('posts.index') }}">Back</a>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body">{{ $post->body }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
