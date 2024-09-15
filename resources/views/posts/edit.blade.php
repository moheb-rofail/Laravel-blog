@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('posts.update', $post->id)}}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type='text' name='title' value="{{$post->title}}" class="form-control mb-1">
        <textarea name='body' placeholder="Post Body" class="form-control mb-1">{{$post->body}}</textarea>
        <input type="submit" class="btn btn-success" name="update" value="Edit Post">
    </form>

@endsection