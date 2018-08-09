<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroUsuarioRequest;
use App\Models\Estado;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Estado $estado)
    {
        $estados = $estado->all();
        return view('home')->with(compact('estados'));
    }


    /**
     * Todos os Usuários
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all()
    {
        $usuarios = $this->usuario->with(['cidade'])->get();
        return view('usuarios')->with(compact('usuarios'));
    }

    /**
     * @param Request $request
     * @param $passo
     * @param $id_usuario
     * @return bool|void
     */
    public function cadastro(CadastroUsuarioRequest $request, $usuario_id)
    {
        return ($usuario_id) ? $this->atualizar($request, $usuario_id) : $this->adicionar($request);
    }

    /**
     * Cria um novo usuário
     * @param $request
     */
    private function adicionar($request)
    {
        if($usuario = $this->usuario->create($request->all()))
            return response()->json(['success' => true, 'data' => $usuario], 200);

        return response()->json(['success' => false], 422);
    }

    /**
     * Atualiza o cadastro do usuário
     * @param $request
     * @param $id
     */
    private function atualizar($request, $id)
    {
        $usuario = $this->usuario->find($id);
        if($usuario->update($request->all()))
            return response()->json(['success'=> true, 'data' => $usuario, 'msg' => ''], 200);

        return response()->json(['success' => false], 422);
    }

}
