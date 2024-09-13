@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Author</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></td>
            <td>{{$post->body}}</td>
            <td>{{$post->user->name}}</td>
            <td>
                <a href="{{route('posts.show', $post->id)}}">Edit</a>
                <a href="{{route('posts.show', $post->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection