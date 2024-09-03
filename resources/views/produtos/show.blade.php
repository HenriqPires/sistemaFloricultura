<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* Fundo branco para todas as páginas */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Produto: {{ $produto->nome }}</h1>
        <p>ID: {{ $produto->id }}</p>
        <p>Preço: {{ $produto->preco }}</p>
        <p>Descrição: {{ $produto->descricao }}</p>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar para lista</a>
    </div>
</body>
</html>
