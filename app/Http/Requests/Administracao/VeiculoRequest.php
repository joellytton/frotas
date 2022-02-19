<?php

namespace App\Http\Requests\Administracao;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => 'ativo',
            'user_cadastro_id' => auth()->user()->id,
        ]);
    }

    public function rules()
    {
        return [
            'marca' => ['required', 'string', 'max:150'],
            'modelo' => ['required', 'string', 'max:200'],
            'ano' => ['required', 'numeric', 'min:1900', 'max:2099'],
            'cor' => ['required', 'string', 'max:100'],
            'categoria_id' => ['required', 'exists:categoria_veiculo,id'],
            'km_inicial' => ['required', 'numeric', 'min:0'],
            'placa' => ['required', 'string', 'max:10'],
            'patrimonio' => ['required', 'string', 'max:10'],
            'chassis' => ['required', 'string', 'max:20'],
            'renavam' => ['required', 'string', 'max:12'],
        ];
    }

    public function messages()
    {
        return [
            'marca.required' => 'A marca é obrigatório.',
            'marca.string' => 'A marca é invalida.',
            'marca.max' => 'A marca deve ter no máximo 150 caracteres.',
            'modelo.required' => 'O modelo é obrigatório.',
            'modelo.string' => 'O modelo é invalido.',
            'modelo.max' => 'O modelo deve ter no máximo 200 caracteres.',
            'ano.required' => 'O ano é obrigatório.',
            'ano.numeric' => 'O ano é invalido.',
            'ano.min' => 'O ano deve ser maior que 1900.',
            'ano.max' => 'O ano deve ser menor que 2099.',
            'cor.required' => 'A cor é obrigatório.',
            'cor.string' => 'A cor é invalida.',
            'cor.max' => 'A cor deve ter no máximo 100 caracteres.',
            'categoria_id.required' => 'A categoria é obrigatório.',
            'categoria_id.exists' => 'A categoria é invalida.',
            'km_inicial.required' => 'O km inicial é obrigatório.',
            'km_inicial.numeric' => 'O km inicial é invalido.',
            'km_inicial.min' => 'O km inicial deve ser maior que 0.',
            'placa.required' => 'A placa é obrigatório.',
            'placa.string' => 'A placa é invalida.',
            'placa.max' => 'A placa deve ter no máximo 10 caracteres.',
            'patrimonio.required' => 'O patrimonio é obrigatório.',
            'patrimonio.string' => 'O patrimonio é invalido.',
            'patrimonio.max' => 'O patrimonio deve ter no máximo 10 caracteres.',
            'chassis.required' => 'O chassi é obrigatório.',
            'chassis.string' => 'O chassi é invalido.',
            'chassis.max' => 'O chassi deve ter no máximo 20 caracteres.',
            'renavam.required' => 'O renavam é obrigatório.',
            'renavam.string' => 'O renavam é invalido.',
            'renavam.max' => 'O renavam deve ter no máximo 12 caracteres.',
        ];
    }
}
