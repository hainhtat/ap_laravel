@extends('layout')

@section('content')
  <div class="container">
    <div class="">
      <a href="/posts/create" class="btn btn-success">Add new post</a>
    </div>
    <br>
    <div class="card">
      <div class="card-header" style="text-align:center">
        Contents
      </div>
      <div class="card-body">
        @foreach ($data as $post)
          <h5 class="card-title">{{ $post->name }}</h5>
          <p class="card-text">{{ $post->description }}</p>
          <a href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
          <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
          <form action="/posts/{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <hr>
        @endforeach
        
      </div>
    </div>
  </div>
@endsection