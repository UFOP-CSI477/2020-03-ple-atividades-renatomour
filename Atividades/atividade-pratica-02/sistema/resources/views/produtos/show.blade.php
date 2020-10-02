@extends('principal')

@section('conteudo')

<h1>Dados do Estado</h1>

<p>Id: {{ $produto->id }}</p>
<p>Nome: {{ $produto->nome }}</p>
<p>Sigla: {{ $produto->sigla}}</p>
<p>Sigla: {{ $produto->descricao}}</p>


<a href="{{route('produtos.edit', $produto->id)}}">Editar</a>

<a href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('produtos.destroy', $produto->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do estado?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>


@endsection
