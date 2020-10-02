@extends('principal')

@section('conteudo')

<form action="{{ route('produtos.update',$produto->id)}}" method="post">

    @csrf
    
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{$produto->nome}}">
    </div>

    <div class="form-group">
        <label for="sigla">Sigla</label>
        <input type="text" class="form-control" name="sigla" id="sigla" value="{{$produto->sigla}}">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{$produto->descricao}}">
    </div>

    <div class ="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection
