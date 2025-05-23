@extends('layouts.main')

@section('title', "Cadastro de funcionario")

@section('content')

    <div class="d-flex align-items-center justify-content-center flex-column">
        <div  style="margin: 2rem auto; text-align:center;">
            @if(isset($EditFuncionario))
                <h2>Edição do funcionario: {{ $EditFuncionario->nome }}</h2>
            @else
                <h2>Cadastro de funcionario</h2>
            @endif
        </div>

        <div class="mx-auto mb-4" style="width: 710px;">
        
            <form action="{{ isset($EditFuncionario) ? route('funcionario.update', $EditFuncionario->id) : route('funcionario.save') }}" method="POST" style="width:65%; margin:auto">

                @csrf
                @if(isset($EditFuncionario))
                    @method('PUT')
                @endif

                <div class="mb-3 d-flex align-items-center justify-content-between" >
                    <div >
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" 
                            class="form-control @error('nome') is-invalid @enderror"
                            value="{{ old('nome', $EditFuncionario->nome ?? '' ) }}" >
                        @error('nome')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="apelido" class="form-label">Apelido:</label>
                        <input type="text" name="apelido" class="form-control" 
                            value="{{ old('apelido', $EditFuncionario->apelido ?? '') }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">Cpf:</label>
                    <input type="number" name="cpf"class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf', $EditFuncionario->cpf ?? '' ) }}">

                    @error('cpf')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <!-- {{ $setores }} -->
                    <label for="setor" class="form-label">Setor:</label>
                    <!-- <input type="text" name="setor"class="form-control @error('setor') is-invalid @enderror" value="{{ old('setor', $EditFuncionario->setor ?? '' ) }}"> -->
                     <select class="form-control" name="setor_id">
                        <option value=""> -- Selecione --</option>
                        @foreach($setores as $setor)
                            <option value="{{ $setor->id }}" {{ isset($EditFuncionario) && $setor->id == $EditFuncionario->setor_id ? 'selected' : ''}}> {{ $setor->nome }}</option>
                        @endforeach
                     </select>

                    @error('setor')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="setor" class="form-label">Status:</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" style="width:39%;"
                        value="{{ old('status', $EditFuncionario->status ?? '' ) }}">
                        @if(isset($EditFuncionario))
                            <option value="ativo" {{ $EditFuncionario->status == 'ativo' ? 'selected' : ''}} > Ativo</option>
                            <option value="inativo" {{!empty($EditFuncionario->status) == 'inativo' ? 'selected' : '' }} > Inativo</option>
                        @else
                            <option value="">-- Selecione --</option>
                            <option value="ativo">Ativo</option>
                            
                            <option value="inativo"> Inativo </option>
                        @endif    
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