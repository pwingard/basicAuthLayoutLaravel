@extends('layouts.default')

@section('title')
    Home Page
@stop

@section('content')
    <h2 class="orange">Thanks for registering</h2>
    <p class="orange">You've registered {{ $theEmail }}.</p>
@stop