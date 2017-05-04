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
       <h1 class="orange">Log In</h1>
   @endif
    <br />
    {{ Form::open(array('url' => 'login')) }}
<!--    <span class="orange">{{ Form::label('email', 'Email Address') }}</span>
         {{ Form::text('email') }}-->

    <span class="orange">{{ Form::label('username', 'Username') }}</span>
    {{ Form::text('username') }}

    <span class="orange">{{ Form::label('password', 'Password') }}</span>
    {{ Form::password('password') }}

    {{ Form::submit('Log in') }}

    {{ Form::close() }}
@stop


