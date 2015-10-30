@extends('layouts.master')

@section('content')
  <ul>
    @foreach($posts as $post)
      <div class="post">
        <h1>
          <a href="{{ url('post', [$post->id, $post->slug]) }}">
            {{ $post->title }}
          </a>
        </h1>
        <small>{{ $post->published_at }}</small>

        <p>Category : {{ $post->category? $post->category->title : 'no category' }}</p>

        <p>{{ str_limit($post->content, $limit = 90, $end = '...') }}</p>

        <p>Category : {{ $post->user? $post->user->name : 'Unknown' }}</p>
      </div>
    @endforeach
  </ul>
@endsection