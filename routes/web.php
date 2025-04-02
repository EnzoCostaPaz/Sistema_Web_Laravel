<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar_Cliente', function(Request $request){

    //dd($requesr->all());

    Cliente::create([
        'Nome_Input' => $request ->Nome_Input,
        'Telefone_Input' => $request->Telefone_Input,
        'Select_Origens' => $request->Select_Origens,
        'Data_Input' => $request->Data_Input,
        'Oberserve_Input' => $request->Oberserve_Input,

    ]);

    echo "Cliente Cadastrado";

});
Route::get('/listar_produtos/{id}',function($id){
    //dd(Produto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('listar',['cliente' => $cliente]);
});

//Editar

Route::get('/editar_cliente/{id}', function($id){
    //dd(Cliente::find($id)); //debug and die

    $cliente = Cliente::find($id);
    return view('editar', ['cliente' => $cliente]);
});

Route::post('/editar_cliente/{id}', function(Request $request, $id){
    //dd($request->all());
    $cliente = Cliente::find($id);

    $cliente->update([
        'Nome_Input' => $request->Nome_Input,
        'Telefone_Input' => $request->Telefone_Input,
        'Select_Origens' => $request->Select_Origens,
        'Data_Input' => $request->Data_Input,
        'Oberserve_Input' => $request->Oberserve_Input 
    ]);
    echo "Produto editado com sucesso!";
});

Route::get('/excluir_cliente/{id}', function($id){
    //dd($request->all());
    $cliente = Cliente:: find($id);
    $cliente->delete();

    echo "Cliente Excluido com sucesso";
});


