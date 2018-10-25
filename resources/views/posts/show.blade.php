@extends('layouts.master')

@section('content')

<div class="col-sm-12 blog-main">
  <p class="blog-post-meta">
    {{ $post->created_at->toFormattedDateString() }}
  </p>

  <h1 class="blog-main-title">
    {{ $post->title }}
  </h1>

  <p blog-main-body>
    {{ $post->body }}
  </p>

  <br>
  <form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    <div class="form-group">
      <textarea name="body" class="form-control" placeholder="Your comment here" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-secondary">Add Comment</button>
    </div>
  </form>

  <br>
  <div class="comments">
    <ul class="list-group">
      @foreach($post->comments as $comment)
        <li class="list-group-item">
          <small>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
          </small>
          {{ $comment->body }}
        </li>
      @endforeach
    </ul>
  </div>

  @include('layouts.errors')

</div>

@endsection