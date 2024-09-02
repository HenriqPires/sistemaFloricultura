<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Produto</title>
</head>
<body>
    <h1>Produto: {{ $produto->nome }}</h1>
    <p>ID: {{ $produto->id }}</p>
    <p>Preço: {{ $produto->preco }}</p>
    <p>Descrição: {{ $produto->descricao }}</p>
    <a href="{{ route('produtos.index') }}">Voltar para lista</a>
</body>
</html>