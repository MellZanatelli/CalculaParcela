<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de Parcelas de Empréstimos</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="imagem">
            <img class="mb-4 img" src="{{asset('storage/image/logo.png')}}" alt="logo" width="90" height="90" />
        </div>
        @hasSection('content')
        @yield('content')
    </div>

</html>