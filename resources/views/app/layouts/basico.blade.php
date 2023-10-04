<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>e-usiPro - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">

    </head>

    <body>

        @include('app.layouts._partials.topo')
        @yield('conteudo')

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    </body>
</html>

