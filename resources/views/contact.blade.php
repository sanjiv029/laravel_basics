
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
      {{-- <br>
      <div style="color: red;">
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    </div> --}}
    <div style="color: rgb(0, 255, 26);">
        @if (Session::has('success'))
        {{Session::get('success')}}
            @php
               Session::forget('success');
            @endphp
        @endif
    </div>
    <br>
        <form action={{route('contact.submit')}} method="POST">
            @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <div style="color: red;"> {{$message}} </div>
        @enderror
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div style="color: red;"> {{$message}} </div>
        @enderror
        <br>
        <label for="Message">Message:</label>
        @error('Message')
        <div style="color: red;"> {{$message}} </div>
        @enderror
        <textarea  name="Message" >{{ old('Message') }}</textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
