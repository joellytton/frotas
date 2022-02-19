<?php

namespace App\Models\Administracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculo';

    protected $fillable = ['marca', 'modelo', 'ano', 'cor', 'categoria_id', 'km_inicial', 'placa', 'patrimonio',
        'chassis', 'renavam', 'status', 'user_cadastro_id', 'user_alteracao_id', 'created_at', 'updated_at'];

    public static function buscar(int $perPage, string $keyword): AbstractPaginator
    {
        return self::where('status', 'ativo')
            ->where(function ($q) use ($keyword) {
                $q->orWhere('marca', 'LIKE', "%$keyword%")
                    ->orWhere('modelo', 'LIKE', "%$keyword%")
                    ->orWhere('ano', 'LIKE', "%$keyword%")
                    ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                    ->orWhere('km_inicial', 'LIKE', "%$keyword%")
                    ->orWhere('placa', 'LIKE', "%$keyword%")
                    ->orWhere('patrimonio', 'LIKE', "%$keyword%")
                    ->orWhere('chassis', 'LIKE', "%$keyword%")
                    ->orWhere('renavam', 'LIKE', "%$keyword%");
            })->orderBy('created_at', 'asc')->paginate($perPage);
    }
}
