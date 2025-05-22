<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $fillable = [
        'nome',
        'apelido',
        'cpf',
        'setor_id',
        'status'
    ];

    public function fsetor()
    {
        return $this->belongsTo(Setor::class, 'setor_id');
    }
}
