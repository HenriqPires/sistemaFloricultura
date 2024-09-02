<!DOCTYPE html>
<html>
<head>
    <title>{{ $produto ? 'Editar Produto' : 'Adicionar Produto' }}</title>
</head>
<body>
    <h1>{{ $produto ? 'Editar Produto' : 'Adicionar Novo Produto' }}</h1>
    <form action="{{ $produto ? route('produtos.update', $produto) : route('produtos.store') }}" method="POST">
        @csrf
        @if($produto)
            @method('PUT')
        @endif
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome ?? '' }}" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="{{ $produto->preco ?? '' }}" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $produto->descricao ?? '' }}</textarea>
        <br>
        <button type="submit">{{ $produto ? 'Atualizar' : 'Salvar' }}</button>
    </form>
</body>
</html>