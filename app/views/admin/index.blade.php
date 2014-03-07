@extends('items.layout')

@section('content')
  <br>
  <br>
  
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Role</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->roles()->get()->first()->name }}</td>
          <td>
          </td>
        </tr>
      @endforeach  
    </tbody>
  </table>

@stop