@extends('layouts.master')

@section('content')
  <h1>{{ $post->title }}</h1>
  <small>{{ $post->published_at }}</small>

  <p>{{ $post->content }}</p>

  <ul>
    @forelse($post->comments as $c)
      <li>Comment : {{ $c->message }}</li>
    @empty
      <li>No comment</li>
    @endforelse
  </ul>

@endsection