<!DOCTYPE html>
<html>
<head>
    <title>Criar Novo Produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Criar Novo Produto</h1>
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco" id="preco" class="form-control" value="{{ old('preco') }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control">{{ old('descricao') }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-2">Voltar para lista</a>
    </div>
</body>
</html>
