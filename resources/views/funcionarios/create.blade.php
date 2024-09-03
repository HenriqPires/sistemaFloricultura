<!DOCTYPE html>
<html>
<head>
    <title>Criar Funcionário</title>
</head>
<body>
    <h1>Criar Funcionário</h1>

    <!-- Formulário para adicionar um novo funcionário -->
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <button type="submit">Salvar</button>
    </form>

    <!-- Link para voltar à lista de funcionários -->
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
