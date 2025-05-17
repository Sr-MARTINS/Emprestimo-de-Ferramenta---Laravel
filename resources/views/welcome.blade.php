@extends('layouts.main')

@section('title', 'Ferramenta')

@section('content')

    <div>
        <div style="margin:2rem auto">            
            <h2 style="text-align: center;">Lista de Ferramenta</h2>
        </div>
        <div style="width:80%; margin:auto; ">
          <div style="width:100%">
                  <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ferramenta</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Status</th>
                            <th scope="col" style="margin:auto; ">Opçes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ferramenta as $item)
                        
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ferramenta }}</td>
                                <td>{{ $item->descricao}}</td>
                                <td>{{ $item->status}}</td>
                                <td>
                                    <form action="/ferramenta/join/{{ $item->id }}" method="post">
                                        @csrf
                                        <a href="/ferramenta/join/{{ $item->id }}" class="btn btn-primary" onclick="event.preventDefault(); this.closest('form').submit()">
                                            Pegar Emprestada
                                        </a>
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