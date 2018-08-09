<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Usuario extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nome',
        'data_nascimento',
        'telefone_celular',
        'telefone_fixo',
        'endereco_id',
        'rua',
        'numero',
        'cep',
        'cidade_id'
    ];

    protected $dates = [
        'data_nascimento',
    ];

    public function getDataNascimentoAttribute($date)
    {
       return Carbon::parse($date)->format('d/m/Y');
    }

    public function setDataNascimentoAttribute($date)
    {
        $this->attributes['data_nascimento'] =  Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

    /**
     *
     */
    public function cidade()
    {
        return $this->belongsTo('App\Models\Cidade');
    }

}
