<?php

namespace App\Http\Controllers;

use App\Http\Requests\FerramentaCreateRequest;
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

    public function store(FerramentaCreateRequest $request)
    {

        $ferramenta = new Ferramenta();
        
        $ferramenta->ferramenta  = $request->ferramenta;
        $ferramenta->descricao   = $request->descricao;
        $ferramenta->status      = $request->status;

        $user = auth()->user();
        $ferramenta->user_id = $user->id;

        $ferramenta->save();

        return redirect('/')->with(['success' => "Ferramenta cadastrada com sucesso!"]);
    }

    public function edit($id)
    {
        $user = auth()->user();

        $editFerrament = Ferramenta::findOrFail($id);

        if($user->id != $editFerrament->user_id) {
            return redirect('/dashboard');
        }

        return view('ferramenta.create', ['editFerrament' => $editFerrament]);
    }
    public function update(FerramentaCreateRequest $request, $id)
    {
        $restTodos = $request->all();
        
        Ferramenta::findOrFail($id)->update($restTodos);
        
        return redirect('/dashboard');
    }

    public function dashboard()
    {
        $user = auth()->user();

        $ferramentas = $user->ferramentas;
        
        $EpFerramenta = $user->ferramentaMult;

        return view('ferramenta.dashboard',
         ['ferramentas' => $ferramentas, 'EpFerramenta' => $EpFerramenta]
        );
    }


    public function delete($id)
    {
        $deleteFerramenta = Ferramenta::findOrFail($id);

        $deleteFerramenta->delete();

        return redirect('/dashboard');
    }


    public function join($id) 
    {
        $user = auth()->user();

        $user->ferramentaMult()->attach($id);

        return redirect('/dashboard');
    }

    public function devolver($id)
    {
        $user = auth()->user();

        $user->ferramentaMult()->detach($id);
        
        return redirect('/dashboard');
    }
}
