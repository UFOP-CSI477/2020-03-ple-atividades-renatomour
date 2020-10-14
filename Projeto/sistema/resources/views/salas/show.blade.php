@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Salas</title>

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

              <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Sala: {{$sala->nome}}</h1>


    <table class="table table-bordered table-sm">
    <thead class="bg-danger">
    <tr>
          
          
           <th>ID</th>
           <th>Nome</th>
           <th>Tipo</th>
           <th>Criada em </th>
           <th>Atualizado em </th>
 
    </tr>
</thead>

<tbody>

  

    

        <tr>
        <td>{{$sala->id}}</td>
        <td>{{$sala->nome}}</td>
        <td>{{$sala->descricao}}</td>
        <td>{{$sala->created_at}}</td>
        <td>{{$sala->updated_at}}</td>
  
        </tr>    
    
    

</tbody>
</table>

<form name="frmDelete"
action="{{route('salas.destroy', $sala->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão da sala?')">



@csrf
@method('DELETE')
     <a type="button" class="btn btn-sm btn-outline-success mx-sm-1 mb-1" href="{{route('salas.edit', $sala->id)}}">Atualizar</a>
              <input type="submit" class="btn btn-sm btn-outline-danger mx-sm-1 mb-1" value="Excluir">
      <a type="button" class="btn btn-sm btn-outline-info mx-sm-1 mb-1" href="{{route('salas.index')}}">Voltar</a>

</form>


      </div>
      </div>
      </div>

  

    </body>
</html>



@endsection