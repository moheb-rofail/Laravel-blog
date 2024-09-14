@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <input type='text' name='title' placeholder="Title" class="form-control mb-1">
        <textarea name='body' placeholder="Post Body" class="form-control mb-1"></textarea>
        <input type="submit" class="btn btn-success" name="create" value="Add Post">
    </form>

@endsection