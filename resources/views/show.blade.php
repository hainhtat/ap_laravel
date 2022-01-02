@extends('layout')

@section('content')
  <div class="container">
    <br>
    <div class="card">
      <div class="card-header" style="text-align:center">
        Content
      </div>
      <div class="card-body">
        
          <h5 class="card-title">{{ $post->name }}</h5>
          <p class="card-text">{{ $post->description }}</p>
          <p class="card-text">{{ 'Category : ' . $post->categories->name }}</p>
          <p class="card-text">Created at {{ $post->created_at }}</p>
          <p class="card-text">Updated at {{ $post->updated_at }}</p>
          <a href="/posts" class="btn btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection