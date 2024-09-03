<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Login</title>
    <!-- Adicione o link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            max-width: 600px;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 2rem;
        }
        .btn {
            margin: 0.5rem;
        }
        .nav-links {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Portal de Login</h1>

        @guest
            <div class="nav-links">
                <a href="{{ route('login.admin') }}" class="btn btn-primary">Login de Administrador</a>
                <a href="{{ route('login.funcionario') }}" class="btn btn-secondary">Login de Funcionário</a>
                <a href="{{ route('register') }}" class="btn btn-success">Registrar</a> <!-- Mostrar somente se o usuário estiver autenticado -->
            </div>
        @endguest

        @auth
            <div class="nav-links">
                <a href="{{ route('dashboard') }}" class="btn btn-info">Dashboard</a>
            </div>
        @endauth
    </div>

    <!-- Adicione o link para o JavaScript do Bootstrap (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
