@extends('layouts.master')

@section('content')
  @foreach($users as $user)
    <p>
      <a href="{{ url('user', [$user->id]) }}">
        {{ $user->name }}
      </a>
    </p>
  @endforeach
@endsection