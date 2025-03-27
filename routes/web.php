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
