<html>
  @section('assets')
    {{ stylesheet_link_tag('application') }}
    {{ javascript_include_tag('application') }}
  @show
  <body>
    <span>
      @section('header')
        <strong><a href="{{ URL::route('item.index') }}" style='font-size: 20px;'>ITEM LIST</a></strong>
        <span style='float:right'>
          Welcome {{ Auth::user()->email }}
          <a href="{{ URL::to('logout') }}">LOGOUT</a>
          <br>
          Role/s:
          @if (Auth::user()->roles())
            @foreach (Auth::user()->roles()->get() as $role)
              <p>{{ $role->name }}</p>
            @endforeach
          @else
            None
          @endif
        </span>
      @show
    </span>

    @yield('content')
  </body>
</html>