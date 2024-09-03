<!DOCTYPE html>
<html>
<head>
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>

    <!-- Formulário para atualizar funcionário -->
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $funcionario->email) }}" required>

        <button type="submit">Atualizar</button>
    </form>

    <!-- Link para voltar à lista de funcionários -->
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
</body>
</html>
