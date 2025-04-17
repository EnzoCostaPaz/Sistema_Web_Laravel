<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body>

    <nav>
        <label class="Titulo">Sistema Web</label>
        <ul class="menu">
            <li><a href="/">Home</a></li>
    </nav>

    <div class="container">
        <label class="Label-Inform">Sistema de Agendamento de serviços</label>

        <div class="Cadastrar_Btn">
            <button class="btn_Cad"><a href="/cadastrar_cliente">Cadastrar Novo Cliente</a></button>
        </div>
    </div>
    @if($clientes->isEmpty())
    <p class="Info_erro">Nenhum cliente cadastrado ainda.</p>
    @else
    <div class="Container_Clients">
        @foreach($clientes as $cliente)
        <div class="cliente_box">
            <div class="infos">
                <div class="info-row">
                    <label>Nome:</label>
                    <span>{{ $cliente->Nome_Input }}</span>
                </div>
                <div class="info-row">
                    <label>Telefone:</label>
                    <span>{{ $cliente->Telefone_Input }}</span>
                </div>
                <div class="info-row">
                    <label>Origem:</label>
                    <span>{{ $cliente->Select_Origens }}</span>
                </div>
                <div class="info-row">
                    <label>Data:</label>
                    <span>{{ $cliente->Data_Input }}</span>
                </div>
                <div class="info-row">
                    <label>Observações:</label>
                    <span>{{ $cliente->Oberserve_Input }}</span>
                </div>
                <div class="info_row_buttons">
                    <button class="Visu_Btn">
                        <a href="/listar_clientes/{{ $cliente->id }}">Visualizar</a>
                    </button>
                    <button class="Edi_Btn">
                        <a href="/editar_cliente/{{ $cliente->id }}">Editar</a>
                    </button>
                    <button class="Del_Btn">
                        <a href="/excluir_cliente/{{ $cliente->id }}">Deletar</a>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        padding-top: 80px;
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
        margin-left: 21.88px;
        font-family: 'Kanit';
        font-size: 30px;
        bottom: 50px;
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

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        margin-top: 100px;
    }

    .cliente_box {
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 8px;
        width: 31.25rem;
        font-family: Arial, sans-serif;
        margin-top: 110px;
    }

    .cliente_box label {
        font-weight: bold;
        color: #333;
    }

    .infos {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .info-row {
        display: grid;
        grid-template-columns: 120px 1fr;
        align-items: center;
        gap: 10px;
    }

    .info-row label {
        font-weight: bold;
        color: #555;
        margin: 0;
    }

    .info-row span {
        color: #333;
        background-color: #e9ecef;
        padding: 6px 10px;
        border-radius: 5px;
        display: inline-block;
    }

    .Cadastrar_Btn {
        margin-top: 200px
    }

    .Container_Clients {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .Cadastrar_Btn {
        margin-top: 0;
    }

    .Cadastrar_Btn a {
        text-decoration: none;
        color: #ccc;
    }

    .Cadastrar_Btn button {
        border: 1px solid #333;
        width: 190px;
        height: 30px;
        border-radius: 5px;
        background-color: #0056b3;
        font-family: 'Roboto';
    }

    .Cadastrar_Btn:hover button {
        background-color: rgb(4, 57, 114);
    }

    .Visu_Btn,
    .Edi_Btn {
        flex-direction: row;
        border: 1px solid #333;
        width: 90px;
        height: 30px;
        border-radius: 5px;
        background-color: #0056b3;
        font-family: 'Roboto';
        text-decoration: none;
    }

    .Del_Btn {
        background-color: #A52A2A;
        flex-direction: row;
        border: 1px solid #333;
        width: 90px;
        height: 30px;
        border-radius: 5px;
        font-family: 'Roboto';
        text-decoration: none;
    }

    .Del_Btn:hover {
    background-color: rgb(105, 0, 0);
}

    .Visu_Btn,
    .Edi_Btn,
    .Del_Btn,
    a {
        text-decoration: none;
        color: #ccc;
    }

    .info_row_buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
    }
</style>