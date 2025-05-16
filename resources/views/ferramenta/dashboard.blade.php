@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="d-flex align-items-center justify-content-center">
        <div>
            <div>
                <div>
                    <h1>Meus eventos</h1>
                    <a href="/user/perfil/">Perfil</a>
                </div>
                @if(count($ferramentas) > 0)
                    <table class="table" style="width:500px">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ferramenta</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Status</th>
                                <th scope="col">Opçes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ferramentas as $item)
                        
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->ferramenta }}</td>
                                    <td>{{ $item->descricao}}</td>
                                    <td>{{ $item->status}}</td>
                                    <td style="display: flex;">
                                        <a href="/ferramenta/edit/{{$item->id}}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        
                                        <form action="/ferramenta/delete/{{ $item->id }}" method="post">
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
                @else
                    <p>Voce nao possui Ferramenta <a href="/ferramenta/create">Cadastrar Ferramenta</a></p>
                @endif
        </div>
        <hr>
        <div>
            <div>
                <h2>Ferramenta Emprestada</h2>
            </div>
            @if(count($EpFerramenta) > 0)
                <table class="table" style="width:500px">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ferramenta</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opçes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($EpFerramenta as $item)
                    
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->ferramenta }}</td>
                                <td>{{ $item->descricao}}</td>
                                <td>{{ $item->status}}</td>
                                <td style="display: flex;">
                                    <form action="/ferramenta/devolver/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background-color: #fff; border:1px solid #E4E4E5;"> 
                                                <i class="bi bi-trash"></i> Devolver
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div>
                    <p>Voce nao possui ferramena Empretada</p>
                    <a href="\">Pegar ferramenta</a>
                </div>
            @endif
        </div>
        </div>
        
    </div>

@endsection
