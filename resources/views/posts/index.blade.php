@extends('layouts.app')

@section('content')
<a href="{{route('posts.create')}}" class='btn btn-success'>New Post</a>

@if($posts->isNotEmpty())
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
                <a class="btn btn-primary"  href="{{route('posts.edit', $post->id)}}">Edit</a>
                <form style="display:inline" method="POST" action="{{route('posts.destroy', $post->id)}}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
  @else 
    <div class="p-3"><p>There are no posts yet.</p></div>
  @endif
@endsection