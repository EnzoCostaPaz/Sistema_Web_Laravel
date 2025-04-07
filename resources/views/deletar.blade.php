<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Clientes</title>
</head>

<body>
    <nav>
        <label class="Titulo">Sistema Web</label>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Consultar</a></li>
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

        <button>Editar</button>
    </form>
</body>

</html>