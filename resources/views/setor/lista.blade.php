@extends('layouts.main')

@section('title', "Cadastro de funcionario")

@section('content')
    <div>
        <h2 style="margin: 2rem auto; text-align:center;">Painel de Setor</h2>

        <div style=" margin:0 0 0 15rem">
            <table  class="table" style="width:90%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Funcionarios</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($setores as $setor)
                        <tr>
                            <th scope="row">{{ $setor->id }}</th>
                            <td>{{ $setor->nome    }}</td>
                            
                            <td>
                                <div style=" display:flex">
                                    <button >
                                        <a href="/setor/detalhes/{{$setor->id}}">Detalhes</a>
                                    </button>

                                    <form action="/setor/delete/{{ $setor->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" >
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection