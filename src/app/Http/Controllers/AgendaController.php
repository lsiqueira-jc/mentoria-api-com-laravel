<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\ExemploRequest;

use App\Models\Agenda;

class AgendaController extends Controller
{
   
public function cadastrar(Request $request){

    $nome = $request->input('nome');
    $telefone = $request->input('telefone');
    $email = $request->input('email');


    $agenda = new Agenda();
    $agenda->nome = $nome;
    $agenda->telefone = $telefone;
    $agenda->email = $email;
    
    $agenda->save();

    return response()->json([
                 "data"    => $agenda
            ],201);
}

public function listar(){
    $listar = Agenda::all();

    return response()->json([
        "data"    => $listar
   ],200);
    
}

public function show($id){
    $listar = Agenda::find($id);

    return response()->json([
        "data"    => $agenda
   ],200);
    
}

public function delete($id){
    $agenda = Agenda::find($id);
    $agenda->delete();
    
    return response()->json([
        "agenda deletada com sucesso"
   ],200);
    
    
}

    // public function exemplo(Request $request)
    // {

    //     $nome = $request->input('nome');
    //     $telefone = $request->input('telefone');

    //     $contato = new Agenda();
    //     $contato->nome = $nome;
    //     $contato->telefone = $telefone;
    //     $contato->save();

    //     return response()->json([
    //         "data"    => $contato
    //     ],201);

    // }


}
