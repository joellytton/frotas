<?php

namespace App\Models\Administracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class CategoriaVeiculo extends Model
{
    protected $table = 'categoria_veiculo';


    protected $fillable = ['nome', 'status', 'user_cadastro_id', 'created_at', 'updated_at'];

    public static function buscar(int $perPage, string $keyword): AbstractPaginator {
        return self::where('nome', 'like', "%{$keyword}%")->paginate($perPage);
    }
}
