<?php

namespace App\Http\Controllers;

use App\Models\Ferramenta;
use Illuminate\Http\Request;


class FerramentController extends Controller
{
    public function index() 
    {
        $ferramenta = Ferramenta::all();

        return view('welcome', ['ferramenta' => $ferramenta]);
    }

    public function create()
    {
        return view('ferramenta.create');
    }

    public function show(Request $request)
    {
        $ferramenta = new Ferramenta();
        
        $ferramenta->ferramenta  = $request->inFerramenta;
        $ferramenta->descricao = $request->inDescription;
        $ferramenta->status      = $request->status;

        $ferramenta->save();

        return redirect('/');
    }

    public function showEdit($id)
    {
        // $pegarFerramenta = Ferramenta::all();
        
        $editFerrament = Ferramenta::findOrFail($id);

        // dd($editFerrament->ferramenta);
        return view('ferramenta.edit', ['editFerrament' => $editFerrament]);
    }
    public function update(Request $request, $id)
    {
        $restTodos = $request->all();

        Ferramenta::findOrFail($id)->update($restTodos);
        
        return redirect('/');
    }

    public function delete($id)
    {
        $deleteFerramenta = Ferramenta::findOrFail($id);

        $deleteFerramenta->delete();

        return redirect('/');
    }
}
