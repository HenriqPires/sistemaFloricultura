<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Funcionário</title>
</head>
<body>
    <h1>Detalhes do Funcionário</h1>

    <p><strong>ID:</strong> {{ $funcionario->id }}</p>
    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
    <p><strong>Email:</strong> {{ $funcionario->email }}</p>

    <!-- Link para voltar à lista de funcionários -->
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
