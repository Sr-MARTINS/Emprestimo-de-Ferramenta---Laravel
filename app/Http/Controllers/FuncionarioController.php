<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('painel', ['funcionarios' => $funcionarios]);
    }

    public function register()
    {
        return view('funcionario.register');
    }

    public function save(FuncionarioRequest $request)
    {
        // $funcionario = new Funcionario();

        // $funcionario->nome      = $request->nome;
        // $funcionario->apelido   = $request->apelido;
        // $funcionario->cpf       = $request->cpf;
        // $funcionario->setor     = $request->setor;
        // $funcionario->status    = $request->status;

        // $funcionario->save();
        Funcionario::create($request->all());
        
        return redirect('/funcionario')->with(['success' => 'Funcionario cadastrado com sucesso!']);
    }

    public function edit($id)
    {
        $EditFuncionario = Funcionario::findOrfail($id);
        // dd($EditFuncionario);
        return view('funcionario.register', ['EditFuncionario' => $EditFuncionario]);
    }

    public function update(Request $request, $id)
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
