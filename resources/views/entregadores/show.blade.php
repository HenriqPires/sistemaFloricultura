<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Entregador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Entregador</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nome: {{ $entregador->nome }}</h5>
                <p class="card-text">Telefone: {{ $entregador->telefone }}</p>
                <p class="card-text">Email: {{ $entregador->email }}</p>
                <a href="{{ route('entregadores.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>
