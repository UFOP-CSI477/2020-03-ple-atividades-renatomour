@extends('principal')

@section('conteudo')


<a href="{{ route('produtos.create') }}">Cadastrar</a>

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

            @foreach($produtos as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->sigla}}</td>
                    <td>{{ $e->descricao}}</td>
                    <td><a href="{{route('produtos.show', $e->id)}}">Exibir</a></td>

                  
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
