{{-- this will extend the layouts ko app file  --}}
@extends('Layouts.app')

@section('content')
   {{--  @if (request()->path() =='/info')
    <h1> This is the info  page. </h1>
    @else
    <h2>This is homepage.</h2>
    {{-- @isset($data) --}}
  {{--   @empty($data)
    <p>The data variable is empty.</p>
    @endempty
    Welcome to welcomepage {{$data}} . --}}
   {{--  @endisset --}}
 {{--    @endif --}}
   {{--  @auth
    Welcome to welcomepage {{$data}} .
    @endauth
    @guest
        Please log in.
    @endguest --}}
   {{--  @for ($i=0;$i<100;$i++)
        {{$i}}. Welcome to welcomepage {{$data}}. <br>
    @endfor --}}
  @foreach ($array as $item)
    {{$loop->index}}-
    {{$item['school']}}
    <br>
  @endforeach
@endsection
