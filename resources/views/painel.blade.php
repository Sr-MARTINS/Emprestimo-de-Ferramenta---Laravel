@extends('layouts.main')

@section('title', "Painel de funcionarios")

@section('content')

    <div>
        <h2 style="margin: 2rem auto; text-align:center;">Painel de Funcionarios</h2>

        <div style=" margin:0 0 0 7rem">
            <table  class="table" style="width:90%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Apelido</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr>
                            <th scope="row">{{ $funcionario->id }}</th>
                            <td>{{ $funcionario->nome    }}</td>
                            <td>{{ $funcionario->apelido == '' ? 'null' : $funcionario->apelido }}</td>
                            <td>{{ $funcionario->cpf     }}</td>
                            <td>{{ $funcionario->fsetor->nome }}</td>
                            <td>{{ $funcionario->status  }}</td>
                            <td style="display: flex;">
                                <a href="/funcionario/edit/{{ $funcionario->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                
                                <form action="/funcionario/delete/{{ $funcionario->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background-color: #fff; border:none;"> 
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection