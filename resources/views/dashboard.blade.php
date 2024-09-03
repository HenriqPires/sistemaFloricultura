<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Font Awesome para ícones -->
    <style>
        .dashboard-container {
            display: flex;
            height: 100vh;
            margin-top: 30px;
        }

        .sidebar {
            width: 250px;
            background-color: #a78bfa; /* Cor lilás claro */
            padding: 20px;
            color: #fff;
            position: fixed;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribui o espaço entre o menu e o botão de logout */
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #fff;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px;
            margin: 10px 0;
            text-align: left;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s;
            border-bottom: 2px solid #ffffff; /* Linha abaixo dos itens */
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #8b5cf6; /* Tom mais escuro para hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para destacar o item */
            border-bottom: 2px solid #e0e0e0; /* Linha de destaque no hover */
        }

        .main-content {
            margin-left: 270px; /* Espaço para a sidebar */
            padding: 20px;
            flex-grow: 1;
        }

        .dashboard-header h1 {
            color: #5a5a5a;
        }

        .btn-danger-custom {
            background-color: #e63946; /* Cor vermelha para o botão de logout */
            color: #fff;
            border: none;
        }

        .btn-danger-custom:hover {
            background-color: #d62839; /* Tom mais escuro para hover */
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div>
                <h2 class="text-center">Menu</h2>
                <a href="{{ route('produtos.index') }}"><i class="fas fa-box"></i> Gerenciar Produtos</a>
                <a href="{{ route('entregadores.index') }}"><i class="fas fa-truck"></i> Gerenciar Entregadores</a>
                <a href="{{ route('funcionarios.index') }}"><i class="fas fa-users"></i> Gerenciar Funcionários</a>
            </div>
            <div class="text-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-danger-custom">Logout</button>
                </form>
            </div>
        </div>

        <div class="main-content">
            <div class="dashboard-header text-center">
                <h1>Bem-vindo ao FlowerHouse</h1>
            </div>
        </div>
    </div>
</body>
</html>
