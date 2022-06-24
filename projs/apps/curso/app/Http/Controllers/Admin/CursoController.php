<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }

    public function index2()
    {
        $registros = Curso::all();
        return view('admin.cursos._table',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
            $dados['publicado'] = 'sim';
        else
            $dados['publicado'] = 'nao';
        
        if($req->hasFile('imagem')){ //hasFile verifica se existe um arquivo
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension(); //guessClientExtension retorna a extensão do arquivo
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem); //move copia o arquivo para um diretório específico
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);

        return response()->json([
            "status" => true,
            "data" => $dados
        ]);

        //return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }
    
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
            $dados['publicado'] = 'sim';
        else
            $dados['publicado'] = 'nao';
        
        if($req->hasFile('imagem')){ //hasFile verifica se existe um arquivo
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension(); //guessClientExtension retorna a extensão do arquivo
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem); //move copia o arquivo para um diretório específico
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function deletar($id)
    {
        Curso::find($id)->delete();
        //return redirect()->route('admin.cursos');
    }
    public function myPost()
    {
        return view('my-post');
    }
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function submitPost(Request $request)
    {
        // We are collecting all data submitting via Ajax
        $input = $request->all();
      
        /*
          $post = new Post;
          $post->name = $input['name'];
          $post->description = $input['description'];
          $post->status = $input['status'];
          $post->save();
        */
     	
        // Sending json response to client
        return response()->json([
            "status" => true,
            "data" => $input
        ]);
    }
    
}
