<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->get('passo') == 1) {
            return [
                'nome' => 'required',
                'data_nascimento' => 'required|date_format:d/m/Y|before:today'
            ];
        }

        if ($this->get('passo') == 2) {
            return [
                'rua' => 'required',
                'numero' => 'required|integer',
                'estado_id' => 'required|integer',
                'cidade_id' => 'required|integer',
                'cep' => 'required|max:9',
            ];
        }

        if ($this->get('passo') == 3){
            return [
                'telefone_fixo' => 'required',
                'telefone_celular' => 'required'
            ];
        }
    }

    public function attributes()
    {
       return [
           'nome' => 'Nome',
           'data_nascimento' => 'Data de Nascimento',
           'rua' => 'Rua',
           'numero' => 'Número',
           'cidade' => 'Cidade',
           'cep'    => 'CEP',
           'estado_id' => 'Estado',
           'cidade_id'  => 'Cidade',
           'telefone_fixo' => 'Telefone Fixo',
           'telefone_celular' => 'Telefone Celular'
       ];
    }

}
