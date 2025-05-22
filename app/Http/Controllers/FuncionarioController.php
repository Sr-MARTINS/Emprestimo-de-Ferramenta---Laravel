<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use App\Models\Setor;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all()->load('fsetor');

        return view('painel', ['funcionarios' => $funcionarios]);
    }

    public function register()
    {
        $setores = Setor::all();

        return view('funcionario.register', ['setores' => $setores]);
    }

    public function save(FuncionarioRequest $request)
    {
        Funcionario::create($request->all());
        
        return redirect('/funcionario')->with(['success' => 'Funcionario cadastrado com sucesso!']);
    }

    public function edit($id)
    {
        $setores = Setor::all();

        $EditFuncionario = Funcionario::findOrfail($id);
        // dd($EditFuncionario);
        return view('funcionario.register', ['EditFuncionario' => $EditFuncionario, 'setores' => $setores]);
    }

    public function update(FuncionarioRequest $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect('/funcionario')->with(['success' => 'Cadastrado editado sucesso!']);
    }

    public function delete($id)
    {
        Funcionario::findOrfail($id)->delete();

        return redirect('/funcionario');
    }
}
