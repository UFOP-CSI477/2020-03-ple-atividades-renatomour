@extends('principal')

@section('conteudo')

<h1>Dados do Estado</h1>

<p>Id: {{ $equipamento->id }}</p>
<p>Nome: {{ $equipamento->nome }}</p>



<a href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>

<a href="{{route('equipamentos.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('equipamentos.destroy', $equipamento->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do estado?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>


@endsection
