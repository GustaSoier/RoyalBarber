<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/login.css') }}">

    <link rel="shortcut icon" href="{{ asset ('images/iconroyalbarberBRANCO.png') }}" type="image/x-icon">
    <title>Cadastrar - RoyalBarber</title>
</head>
<body style="background: url(../images/bg-cadastrar.png) no-repeat center">
    <div class="container">
        <div class="login-box">
            <img src="{{ asset ('images/logo-royalbarber-preto.png') }}" alt="">
            <h2>Crie sua conta!</h2>
            <form action="{{ route ('login') }}" method="POST" class="login-form">
                @csrf
                <div class="textbox">
                    <input type="text" name="nome" placeholder="Nome:" value="{{ old('nome') }}">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                </div>
                <div class="textbox">
                    <input type="text" name="telefone" placeholder="Telefone:" value="{{ old('telefone') }}">
                    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                </div>
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email:" value="{{ old('email') }}">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Senha:" value="{{ old ('password') }}">
                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                </div>

                <input type="submit" class="btn" value="Entrar">

                <div class="link-cadastrar">
                    <a href="{{ url ('/login') }}">Voltar para Login</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
