@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Área Administrativa</title>

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
  

  </head>
  <body>

    <h1 class="mx-auto" style="text-align:center;">Sessão Administrativa</h1>



       <div class="album py-5 ">
       <div class="container">
       <div class="row justify-content-center">
       <div class="col-md-6">
       <div class="card mb-2 shadow-sm text-center text-white bg-secondary">
       <div class="card-body">
              
                
                  <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Salas</h5>
                  <p class="card-text">Locais de estudos/reuniões/projetos no Campus ICEA
      
        <div class="d-flex justify-content-between align-items-center">
      
        <div class="btn-group">
      
                    <a type="button" class="btn btn-sm btn-info mx-sm-4 mb-1" href="{{route('salas.index')}}">Visulizar</a>
                    <a type="button" class="btn btn-sm btn-success  mx-sm-4 mb-1" href="{{route('salas.create')}}">Adicionar</a>
                    <a type="button" class="btn btn-sm btn-warning mx-sm-4 mb-1" href="{{route('salas.index')}}">Editar </a>
                    <a type="button" class="btn btn-sm btn-danger  mx-sm-4 mb-1" href="{{route('salas.index')}}">Excluir</a>
                   


           
           
            </div>
            </div>
            </div>
            </div>
            </div>   




          <div class="row">
          <div class="col-md-6">
          <div class="card mb-2 shadow-sm text-center text-white bg-secondary">
          <div class="card-body">
              
                
                    <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Reservas</h5>
                    <p class="card-text">Relatorio das Reservas das Salas do icea
          
           <div class="d-flex justify-content-between align-items-center">
          
           <div class="btn-group">
          
                    <a type="button" class="btn btn-sm  btn-info mx-sm-4 mb-1" href="{{route('agendamentos.index')}}">Visulizar</a>
                    <a type="button" class="btn btn-sm btn-success " href="{{route('agendamentos.create')}}">Adicionar</a>
                    <a type="button" class="btn btn-sm btn-warning mx-sm-4 mb-1" href="{{route('agendamentos.index')}}">Editar </a>
                    <a type="button" class="btn btn-sm btn-danger " href="{{route('agendamentos.index')}}">Excluir</a>
                    <a type="button" class="btn btn-sm btn-light mx-sm-4 mb-1" href="{{route('reservas.index')}}">Historico</a>
            
            </div>
            </div>
            </div>
            </div>
            </div>   




          <div class="col-md-6">
          <div class="card mb-2 shadow-sm text-white bg-secondary">
          <div class="card-body">
                  
                       <h5 class="card-title" style="text-align:center; margin-bottom:20pt;">Pessoas</h5>
                        <p class="card-text" style="text-align:center;">Cadastro de Pessoas Interessadas em Reservar Salas
         
          <div class="d-flex justify-content-between align-items-center">
          
          <div class="btn-group">
          
                      <a type="button" class="btn btn-sm  btn-info mx-sm-4 mb-1" href="{{route('pessoas.index')}}">Visulizar</a>
                      <a type="button" class="btn btn-sm  btn-success" href="{{route('pessoas.create')}}">Adicionar</a>
                      <a type="button" class="btn btn-sm  btn-warning mx-sm-4 mb-1" href="{{route('pessoas.index')}}">Atualizar</a>
                      <a type="button" class="btn btn-sm btn-danger " href="{{route('pessoas.index')}}">Excluir</a>
                      <a type="button" class="btn btn-sm btn-light mx-sm-4 mb-1" href="{{route('historicos.index')}}">Historico</a>
            
            
            </div>
            </div>
            </div>
            </div>
            </div>   
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