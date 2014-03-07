<table>
  <tr>
    <td>{{ Form::label('name', 'Item Name', array('style' => 'padding-right: 50px;')) }}</td>
    <td>{{ Form::text('name') }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('description', 'Item Description') }}</td>
    <td>{{ Form::textarea('description') }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('stock', 'Item Stocks') }}</td>
    <td>{{ Form::selectRange('stock', 1, 5) }}</td>
  </tr>
</table>
