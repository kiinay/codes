<a href="{{ url('category', [1]) }}">
  <li>
    Programming
  </li>
</a>
<a href="{{ url('category', [2]) }}">
  <li>
    Algorithm
  </li>
</a>
<a href="{{ url('user/create') }}">
  <li>
    Contact
  </li>
</a>
<li>
  Login
</li>
{{--<li>--}}
  {{--<a href="{{ url('/') }}">Home</a>--}}
{{--</li>--}}
{{--@foreach($categories as $category)--}}
  {{--<li>--}}
    {{--<a href="{{ url('category', $category->id) }}">{{ $category->title }}</a>--}}
  {{--</li>--}}
{{--@endforeach--}}