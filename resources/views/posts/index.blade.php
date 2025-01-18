@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create Post</a>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }} - <a href="{{ route('posts.edit', $post) }}">Edit</a> | 
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form></li>
        @endforeach
    </ul>
@endsection
