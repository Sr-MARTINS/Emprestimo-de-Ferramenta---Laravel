@extends('layouts.main')

@section('title', 'Cadastro de Ferramenta')

@section('content')

    <div class="d-flex align-items-center justify-content-center flex-column">
        <div style="margin: 1rem auto 2rem auto; display:flex; flex-direction:column">
           <h1> {{ isset($editFerrament) ? 'Editar ferramenta' : 'Cadastro de ferramenta' }} </h1>
            <div style="margin:.5rem 0 0 -4rem ;">
                <a href="/dashboard">Voltar</a>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center mx-auto mb-4">

            <form style="width: 500px;" action="{{ isset($editFerrament) ? route('ferramenta.update', $editFerrament->id) : route('ferramenta.save') }}" method="POST">
                @csrf
                @if(isset($editFerrament))
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <label for="ferramenta" class="form-label">Ferramenta:</label>
                    <input type="text" class="form-control @error('ferramenta') is-invalid @enderror" name="ferramenta" value="{{ old('ferramenta', $editFerrament->ferramenta ?? '' ) }}">
                    @error('ferramenta')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <input type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao', $editFerrament->descricao ?? '' ) }}">
                    @error('descricao')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label  class="form-label">Status</label>
            
                     <select name="status" class="form-control @error('status') is-invalid @enderror" style="width: 200px;">
                         <option value=""></option>
                         <option value="Disponivel">Disponivel</option>
                        <option value="Emprestada">Emprestada</option>
                     </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection