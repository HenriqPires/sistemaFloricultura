<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Administrador</title>
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
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            margin-bottom: 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .register-link {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="text-center">Login de Administrador</h1>
        <form method="POST" action="{{ route('login.admin.store') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <!-- Mostrar o link de registro apenas para administradores autenticados -->
        @auth
            @if (Auth::user()->role === 'admin')
                <div class="register-link text-center">
                    <a href="{{ route('register') }}" class="btn btn-secondary btn-block">
                        Registrar Novo Usuário
                    </a>
                </div>
            @endif
        @endauth
    </div>
</body>
</html>
