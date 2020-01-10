<nav class="navbar navbar-expand-lg navbar-light py-0">
  <div class="logo">
    {!! request()->routeIs('index') == true ? '<img src="/assets/images/logotrapiche.png" height="auto" width="200" class="pt-4">' :'' !!}
    {!! request()->routeIs('academia') == true ? '<img src="/assets/images/logoacademia.png" height="auto" width="200" class="pt-4">' :'' !!}
    {!! request()->routeIs('alquileres') == true ? '<img src="/assets/images/logotrapiche.png" height="auto" width="200" class="pt-4">' :'' !!}
    {!! request()->routeIs('palco') == true ? '<img src="/assets/images/logotrapiche.png" height="auto" width="200" class="pt-4">' :'' !!}
    {!! request()->routeIs('torneos') == true ? '<img src="/assets/images/logotrapiche.png" height="auto" width="200" class="pt-4">' :'' !!}
    {!! request()->routeIs('contactanos') == true ? '<img src="/assets/images/logotrapiche.png" height="auto" width="200" class="pt-4">' :'' !!}
    </div>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Futeca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('academia')}}">Academia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('alquileres')}}">Alquileres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('palco')}}">Palco</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('torneos')}}">Torneos</a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contactanos')}}">Contáctanos</a>
        </li>
      </ul>
    </div>
  </nav>

  