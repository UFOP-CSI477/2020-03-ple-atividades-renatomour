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
    <title>Reservas Por Sala</title>

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


    <div class="container">
 
            <h2 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Historico De Reservas Por Sala </h2>
            

            @foreach ($listas as $chave => $l)

            <table class="table table-bordered table-hover table-striped table-sm">
              <thead style="background-color:#A52A2A;">
             
              <tr style="color:white;">
              <td colspan="5" style="text-align:center; font-size:20pt; font-color:white;">{{$chave}}</td>
              <tr style="color:white;">
              </thead>
              <thead class="thead-light">
              <tr>
                <th>Data</th>
                <th>ID</th>
                <th>Nome Do Local</th>
                <th>Pessoa</th>
                <th>Tipo</th>
              
              
              </tr>
            </thead>
            
            <tbody>
            
            <!--Tratar quando for exibir por id-->
            
            
              @foreach ($l as $aux)
            
                  <tr>
                  <td>{{$aux->data}}</td>
                  <td>{{$aux->id}}</td>                  
                  <td>{{$aux->sala->nome}}</td>
                  <td>{{$aux->pessoa->nome}}</td>
                  <td>{{$aux->pessoa->tipo}}</td>
                  </tr>    
              
              @endforeach
            
            </tbody>
            <tr class="table-primary">
              <td colspan="2">TOTAL</td>
              <td colspan="3">{{sizeof($l)}}</td>
            </tr>
            
            
            </table>
            
            
            
            @endforeach



          </div>




    </div>


    
            
          </div>
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