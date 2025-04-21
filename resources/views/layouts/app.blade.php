<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    @yield('content')
</div>

<a href="{{ route('register') }}" class="btn btn-primary">Registrar</a>
{{--@auth--}}
{{--    <form method="POST" action="{{ route('logout') }}">--}}
{{--        @csrf--}}
{{--        <button type="submit">Cerrar sesión</button>--}}
{{--    </form>--}}
{{--@endauth--}}

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
