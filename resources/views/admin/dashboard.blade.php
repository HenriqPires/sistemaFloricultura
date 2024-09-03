<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Se estiver usando CSS -->
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Dashboard do Administrador</h1>
        <ul>
            <li><a href="{{ route('produtos.index') }}">Gerenciar Produtos</a></li>
            <li><a href="{{ route('entregadores.index') }}">Gerenciar Entregadores</a></li>
            <li><a href="{{ route('funcionarios.index') }}">Gerenciar Funcionários</a></li>
        </ul>
        <a href="{{ route('logout') }}">Logout</a>
    </div>
</body>
</html>
