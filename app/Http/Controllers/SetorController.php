<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetorRequest;
use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function detalhes()
    {
        $setores = Setor::all();

        return view('setor.lista', ['setores' => $setores]);
    }

    public function create()
    {
        return view('setor.create');
    }

    public function save(SetorRequest $request)
    {
        Setor::create($request->all());

        return redirect('/setores');
    }

    public function destroy($id)
    {
        $delete = Setor::find($id);
        $delete->delete();

        return redirect('/setores');
    }
}
