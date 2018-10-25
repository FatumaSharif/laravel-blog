@extends ('layouts.master')

@section('content')

  @include('layouts.header')  

  <div class="col-sm-12">

    @foreach($posts as $post)
      @include('posts.post')
    @endforeach

    {{-- <nav>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav> --}}

  </div>
@endsection