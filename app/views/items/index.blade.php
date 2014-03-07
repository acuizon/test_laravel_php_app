@extends('items.layout')

@section('content')
  <br>
  <br>  
  <a href="{{ URL::route('item.create') }}">ADD ITEM</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->stock }}</td>
          <td>
            <a href="{{ URL::route('item.show', $item->id) }}">View Item</a>
            <a href="{{ URL::route('item.edit', $item->id) }}">Edit</a>
            {{ Form::open(array('route' => array('item.destroy', $item->id), 'method' => 'delete')) }}
              <button type="submit" href="{{ URL::route('item.destroy', $item->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach  
    </tbody>
  </table>

@stop