@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Pessoas</title>

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
  <body>


    <div class="album py-1 bg-light">
      <div class="container">

      <h1 class="mx-auto" style="text-align:center; margin-bottom:30pt;">Pessoa: {{$pessoa->nome}}</h1>


    <table class="table table-bordered table-hover table-striped table-sm">
    <thead class="bg-danger">
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Tipo</th>
    <th>Created_at</th>
    <th>Updated_at</th>
 
    </tr>
</thead>

<tbody>



    

        <tr>
        <td>{{$pessoa->id}}</td>
        <td>{{$pessoa->nome}}</td>
        <td>{{$pessoa->tipo}}</td>
        <td>{{$pessoa->created_at}}</td>
        <td>{{$pessoa->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>

<form name="frmDelete"
action="{{route('pessoas.destroy', $pessoa->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão da Pessoa?')">



@csrf
@method('DELETE')
<a type="button" class="btn btn-sm btn-success " href="{{route('pessoas.edit', $pessoa->id)}}">Atualizar</a>
<input type="submit" class="btn btn-sm btn-danger " value="Excluir">
<a type="button" class="btn btn-sm btn-info " href="{{route('pessoas.index')}}">Voltar</a>

</form>
</div>

    </div>
  </div>

  

    </body>
</html>



@endsection