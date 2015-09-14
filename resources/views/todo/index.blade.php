@extends('app')

@section('content')
    <h1>de TODO app</h1>
    @if($errors->has())
        <div class="modal error">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    @if(Session::has('message'))
        <div class="modal success">{!! Session::get('message')!!}</div>
    @endif
    {!! Form::open(array(
                          'class' => 'form-horizontal',
                          'role' => 'form',
                          'url' => 'todos'
                          )) !!}
    {!! Form::label('label', 'todo item') !!}
    {!! Form::text('label', '', array('class' => 'form-control', 'placeholder' => 'todo item', 'id' => 'label'))!!}
    {!! Form::submit('Toevoegen', array('class' => 'btn btn-success'))!!}
    {!! Form::close() !!}
    <hr >
    @if (count($todos)>0)
        <ul class="list">
        @foreach($todos as $td)
                <li class="todo" id="item_{{ $td->id  }}">
                    <span class="activate" title="Vink maar af"><a href="javascript:vinkAf('{{ $td->id  }}');" class="icon fontawesome-ok-sign"></a></span>
                    <span class="text">{{ $td->label }}</span>
                    <span class="delete" title="Verwijder dit maar"><a href="<?php echo url('todos'); ?>/{{ $td->id  }}/destroy" class="icon fontawesome-remove"></a></span>
                </li>
        @endforeach
        </ul>
    @else
        Nog geen todo-items.
    @endif





@stop