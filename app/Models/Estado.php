<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['id', 'nome', 'abreviatura'];

    public function cidades()
    {
        return $this->hasMany('App\Models\Cidade');
    }
}
