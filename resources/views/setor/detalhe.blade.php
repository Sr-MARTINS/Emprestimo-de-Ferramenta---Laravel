@extends('layouts.main')

@section('title', ' Informações')

@section('content')

    <div style="border: 1px solid black; width:500px; margin:auto; display:flex; align-items:center;flex-direction:column; text-align:center">
        <div>
            <h2> Setor: {{ $setor->nome }} </h2>
            <p>
                @if(!isset($setor->descricao))
                    Descrição: Você nao adcionou uma descricao para esse setor 
                    <a href="/setor/edit/{{$setor->id}} ">
                        Adicionar uma descrição
                    </a>    
                @else
                    Descrição: {{ $setor->descricao }}
                @endif
            </p>
        </div>
        <div>
            <td>
                <ul>
                    @foreach($setor->funcionarios as $funcionario)
                        <li>
                            {{ $funcionario->nome }}
                            <a href="">mudar de setor</a>
                        </li>
                    @endforeach
                </ul>
            </td>

        </div>
    </div>

@endsection