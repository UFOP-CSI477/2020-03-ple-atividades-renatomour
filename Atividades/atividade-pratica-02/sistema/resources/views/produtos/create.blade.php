@extends('principal')

@section('conteudo')

<form action="{{ route('produtos.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="sigla">Sigla</label>
        <input type="text" class="form-control" name="sigla" id="sigla">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection
