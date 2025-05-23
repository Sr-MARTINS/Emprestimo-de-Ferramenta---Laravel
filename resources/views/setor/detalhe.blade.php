@extends('layouts.main')

@section('title', ' Informações')

@section('content')

    <div>
        <div>
            <h2> Setor: {{ $setor->nome }} </h2>
            <p>
                Descrição:
                @if($setor->descricao == '')
                    <p>Você nao adcionou uma descricao para esse setor 
                        <a href="/setor/edit/{{$setor->id}} ">Adicionar uma descrição</a>
                    </p>
                @else
                    {{ $setor->descricao }}
                @endif
            </p>
        </div>
        <div>
            <td>
                <ul>
                    @foreach($setor->funcionarios as $funcionario)
                        <li> {{ $funcionario->nome }} </li>
                    @endforeach
                </ul>
            </td>

        </div>
    </div>

@endsection