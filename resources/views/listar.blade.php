<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIsualizar clientes</title>
</head>
<body>
    <h1>Visulizar Clientes</h1>

    <label  for = "Nome_Label" class="Nome_Label">Nome:</label>
    <input type = "text" name = "Nome_Input" value = "{{$cliente->Nome_Input}}">
    <br><br>
    <label  for = "Telefone_Label" class="Telefone_Label">Telefone:</label>
    <input type = "text" name = "Telefone_Input" value = "`{{$cliente->Telefone_Input}}">
    <br><br>
    <label  for = "Observacoes_Label" class="Observacoes_Label">Observações:</label>
    <input type = "date" name = "Data_Input" value = "{{$cliente->Data_Input}}">
    <br><br>
</body>
</html>