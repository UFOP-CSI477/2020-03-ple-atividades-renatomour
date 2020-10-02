@extends('principal')

@section('conteudo')


<a href="{{ route('equipamentos.create') }}">Cadastrar</a>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>descricao</th>
                <th>Exibir</th>
                
            </tr>
        </thead>
        <tbody>

            @foreach($equipamentos as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->produto->nome}}-{{ $e->produto->sigla}}</td>
                 
                    <td><a href="{{route('equipamentos.show', $e->id)}}">Exibir</a></td>

                  
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
