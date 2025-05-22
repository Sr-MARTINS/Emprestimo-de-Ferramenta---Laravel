<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function detalhes()
    {
        $setores = Setor::all();

        return view('setor.lista', ['setores' => $setores]);
    }
}
