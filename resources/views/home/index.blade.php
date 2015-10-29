@extends('layouts.master')

@section('content')
  @foreach($posts as $post)
    <h1>
      <a href="{{ url('post', [$post->id, $post->slug]) }}">
        {{ $post->title }}
      </a>
    </h1>
    <small>{{ $post->published_at }}</small>

    <p>{{ str_limit($post->content, $limit = 90, $end = '...') }}</p>

    <?php $i = 0; ?>
    @foreach($post->comments as $comment)
      <?php $i += count($comment); ?>
    @endforeach
    <p>Nombre de commentaires : {{ $i }}</p>
  @endforeach
@endsection