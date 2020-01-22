<nav class="navbar navbar-expand-lg sticky-top navbar-light py-0">
  <div class="logo">
    {!! request()->routeIs('index') == true ? '<img src="/assets/images/logos/logo-trapiche.png" height="auto" width="180" class="pt-4">' :'' !!}
    {!! request()->routeIs('academia') == true ? '<img src="/assets/images/logos/logo-academia.png" height="auto" width="180" class="pt-4">' :'' !!}
    {!! request()->routeIs('alquileres') == true ? '<img src="/assets/images/logos/logo-alquileres.png" height="auto" width="180" class="pt-4">' :'' !!}
    {!! request()->routeIs('palco') == true ? '<img src="/assets/images/logos/logo-palco.png" height="auto" width="100" class="pt-4">' :'' !!}
    {!! request()->routeIs('torneos') == true ? '<img src="/assets/images/logos/logo-torneos.png" height="auto" width="180" class="pt-4">' :'' !!}
    {!! request()->routeIs('contactanos') == true ? '<img src="/assets/images/logos/logo-trapiche.png" height="auto" width="180" class="pt-4">' :'' !!}
    </div>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-3" id="navbarNavDropdown">
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
        <li class="nav-item">
          <a class="nav-link" href="{{route('blog')}}">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

  