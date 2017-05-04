@extends('layouts.default')

@section('title')
    Register
@stop

@section('content')
<p class="orange">You have successfully logged out. 
    <a href="{{ URL::to('/login') }}">Log in?</a></p>
@stop


