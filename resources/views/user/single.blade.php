@extends('layouts.master')

@section('content')
  <h1>{{ $user->name }}</h1>
  <small>Create at : {{ $user->created_at }}</small>

  <p>{{ $user->email }}</p>

  <form action="{{ url('delete-user', [$user->id]) }}" method="delete">
    <input type="submit" value="Delete">
  </form>

@endsection