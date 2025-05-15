@extends('layouts.main')

@section('title', 'Ferramenta')

@section('content')

    <div>

        <h2 style="text-align: center;">Lista de Ferramenta</h2>
        <div style="display:flex; align-items:center; justify-content:center; flex-direction:column; margin:3rem auto">
            <div>
                <button>
                    <a href="/ferramenta/create">Cadastrar Ferramenta</a>
                </button>
            </div>
           <div>
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
                        @foreach($ferramenta as $item)
                       
                            <tr>
                                <td>{{ $item->id }}</td>
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
           </div>
        </div>
    </div>

@endsection