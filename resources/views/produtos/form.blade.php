<!DOCTYPE html>
<html>
<head>
    <title>{{ $produto ? 'Editar Produto' : 'Adicionar Produto' }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>{{ $produto ? 'Editar Produto' : 'Adicionar Novo Produto' }}</h1>
        <form action="{{ $produto ? route('produtos.update', $produto) : route('produtos.store') }}" method="POST">
            @csrf
            @if($produto)
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco" id="preco" class="form-control" value="{{ $produto->preco ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control">{{ $produto->descricao ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">{{ $produto ? 'Atualizar' : 'Salvar' }}</button>
        </form>
    </div>
</body>
</html>
