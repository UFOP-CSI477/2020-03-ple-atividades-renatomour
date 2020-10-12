@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Sessão  Geral</title>

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
        <h1 class="mx-auto" style="width: 200px; margin-bottom:40pt">Aréa Geral</h1>
        <div class="row">



        <div class="col-12" >
            <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Reservas</h2>
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead style="background-color:#A52A2A;">
                <tr style="color:white;">
                <th>Data</th>
                <th>Nome Do Local</th>
                <th>Tipo Do Local</th>
                <th>ID Pessoa</th>
                <th>Nome</th> 
                <th>Tipo</th>
                </tr>
            </thead>
            
            <tbody>
            
              <!--Tratar quando for exibir por id-->
            
                @foreach ($agendamentos as $agendamento)
            
                    <tr>
                    <td>{{$agendamento->data}}</td>                    
                    <td>{{$agendamento->sala->nome}}</td>
                    <td>{{$agendamento->sala->descricao}}</td>
                    <td>{{$agendamento->pessoa->id}}</td>
                    <td>{{$agendamento->pessoa->nome}}</td>
                    <td>{{$agendamento->pessoa->tipo}}</td>
                         
                   
                    
                    </tr>    
                
                @endforeach
            
            </tbody>
            </table>
            
          </div>







          <div class="col">
              <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Pessoas</h2>
            <table class="table table-bordered table-hover table-striped able-sm">
                <thead style="background-color:#A52A2A;">
                <tr style="color:white;">
                <th>Nome</th>
                <th>Tipo</th>
                </tr>
            </thead>
            
            <tbody>
            

            
                @foreach ($pessoas as $pessoa)
            
                    <tr>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->tipo}}</td>
                    </tr>    
                
                @endforeach
            
            </tbody>
            </table>
          </div>





          <div class="col-12">
                <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Salas</h2>
            
            
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead style="background-color:#A52A2A;">
              <tr style="color:white;">
                          <th>ID</th>
                          <th>Nome Do Local</th>
                          <th>Tipo</th>
                          <th>Adicionado Em</th>
                </tr>
            </thead>
            
            <tbody>
            
             
            
   @foreach ($salas as $sala)
            
              
                <tr>
                            <td>{{$sala->id}}</td>
                            <td>{{$sala->nome}}</td>
                            <td>{{$sala->descricao}}</td>
                            <td>{{$sala->created_at}}</td>
               </tr>   
                
   @endforeach
            
            </tbody>
            </table>
            
            
            
            
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