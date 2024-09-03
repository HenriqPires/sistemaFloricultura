<!DOCTYPE html>
<html>
<head>
    <title>Funcionários</title>
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
        <h1>Lista de Funcionários</h1>

        <!-- Link para criar um novo funcionário -->
        <a href="{{ route('funcionarios.create') }}" class="btn btn-lilas mb-3">Adicionar Novo Funcionário</a>

        <!-- Mensagem de sucesso -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->id }}</td>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->telefone }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>
                            <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline;">
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
