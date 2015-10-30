@extends('layouts.master')

@section('content')

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <h1>Create User</h1>

  <form action="{{ url('user'), $user }}" method="post" value="put">
    {!! csrf_field() !!}

    <p>
      User name :
      <input type="text" name="name" value="{{ $user->name }}">
    </p>

    <p>
      E-mail :
      <input type="text" name="email" value="{{ $user->email }}">
    </p>

    <p>
      Password :
      <input type="password" name="password">
    </p>

    <input type="submit">
  </form>

@endsection
