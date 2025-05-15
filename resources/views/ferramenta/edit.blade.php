@extends('layouts.main')

@section('title', 'Cadastro de Ferramenta')

@section('content')

    <div style="display:flex;align-items:center;justify-content:center; flex-direction:column">
        <div style="margin: 1rem auto 2rem auto; display:flex;align-items:center;flex-direction: column-reverse">
            <a href="/">Voltar</a>
            <h2>Editar ferramenta:</h2>
        </div>

        <div style=" display:flex;align-items:center;justify-content:center; margin: 0 auto 2rem auto;">
            <form style="width: 500px;" action="/ferramenta/update/{{ $editFerrament->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="ferramenta" class="form-label">Ferramenta:</label>
                    <input type="text" class="form-control" name="ferramenta" 
                    value="{{ $editFerrament->ferramenta }}">
                </div>
                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="descricao"
                    value="{{ $editFerrament->descricao }}">
                </div>
                <div class="mb-3 ">
                    <label  class="form-label">Status</label>
            
                     <select name="status" class="form-control" style="width: 200px;" >
                         <option ></option>
                         <option value="Disponivel">Disponivel</option>
                        <option value="Emprestada">Emprestada</option>
                     </select>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection