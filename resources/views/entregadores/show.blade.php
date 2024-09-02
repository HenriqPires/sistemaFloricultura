<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Entregador</title>
</head>
<body>
    <h1>Detalhes do Entregador</h1>

    {{ dd($entregador) }}

    <p><strong>Nome:</strong> {{ $entregador->nome }}</p>
    <p><strong>Telefone:</strong> {{ $entregador->telefone }}</p>
    <p><strong>Email:</strong> {{ $entregador->email }}</p>

    <a href="{{ route('entregadores.edit', $entregador->id) }}">Editar</a>
    <form action="{{ route('entregadores.destroy', $entregador->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
</body>
</html>

