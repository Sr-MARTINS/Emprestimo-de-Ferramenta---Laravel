@extends('layouts.main')

@section('title', 'Cadastro de Ferramenta')

@section('content')

    <div class="d-flex align-items-center justify-content-center flex-column">
        <div style="margin: 1rem auto 2rem auto;">
            <a href="/">Voltar</a>
            <h1>Cadastro de ferramenta</h1>
        </div>

        <div class="d-flex align-items-center justify-content-center mx-auto mb-4">
            <form style="width: 500px;" action="/ferramenta" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="ferramenta" class="form-label">Ferramenta:</label>
                    <input type="text" class="form-control" name="inFerramenta">
                </div>
                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="inDescription">
                </div>
                <div class="mb-3 ">
                    <label  class="form-label">Status</label>
            
                     <select name="status" class="form-control" style="width: 200px;">
                         <option value=""></option>
                         <option value="Disponivel">Disponivel</option>
                        <option value="Emprestada">Emprestada</option>
                     </select>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection