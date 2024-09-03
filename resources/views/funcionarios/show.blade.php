<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Funcionário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-lilas {
            background-color: #a78bfa; /* Cor lilás claro */
            color: #ffffff; /* Cor do texto */
            border: none; /* Remove a borda */
        }

        .btn-lilas:hover {
            background-color: #8b5cf6; /* Tom mais escuro para hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Funcionário</h1>

        <p><strong>ID:</strong> {{ $funcionario->id }}</p>
        <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
        <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
        <p><strong>Email:</strong> {{ $funcionario->email }}</p>

        <!-- Link para voltar à lista de funcionários -->
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>
