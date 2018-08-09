<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['id', 'estado_id', 'nome'];

    protected function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario');
    }
}
