@extends('layouts.main')

@section('title', "Cadastro de funcionario")

@section('content')

    <table  class="table" style="width:90%";>
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
                                <ul>
                                    @foreach($setor->funcionarios as $funcionario)
                                        <li> {{ $funcionario->nome }} </li>
                                    @endforeach
                                </ul>
                            </td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>

@endsection