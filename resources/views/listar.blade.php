<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIsualizar clientes</title>
</head>

<body>
    <nav>
        <label class="Titulo">Sistema Web</label>
        <ul class="menu">
            <li><a href="/">Home</a></li>
        </ul>
    </nav>

    <div class="container">
        <label class="Label-Inform">Listagem de Clientes</label>
    </div>

    <form>
        <div class="conatainer_nome">
            <label for="Nome_Label" class="Nome_Label">Nome:</label>
            <input type="text" name="Nome_Input" value="{{ $cliente->Nome_Input }}" disabled>
        </div>

        <div class="container_telefone">
            <label for="Telefone_Label" class="Telefone_Label">Telefone:</label>
            <input type="text" name="Telefone_Input" value="{{ $cliente->Telefone_Input }}" disabled>
        </div>

        <div class="container_observacoes">
            <label for="Observacoes_Label" class="Observacoes_Label">Observações:</label>
            <textarea class="Observacoes_Text" rows="4" disabled>{{ $cliente->Oberserve_Input }}</textarea>
        </div>

        <div class="container_Origens">
            <label for="Origens_label">Forma de Contato:</label>
            <input type="text" name="Select_Origens" value="{{ $cliente->Select_Origens }}" disabled>
        </div>

        <div class="container_Data">
            <label for="Data_Label" class="Data_Label">Data de Contato:</label>
            <input type="date" name="Data_Input" value="{{ $cliente->Data_Input }}" disabled>
        </div>
    </form>
</body>

</html>

<style>
 @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap');

body {
    font-family: 'Kanit', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
}

nav {
    width: 100%;
    background-color: #007bff;
    padding: 10px 20px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.Titulo {
    font-size: 24px;
    font-weight: bold;
    color: white;
}

.menu {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;
}

.menu li {
    margin: 0 15px;
}

.menu li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    font-weight: bold;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.menu li a:hover {
    background-color: #0056b3;
    text-shadow: 0px 0px 5px #fff;
}

.Label-Inform {
    margin-bottom: 90px;
    font-size: 30px;
    font-weight: bold;
}
.container {
    margin-top: 65px;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 38.75rem;
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.container_nome,
.container_telefone,
.container_observacoes,
.container_Origens,
.container_Data {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input,
select,
textarea {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
}

input:disabled,
textarea:disabled {
    background-color: #e9ecef;
}

</style>