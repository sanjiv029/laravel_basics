
@extends('Layouts.app')
@section('content')
    <h2> This is a contact page</h2>
    <p>The current timestamp is {{time()}}</p>
    {{-- The $name keyword displays the name that is given by the route i.e web.php --}}
        <h3> Hello {{ $name }} </h3>
@endsection
