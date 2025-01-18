@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <a href="{{ route('posts.index') }}">Back</a>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
