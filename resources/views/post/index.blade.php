@extends('layouts.master')

@section('content')
  <ul>
    @foreach($posts as $post)
      <a href="{{ url('post', [$post->id, $post->slug]) }}">
        <li>{{ $post->title }}</li>
      </a>
    @endforeach
  </ul>
@endsection