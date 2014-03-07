<html>
  <body>
    <span>
      @section('header')
        <strong>SIGN UP</strong>
      @show
    </span>

    {{ Form::open(array('url' => 'register')) }}
      <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
        {{ $errors->first('password_confirmation') }}
      </p>

      <table>
        <tr>
          <td>{{ Form::label('email', 'Email') }}</td>
          <td>{{ Form::text('email', Input::old('email')) }}</td>
        </tr>
        <tr>
          <td>{{ Form::label('password', 'Password') }}</td>
          <td>{{ Form::password('password') }}</td>
        </tr>
        <tr>
          <td>{{ Form::label('password_confirmation') }}</td>
          <td>{{ Form::password('password_confirmation') }}</td>
        </tr>
      </table>

      {{ Form::submit('Register') }}
    {{ Form::close() }}
  </body>
</html>