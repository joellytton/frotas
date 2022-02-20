<?php

namespace App\Http\Requests\Administracao;

use Illuminate\Foundation\Http\FormRequest;

class MotoristaRequest extends FormRequest
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
            'cpf' => preg_replace('/[^0-9]/', '', $this->cpf),
        ]);

        if ($this->method() == 'PUT') {
            $this->merge([
                'user_alteracao_id' => auth()->user()->id,
            ]);
        }
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:250'],
            'cpf' => ['required', 'max:13', 'unique:motorista,cpf,'. $this->route('motorista')->id],
            'data_nascimento' => ['required', 'date_format:d/m/Y'],
            'numero_registro' => ['required', 'max:11', 'unique:motorista,numero_registro,'.$this->route
            ('motorista')->id],
            'validade' => ['required', 'date_format:d/m/Y'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório',
            'nome.max' => 'O nome não pode ter mais de 250 caracteres',
            'cpf.required' => 'O CPF é obrigatório',
            'cpf.max' => 'O CPF não pode ter mais de 13 caracteres',
            'cpf.unique' => 'O CPF já está cadastrado',
            'data_nascimento.required' => 'A data de nascimento é obrigatória',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida',
            'numero_registro.required' => 'O número de registro é obrigatório',
            'numero_registro.max' => 'O número de registro não pode ter mais de 11 caracteres',
            'numero_registro.unique' => 'O número de registro já está cadastrado',
            'validade.required' => 'A data de validade é obrigatória',
            'validade.date' => 'A data de validade deve ser uma data válida',
            'status.required' => 'O status é obrigatório',
            'status.in' => 'O status é inválido',
            'user_cadastro_id.required' => 'Você não tem permissão para cadastrar uma categoria de veículo',
            'user_cadastro_id.exists' => 'Você não tem permissão para cadastrar uma categoria de veículo',
        ];
    }
}
