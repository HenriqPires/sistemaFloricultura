<!DOCTYPE html>
<html>
<head>
    <title>Editar Entregador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Entregador</h1>

        {{ dd($entregador) }} <!-- Verifique se o objeto está correto -->

        <form action="{{ route('entregadores.update', $entregador->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $entregador->nome) }}" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $entregador->telefone) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $entregador->email) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
