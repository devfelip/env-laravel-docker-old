<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"5456455"],
            (object)["nome"=>"Pedro","tel"=>"1212311"]
        ];

        //$contato = new \App\Contato(); //Passando para uma variável tudo da model Contato em um momento específico no código
        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos')); //Compact pega dados em forma de array e da acesso a manipulação dos mesmos pela view
    }
    public function criar(Request $req)
    {
        dd($req->all()); //Retorna todos os dados do método POST
        //dd($req['nome']); //Retorna um dado especifico do método POST
        return "Esse é o criar do ContatoController";
    }
    public function editar()
    {
        return "Esse é o editar do ContatoController";
    }
}
