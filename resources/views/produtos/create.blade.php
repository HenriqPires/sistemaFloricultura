<!DOCTYPE html>
<html>
<head>
    <title>Criar Novo Produto</title>
</head>
<body>
    <h1>Criar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="{{ old('preco') }}" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ old('descricao') }}</textarea>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('produtos.index') }}">Voltar para lista</a>
</body>
</html>