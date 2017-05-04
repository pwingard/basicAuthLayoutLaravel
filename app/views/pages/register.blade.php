@extends('layouts.default')

@section('title')
    Register
@stop

@section('content')
    @if ($errors->has())
       <div class="orange">
           @foreach ($errors->all() as $error)
               {{ $error }}<br>        
           @endforeach
       </div>
   @else
       <h1 class="orange">Sign Up!</h1>
   @endif
    <br />
    <h2 class="orange">New User Registration</h2>
    {{ Form::open(array('url' => 'register')) }}
    <span class="orange">{{ Form::label('email', 'Email Address') }}</span>
         {{ Form::text('email') }}

    <span class="orange">{{ Form::label('username', 'Username') }}</span>
    {{ Form::text('username') }}

    <span class="orange">{{ Form::label('password', 'Password') }}</span>
    {{ Form::password('password') }}

    {{ Form::submit('Sign Up') }}

    {{ Form::close() }}
@stop


