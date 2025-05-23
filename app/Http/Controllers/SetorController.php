<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetorRequest;
use App\Models\Setor;
use Illuminate\Http\Request;

use function Psy\bin;

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

    public function storeSetor($id)
    {
        $setor = Setor::find($id);

        return view('setor.detalhe', ['setor' => $setor]);
    }
    public function edit($id)
    {
        $setor = Setor::find($id);

        return view();
    }
}
