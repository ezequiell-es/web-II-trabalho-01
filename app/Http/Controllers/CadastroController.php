<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index() {
        $cadastros = Cadastro::All();
        return view ("cadastro.index", [
            "cadastros" => $cadastros
        ]);
    }

    public function salvar (request $request){
        $cadastro = new Cadastro ();
        $cadastro->marca = $request->get("marca");
        $cadastro->placa = $request->get("placa");
        $cadastro->cor = $request->get("cor");
        $cadastro->ano = $request->get("ano");
        $cadastro->save();
        return redirect("/cadastro");
    }
    public function excluir ($sid){
        Cadastro::Destroy($sid);
        return redirect("/cadastro");   
    
    }
 
}
