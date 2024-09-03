<!DOCTYPE html>
<html>
<head>
    <title>Editar Funcionário</title>
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
        <h1>Editar Funcionário</h1>

        <!-- Formulário para atualizar funcionário -->
        <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $funcionario->email) }}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>

        <!-- Link para voltar à lista de funcionários -->
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>
