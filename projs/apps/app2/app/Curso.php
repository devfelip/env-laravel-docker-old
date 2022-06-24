<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [ //Fillable são os campos que poderão ser atribuidos pelo laravel em massa por ::create
        'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];
}
