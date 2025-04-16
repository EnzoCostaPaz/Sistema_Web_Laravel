<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>

    <nav>
        <label class="Titulo">Sistema Web</label>
        <ul class="menu">
            <li><a href="#">Home</a></li>
    </nav>

    <div class="container">
        <label class="Label-Inform"> Sistema de Agendamenento de serviços</label>
    </div>

    <div class="container mt-4">
        <a href="/cadastrar_cliente" class="btn btn-success">Cadastrar Novo Cliente</a>
    </div>
    
    <div class="container mt-5">
        <h2>Lista de Clientes</h2>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Origem</th>
                <th>Data</th>
                <th>Observações</th>
            </tr>

            @if($clientes->isEmpty())
            <p class="text-center mt-3">Nenhum cliente cadastrado ainda.</p>
            @else
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->Nome_Input }}</td>
                <td>{{ $cliente->Telefone_Input }}</td>
                <td>{{ $cliente->Select_Origens }}</td>
                <td>{{ $cliente->Data_Input }}</td>
                <td>{{ $cliente->Oberserve_Input }}</td>
            </tr>
            @endforeach
            @endif


        </table>
    </div>

</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    /* Reset básico */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
    }

    /* Estilização do menu */
    nav {
        width: 100%;
        background-color: #007bff;
        padding: 10px 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .Label-Inform {
        margin-top: 60px;
        margin-left: 21.880;
        margin-top: 130px;
        font-family: 'Kanit';
        font-size: 30px;
    }

    .Titulo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    .menu li {
        position: relative;
        margin: 0 15px;
    }

    .menu li a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
        font-weight: bold;
        transition: 0.3s;
        border-radius: 4px;
    }

    .menu li a:hover {
        background-color: #0056b3;
        text-shadow: 0px 0px 5px #fff;
    }

    /* Submenu */
    .menu li ul {
        position: absolute;
        top: 40px;
        left: 0;
        background-color: white;
        list-style: none;
        padding: 0;
        margin: 0;
        display: none;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .menu li:hover ul {
        display: block;
    }

    .menu li ul li {
        width: 150px;
        border-bottom: 1px solid #ddd;
    }

    .menu li ul li a {
        color: #333;
        padding: 10px;
        display: block;
        text-align: center;
    }

    .menu li ul li a:hover {
        background-color: #007bff;
        color: white;
    }
</style>