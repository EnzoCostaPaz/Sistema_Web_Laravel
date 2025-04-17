<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//rota para levar para a pagina de cadastrar
Route::get('/cadastrar_cliente', function () {
    return view('cadastrar'); // essa será sua view do formulário
});
Route::post('/cadastrar_Cliente', function(Request $request){

    //dd($request->all());

    Cliente::create([
        'Nome_Input' => $request ->Nome_Input,
        'Telefone_Input' => $request->Telefone_Input,
        'Select_Origens' => $request->Select_Origens,
        'Data_Input' => $request->Data_Input,
        'Oberserve_Input' => $request->Oberserve_Input,

    ]);

    return redirect('/')->with('success', 'Cliente cadastrado com sucesso!');

});
Route::get('/listar_clientes/{id}',function($id){
    //dd(Produto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('listar',['cliente' => $cliente]);
});

//Rota para mostrar todos os clientes
Route::get('/', function () {
    $clientes = Cliente::all(); // pega todos os clientes
    return view('welcome', ['clientes' => $clientes]);
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
    return redirect('/')->with('success', 'Cliente editado com sucesso!');
});

//excluir

Route::get('/excluir_cliente/{id}', function ($id) {
     //dd(Produto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('deletar', ['cliente' => $cliente]);
});

Route::post('/excluir_cliente/{id}', function (Request $request, $id) {
    //dd($request->all());
    $cliente = Cliente::find($id);

    $cliente->delete([
        'Nome_Input' => $request->Nome_Input,
        'Telefone_Input' => $request->Telefone_Input,
        'Select_Origens' => $request->Select_Origens,
        'Data_Input' => $request->Data_Input,
        'Oberserve_Input' => $request->Oberserve_Input 
    ]);

    return redirect('/')->with('success', 'Cliente excluído com sucesso!');
});


