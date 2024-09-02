<!DOCTYPE html>
<html>
<head>
    <title>Entregadores</title>
</head>
<body>
    <h1>Entregadores</h1>
    <a href="{{ route('entregadores.create') }}">Novo Entregador</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entregadores as $entregador)
                <tr>
                    <td>{{ $entregador->nome }}</td>
                    <td>{{ $entregador->telefone }}</td>
                    <td>{{ $entregador->email }}</td>
                    <td>
                        <a href="{{ route('entregadores.show', $entregador->id) }}">Ver</a>
                        <a href="{{ route('entregadores.edit', $entregador->id) }}">Editar</a>
                        <form action="{{ route('entregadores.destroy', $entregador->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>