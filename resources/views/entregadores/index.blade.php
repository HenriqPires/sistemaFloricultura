<!DOCTYPE html>
<html>
<head>
    <title>Entregadores</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-lilas {
            background-color: #a78bfa; /* Cor lilás claro */
            color: #ffffff; /* Cor do texto */
            border: none; /* Remove a borda */
        }

        .btn-lilas:hover {
            background-color: #8b5cf6; /* Tom mais escuro para hover */
            color: #ffffff; /* Cor do texto */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Entregadores</h1>
        <a href="{{ route('entregadores.create') }}" class="btn btn-lilas mb-3">Novo Entregador</a>
        
        <!-- Mensagem de sucesso -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
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
                            <a href="{{ route('entregadores.show', $entregador->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('entregadores.edit', $entregador->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('entregadores.destroy', $entregador->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
