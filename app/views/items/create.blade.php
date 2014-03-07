@extends('items.layout')

@section('header')
  @parent
  &raquo;
  ADD
@stop

@section('content')
  
  {{ Form::open(array('url' => URL::route('item.store'))) }}

    @include('items.form_view')

    {{ Form::submit('Add') }}
    
  {{ Form::close() }}

@stop