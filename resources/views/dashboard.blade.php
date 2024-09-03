<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao Sistema da Floricultura</h1>
    <ul>
        <li><a href="{{ route('produtos.index') }}">Gerenciar Produtos</a></li>
        <li><a href="{{ route('entregadores.index') }}">Gerenciar Entregadores</a></li>
        <li><a href="{{ route('funcionarios.index') }}">Gerenciar Funcionários</a></li>
    </ul>

     <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
   
</body>
</html>