@extends('app')

@section('content')
    <h1>Dashboard</h1>

    @if(Session::has('message'))
        <div class="modal success">{!! Session::get('message')!!}</div>
    @endif

    Dit is de applicatie:
    <a href="<?php echo url('todos'); ?>">Todo-applicatie</a>



@stop