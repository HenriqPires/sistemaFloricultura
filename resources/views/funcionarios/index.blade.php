<!DOCTYPE html>
<html>
<head>
    <title>Funcionários</title>
</head>
<body>
    <h1>Lista de Funcionários</h1>

    <!-- Link para criar um novo funcionário -->
    <a href="{{ route('funcionarios.create') }}">Adicionar Novo Funcionário</a>

    <!-- Mensagem de sucesso -->
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
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
                        <a href="{{ route('funcionarios.show', $funcionario->id) }}">Ver</a>
                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>

                        <!-- Formulário para exclusão -->
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline;">
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
