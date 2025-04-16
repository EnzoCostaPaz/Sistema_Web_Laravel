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
            <li><a href="/">Home</a></li>
            <li><a href="#">Consultar</a></li>
    </nav>

    <div class="container">
        <label class="Label-Inform"> Sistema de Agendamenento de serviços</label>
    </div>

    <form action="/cadastrar_Cliente" method="POST">
        @csrf
        <div class="conatainer_nome">
            <label class="Nome_Label">Nome</label>
            <input type="text" name="Nome_Input" id="Nome_Input" required>
        </div>
        <div class="conatainer_Email">
            <label class="Telefone_Label">Telefone</label>
            <input type="text" name="Telefone_Input" id="Telefone_Input" required>
        </div>

        <div class="conatainer_Origens">
            <label class="Origens_label">Origens</label>
            <br>
            <select class="Select_Origens" name="Select_Origens">
                <option value="Celular">Celular</option>
                <option value="Telefone-Fixo">Telefone-Fixo</option>
                <option value="Whatsapp">Whatsapp</option>
            </select>
        </div>

        <div class="container_Data">
            <label class="Data_Label">Data de Contato</label>
            <input type="date" class="Data_Input" name="Data_Input" required>
        </div>

        <div class="Container_Observes">
            <label class="Observacoes_Label">Observações</label>
            <textarea class="Observaoes_Text" rows="4" name="Oberserve_Input" required></textarea>

        </div>

        <button type="submit">Cadastrar</button>
    </form>
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

    /* Ajuste do formulário para evitar sobreposição com o menu */
    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 38.75rem;
        margin-top: 70px;
        /* Evita que o formulário fique coberto pelo menu */
    }

    /* Ajuste dos containers */
    .conatainer_nome,
    .conatainer_Email,
    .conatainer_Origens,
    .container_Data,
    .Container_Observes {
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
    }

    /* Estilização dos rótulos */
    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    /* Estilização dos inputs e textarea */
    input,
    select,
    textarea {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    /* Ajuste do botão */
    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
    }

    a {
        background-color: none;
        color: #fff;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>