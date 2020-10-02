@extends('principal')

@section('conteudo')


    <form action="{{ route('equipamentos.store') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>


        <div class="form-group">
            <label for="produto_id">Produto</label>
            <input type="text" class="form-control" name="produto_id" id="produto_id">
        </div>

        

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>

    <a href="{{ route('equipamentos.index') }}">Voltar</a>

@endsection('conteudo')
