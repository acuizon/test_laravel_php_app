@extends('items.layout')

@section('header')
  @parent
  &raquo;
  VIEW
  &raquo;
  {{ $item->name }}
@stop

@section('content')
  
  <table>
    <tr>
      <td>Description:</td>
      <td>{{ $item->description }}</td>
    </tr>
    <tr>
      <td>Stock:</td>
      <td>{{ $item->stock }}</td>
    </tr>
  </table>

  <br>

  <a href="{{ URL::route('item.edit', $item->id) }}">Edit</a>
  {{ Form::open(array('route' => array('item.destroy', $item->id), 'method' => 'delete')) }}
      <button type="submit" href="{{ URL::route('item.destroy', $item->id) }}" class="btn btn-danger btn-mini">Delete</button>
  {{ Form::close() }}

@stop