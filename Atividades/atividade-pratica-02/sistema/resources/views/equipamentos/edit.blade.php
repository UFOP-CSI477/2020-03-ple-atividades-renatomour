@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Cadastro de usuários</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->


    <style>
     body{
        background-color:white;
        
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body >
    <form  action="{{route('equipamentos.update', $equipamento->id)}}" method="post" style="border-style:solid; margin:20px;">
    
    @csrf
    @method('PUT')
    
       <div class="container" style="place-items:center; margin-top:34pt; margin-bottom:34pt">
      < h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastar Equipamento</>
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <label for="nome">Nome: </label>
        <input value="{{$equipamento->nome}}"type="text" class="form-control" id="nome" placeholder="nome do equipamento" name="nome">
                
  
          </div>
          </div>
          </div>
        
        
        <button type="submit" class="btn btn-success  mx-sm-3 ">Atualizar</button>
        <button type="reset" class="btn btn-warning   mx-sm-3 ">Limpar</button>
    </div>

    </form>
  </body>

</html>

@endsection