@extends('items.layout')

@section('header')
  @parent
  &raquo;
  EDIT
@stop

@section('content')
  
  {{ Form::model($item, array('url' => URL::route('item.update', $item->id), 'method' => 'put')) }}

    @include('items.form_view')

    {{ Form::submit('Update') }}
    
  {{ Form::close() }}

@stop