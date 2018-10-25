<div class="blog-post">
  <p class="blog-post-meta">
    {{ $post->user->name }} on
    {{ $post->created_at->toFormattedDateString() }}
  </p>
  <h2 class="blog-post-title">
    <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
    </a>
  </h2>
  {{-- <p>
      {{ $post->body }}
  </p> --}}
</div><!-- /.blog-post -->

