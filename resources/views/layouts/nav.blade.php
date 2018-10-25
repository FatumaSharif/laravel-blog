<div class="blog-masterhead">
  <div class="container">
    {{-- <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a>
      <a class="blog-nav-item" href="#">New features</a>
      <a class="blog-nav-item" href="#">Press</a>
      <a class="blog-nav-item" href="#">New hires</a>
       --}}
      @if(Auth::check())
        <a class="blog-nav-item mr-auto" href="#">{{ Auth::user()->name}}</a>
      @endif

    </nav>
  </div>
</div>
