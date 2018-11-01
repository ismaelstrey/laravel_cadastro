<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Produtos</title>
</head>
<body>
<div class="container">
    @component('componente.componente_navbar', ["current" => $current])

    @endcomponent
    <main role="main">
        @hasSection ('body')
            @yield('body')
        @endif
    </main>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
