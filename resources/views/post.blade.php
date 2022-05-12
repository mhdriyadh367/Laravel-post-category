@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mb-5">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <p>By. <a href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/posts?category=/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3 mb-5">

        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3 mb-5">
      @endif

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
    
    
        <a href="/" class="btn btn-secondary">Back</a>

      </div>
    </div>
  </div>
    



@endsection 