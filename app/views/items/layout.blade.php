<html>
  <body>
    <span>
      @section('header')
        <strong><a href="{{ URL::route('item.index') }}" style='font-size: 20px;'>ITEM LIST</a></strong>
        <span style='float:right'>
          Welcome {{ Auth::user()->email }}
          <a href="{{ URL::to('logout') }}">LOGOUT</a>
        </span>
      @show
    </span>

    @yield('content')
  </body>
</html>