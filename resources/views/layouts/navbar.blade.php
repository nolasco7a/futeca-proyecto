<nav class="navbar navbar-expand-lg sticky-top navbar-light py-0">
<a href="{{route('index')}}">
    <div class="logo">
      {!! request()->routeIs('index') == true ? '<img src="/assets/images/logos/logo-trapiche.png" height="auto" width="180" class="pt-4">' :'' !!}
      {!! request()->routeIs('academia') == true ? '<img src="/assets/images/logos/logo-academia.png" height="auto" width="180" class="pt-4">' :'' !!}
      {!! request()->routeIs('alquileres') == true ? '<img src="/assets/images/logos/logo-alquileres.png" height="auto" width="180" class="pt-4">' :'' !!}
      {!! request()->routeIs('palco') == true ? '<img src="/assets/images/logos/logo-palco.png" height="auto" width="100" class="pt-4">' :'' !!}
      {!! request()->routeIs('torneos') == true ? '<img src="/assets/images/logos/logo-torneos.png" height="auto" width="180" class="pt-4">' :'' !!}
      {!! request()->routeIs('contactanos') == true ? '<img src="/assets/images/logos/logo-trapiche.png" height="auto" width="180" class="pt-4">' :'' !!}
      {!! request()->routeIs('blog') == true ? '<img src="/assets/images/logos/logo-trapiche.png" height="auto" width="180" class="pt-4">' :'' !!}
      <style>
  .navbar-light .navbar-toggler {
      color: transparent;
      border-color: transparent;
  }
        </style>
      </div>
  </a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="
    background-image: url(&quot;data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E&quot;);
"></span>
    </button>
    <div class="collapse navbar-collapse py-3" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('academia')}}">Academia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('alquileres')}}">Alquileres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('torneos')}}">Torneos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('palco')}}">Palco</a>
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

  