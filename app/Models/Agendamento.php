<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamento';
    protected $fillable = ['user_id', 'departamento_id', 'data_saida', 'data_retorno', 'origem', 'destino',
        'veiculo_id', 'justificativa', 'observacao', 'status', 'user_alteracao_id', 'created_at', 'updated_at'];
}
