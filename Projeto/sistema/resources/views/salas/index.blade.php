@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
  
    <title>Página Principal</title>

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
   

    <div class="album py-1 bg-light">   <!-- fundo -->
    <div class="container">

                  <h1 class="mx-auto" style="width: 200px; margin-bottom:20pt;">Salas</h1>


    <table class="table table-bordered table-sm">
    <thead style="background-color:#A52A2A;">   <!-- tabela  -->
    <tr style="color:white;">
              <th>ID</th>
              <th>Nome</th>
              <th>Tipo</th>
              <th>Criado em </th> 
    </tr>
</thead>

<tbody>


    @foreach ($salas as $aux)

        <tr>
        <td>{{$aux->id}}</td>
        <td>

          <a href="{{route('salas.show', $aux->id)}}">{{$aux->nome}}</a>
          
         

        </td>

        <td>

          <a href="{{route('salas.show', $aux->id)}}">{{$aux->descricao}}</a>
          
         

        </td>
        <td>{{$aux->created_at}}</td>
  
        </tr>    
    
    @endforeach

</tbody>
</table>

    </div>
  </div>


  <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Voltar Ao Inicio</a>
    </p>
    </div>
</footer>
    </body>
    
</html>



@endsection