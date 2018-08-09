<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    private $cidade;

    /**
     * CidadeController constructor.
     * @param Cidade $cidade
     */
    public function __construct(Cidade $cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @param $estado_id
     * @return mixed
     */
    public function getCidadesPorEstado($estado_id)
    {
        return $this->cidade->where('estado_id', $estado_id)->get();
    }
}
