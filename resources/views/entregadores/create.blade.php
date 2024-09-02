<!DOCTYPE html>
<html>
<head>
    <title>Criar Entregador</title>
</head>
<body>
    <h1>Criar Novo Entregador</h1>
    <form action="{{ route('entregadores.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('entregadores.index') }}">Voltar</a>
</body>
</html>
