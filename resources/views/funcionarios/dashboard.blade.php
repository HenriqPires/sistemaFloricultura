<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema da Floricultura</title>
    <!-- Inclua seus estilos aqui -->
</head>
<body>
    <h1>Bem-vindo ao Sistema da Floricultura</h1>
    <ul>
        <li><a href="{{ route('produtos.index') }}">Gerenciar Produtos</a></li>
    </ul>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
