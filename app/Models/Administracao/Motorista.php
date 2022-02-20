<?php

namespace App\Models\Administracao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Motorista extends Model
{
    protected $table = 'motorista';

    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'numero_registro', 'validade', 'status',
        'user_cadastro_id', 'user_alteracao_id', 'created_at', 'updated_at'];

    public function setDataNascimentoAttribute($value)
    {
        $this->attributes['data_nascimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
    }

    public function getDataNascimentoAttribute($value)
    {
        return date('d/m/Y', strtotime(str_replace('-', '/', $value)));
    }

    public function setValidadeAttribute($value)
    {
        $this->attributes['validade'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
    }

    public function getValidadeAttribute($value)
    {
        return date('d/m/Y', strtotime(str_replace('-', '/', $value)));
    }

    public static function buscar(int $perPage, string $keyword): AbstractPaginator
    {
        return self::where('status', 'ativo')
            ->where(function ($q) use ($keyword) {
                $q->orWhere('nome', 'LIKE', "%$keyword%")
                    ->orWhere('cpf', 'LIKE', "%$keyword%")
                    ->orWhere('data_nascimento', 'LIKE', "%$keyword%")
                    ->orWhere('numero_registro', 'LIKE', "%$keyword%")
                    ->orWhere('validade', 'LIKE', "%$keyword%");
            })->orderBy('created_at', 'asc')->paginate($perPage);
    }

}
