<!DOCTYPE html>
<html>
<head>
    <title>Criar Funcionário</title>
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
        <h1>Criar Funcionário</h1>

        <!-- Formulário para adicionar um novo funcionário -->
        <form action="{{ route('funcionarios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>

        <!-- Link para voltar à lista de funcionários -->
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>

