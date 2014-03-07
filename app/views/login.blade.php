<html>
  <body>
    <span>
      @section('header')
        <strong>LOGIN</strong>
      @show
    </span>

    {{ Form::open(array('url' => 'login')) }}
      <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
        {{ Session::get('message') }}
      </p>

      <table>
        <tr>
          <td>{{ Form::label('email', 'Email') }}</td>
          <td>{{ Form::text('email', Input::old('email'), array('placeholder' => 'your@email.com')) }}</td>
        </tr>
        <tr>
          <td>{{ Form::label('password', 'Password') }}</td>
          <td>{{ Form::password('password') }}</td>
        </tr>
      </table>

      {{ Form::submit('Login') }}
      <a href="{{ URL::to('signup') }}">Sign Up</a>
    {{ Form::close() }}
  </body>
</html>