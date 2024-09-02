<!DOCTYPE html>
<html>
<head>
    <title>Editar Entregador</title>
</head>
<body>
    <h1>Editar Entregador</h1>

    {{ dd($entregador) }} <!-- Verifique se o objeto está correto -->

    <form action="{{ route('entregadores.update', $entregador->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $entregador->nome) }}" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $entregador->telefone) }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $entregador->email) }}" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
