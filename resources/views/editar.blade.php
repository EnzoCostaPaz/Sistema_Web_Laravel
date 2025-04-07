<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
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
        <label class="Label-Inform">Edição de Clientes</label>
    </div>

    <form action="/editar_cliente/{{ $cliente->id}}" method="post">
        @csrf
        <div class="conatainer_nome">
            <label for="Nome_Label" class="Nome_Label">Nome:</label>
            <input type="text" name="Nome_Input" value="{{$cliente->Nome_Input}}">
        </div>

        <div class="container_telefone">
            <label for="Telefone_Label" class="Telefone_Label">Telefone:</label>
            <input type="text" name="Telefone_Input" value="{{$cliente->Telefone_Input}}">
        </div>

        <div class="container_Origens">
            <label for="Select_Origens">Origem:</label>
            <br>
            <select name="Select_Origens" required>
                <option value="Celular" {{ $cliente->Select_Origens == 'Celular' ? 'selected' : '' }}>Celular</option>
                <option value="Telefone-Fixo" {{ $cliente->Select_Origens == 'Telefone-Fixo' ? 'selected' : '' }}>Telefone-Fixo</option>
                <option value="Whatsapp" {{ $cliente->Select_Origens == 'Whatsapp' ? 'selected' : '' }}>Whatsapp</option>
            </select>
        </div>

        <div class="container_Data">
            <label class="Data_Label">Data de Contato</label>
            <input type="date" class="Data_Input" name="Data_Input" value="{{$cliente-> Data_Input}}">
        </div>

        <div class="container_observacoes">
            <label for="Oberserve_Input">Observações:</label>
            <input type="text" name="Oberserve_Input" value="{{ $cliente->Oberserve_Input }}">
        </div>

        <button>Editar</button>
    </form>
</body>

</html>