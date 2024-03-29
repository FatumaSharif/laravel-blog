@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

    <h1>Publish a Post</h1>
    
    @include('layouts.errors')

    <form method="POST" action="/posts">
      {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
        </div>

        <div class="form-group">
          <label for="body">Body:</label>
          <textarea name="body" id="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn btn-outline-secondary">Publish</button>
        </div>
      </form>

  </div>
@endsection