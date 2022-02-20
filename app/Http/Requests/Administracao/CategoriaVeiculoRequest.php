<?php

namespace App\Http\Requests\Administracao;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CategoriaVeiculoRequest extends FormRequest
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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'status' => 'ativo',
            'user_cadastro_id' => auth()->user()->id,
        ]);

        if ($this->method() == 'PUT') {
            $this->merge([
                'user_alteracao_id' => auth()->user()->id,
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'max:200'],
            'status' => ['required', Rule::in(['ativo', 'inativo'])],
            'user_cadastro_id' => ['required', 'exists:users,id'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório',
            'nome.max' => 'O nome não pode ter mais de 200 caracteres',
            'status.required' => 'O status é obrigatório',
            'status.in' => 'O status é inválido',
            'user_cadastro_id.required' => 'Você não tem permissão para cadastrar uma categoria de veículo',
            'user_cadastro_id.exists' => 'Você não tem permissão para cadastrar uma categoria de veículo',
        ];
    }
}
