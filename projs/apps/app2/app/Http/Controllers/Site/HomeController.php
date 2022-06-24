<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate(3); //Define um limite de registros a ser exibidos por página
        return view ('home',compact('cursos'));
    }
}
