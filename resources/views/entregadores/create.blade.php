<!DOCTYPE html>
<html>
<head>
    <title>Criar Entregador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Criar Novo Entregador</h1>
        <form action="{{ route('entregadores.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <a href="{{ route('entregadores.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>
