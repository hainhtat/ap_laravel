@extends('layout')

@section('content')
  <div class="container">
    <br>
    <div class="card">
      <div class="card-header" style="text-align:center">
        New Post
      </div>
      <div class="card-body">

      @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control @error('name') border border-danger @enderror" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="textarea" class="form-control" id="description" name="description" placeholder="Enter Description">{{ old('description')}}</textarea>
            </div>

            <select name="category_id" id="" class="form-control mb-3">
              <option value="">Select Category</option>
              @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
              @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-success">Back</a>

        </form>

      </div>
    </div>
  </div>
@endsection