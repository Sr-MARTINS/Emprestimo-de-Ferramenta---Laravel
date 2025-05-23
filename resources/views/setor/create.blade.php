@extends('layouts.main')

@section('title', "Cadastro de setor")

@section('content')

    <h2 style="text-align: center; margin:1rem auto 2rem auto">Cadastre um setor</h2>

    <div style=" margin:auto; width:80%">
        <form action="/setor/register/save" method="POST" style=" margin:auto; width:40%">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do setor:</label>
                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
                    value="{{ old('nome') }}">
                @error('nome')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descricao:</label>
                <textarea class="form-control @error('descicao') is-invalid @enderror" name="descricao" placeholder="Digite uma descrição" value="{{ old('descricao') }}"></textarea>
                @error('descricao')
                    <div class="text-dangger"> {{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection