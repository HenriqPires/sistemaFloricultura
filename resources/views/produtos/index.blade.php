<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
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
    <div class="container mt-4">
        <h1>Produtos</h1>
        <a href="{{ route('produtos.create') }}" class="btn btn-lilas mb-3">Adicionar Novo Produto</a>
         <!-- Mensagem de sucesso -->
         @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>
                            <a href="{{ route('produtos.show', $produto) }}" class="btn btn-info btn-sm">Visualizar</a>
                            <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
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
