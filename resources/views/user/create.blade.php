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

  <form action="{{ url('user-created') }}" method="post">
    {!! csrf_field() !!}

    <p>
      <input type="text" name="email">
    </p>

    <input type="submit">
  </form>

@endsection