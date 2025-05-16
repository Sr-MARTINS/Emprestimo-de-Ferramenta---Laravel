<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    protected $fillable = ['ferramenta', 'descricao', 'status'];

    public function user()
    {
            //belongsTo - Pertence ao Usuario
        return $this->belongsTo('App\Models\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }
}
