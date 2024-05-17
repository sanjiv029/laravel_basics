
@extends('Layouts.app')
@section('content')
    <h2> This is a contact page</h2>
    <p>The current timestamp is {{time()}}</p>
    {{-- The $name keyword displays the name that is given by the route i.e web.php --}}
       {{--  <h3> Hello {{ $name }} </h3> --}}
      {{--   @dd($collection); --}}
     {{--  @foreach ($collection as $i )
            {{$loop->index}}-
            {{$i}} <br>
      @endforeach
      @dd($contacts); --}}
      <br>
      <form action={{route('contact.submit')}}>
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="Message">Message:</label>
        <textarea  name="Message"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
