<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object) [
            'nome'=>'Felipe',
            'tel'=>'1548155151'
        ];
    }
}
