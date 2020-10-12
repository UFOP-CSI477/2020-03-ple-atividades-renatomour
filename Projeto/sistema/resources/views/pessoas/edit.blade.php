@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Cadastro de pessoas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->


    <style>
     body{
        background-color:white;
        font-family: "Times New Roman", Times, serif;
        
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body >
    <form  action="{{route('pessoas.update', $pessoa->id)}}" method="post" style="border-style:solid; margin:20px; border-radius: 10px;">
    
    @csrf
    @method('PUT')
    
    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
     
                     <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de Pessoas</h1>
        
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    
                <label for="nome">Nome: </label>
                <input value="{{$pessoa->nome}}"type="text" class="form-control" id="nome" placeholder="nome da pessoa" name="nome">
    
                 <label for="nome">Tipo: </label>
                 <input value="{{$pessoa->tipo}}"type="text" class="form-control" id="tipo" placeholder="tipo sanguineo" name="tipo">
         
         
         </div>
         </div>


         </div>
                               <button type="submit" class="btn btn-success  mx-sm-3 mb-2">Atualizar</button>
                               <button type="reset" class="btn btn-warning   mx-sm-3 mb-2">Limpar</button>
         </div>

    </form>
  </body>

</html>

@endsection