@extends('app')

@section('content')
        <!-- check for flash notification message -->

@if(Session::has('message'))
    <div class="modal success">{!! Session::get('message')!!}</div>
@endif
<h1>Welkom op de todo-app</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h2>Lorem ipsum</h2>

<ul>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
</ul>

@stop