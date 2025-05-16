@extends('layouts.main')

@section('title', "Cadastro de funcionario")

@section('content')

    <div style="display: flex; align-items:center;justify-content:center; flex-direction:column">
        <div  style="margin: 2rem auto; text-align:center;">
            <h2>Cadastro de funcionario</h2>
        </div>

        <div style="width:710px;margin:0 auto 2rem auto;">
            <form action="/funcionario/register/save" method="POST"  style="width:65%; margin:auto">
                @csrf
                <div class="mb-3" style="display: flex; align-items:center;justify-content: space-between;">
                    <div >
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" 
                            class="form-control @error('nome') is-invalid @enderror"
                            value="{{ old('nome') }}">
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apelido" class="form-label">Apelido:</label>
                        <input type="text" name="apelido" 
                            class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">Cpf:</label>
                    <input type="number" name="cpf"
                        class="form-control @error('cpf') is-invalid @enderror"
                        value="{{ old('cpf') }}">
                    @error('cpf')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="setor" class="form-label">Setor:</label>
                    <input type="text" name="setor"
                        class="form-control @error('setor') is-invalid @enderror"
                        value="{{ old('setor') }}">
                    @error('setor')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="setor" class="form-label">Status:</label>
                    <select name="status" 
                        class="form-control @error('status') is-invalid @enderror" style="width:39%;"
                        value="{{ old('status') }}">
                        <option value=""></option>
                        <option value="ativo">Ativo</option>
                        <option value="intervalo">Intervalo</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection