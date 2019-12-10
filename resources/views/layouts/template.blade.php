<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts.head')
    @include('layouts.styles')

</head>
<body>
    @include('layouts.navbar')
    {{-- contenido dinamico --}}

    <div class=>
    @yield('content')
    {{-- /contenido dinamico --}}
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>