<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setores'; 

    public $fillable = [
        'nome',
        'descricao'
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }
}
