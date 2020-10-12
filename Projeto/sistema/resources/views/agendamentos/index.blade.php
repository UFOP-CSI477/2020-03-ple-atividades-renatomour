@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
  
    <title>Reservas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


    <style>
     body{
      background-color:white;
      font-family: "Times New Roman", Times, serif;
     color=white; 
      }
    </style>
   

  </head>
  <body>


    <div class="album py-5 ">
      <div class="container">
    <h2 class="mx-auto" style="width: 200px; margin-bottom:20pt">Reservas</h2>
    
    
    <table class="table table-bordered table-hover table-striped table-sm3">
        <thead style="background-color:#A52A2A;">
               <tr style="color:white;"> 
                       <th>ID</th>
                       <th>Data</th>
                       <th>Nome da Sala</th>
                       <th>Tipo Da Sala</th>
                       <th>ID</th>
                       <th>Nome</th>
                       <th>Tipo</th>
                              
    
                    </tr>
</thead>

<tbody >


  <tr >
    @foreach ($agendamento as $aux)

      
        <td >
          <a href="{{route('agendamentos.show', $aux->id)}}">{{$aux->id}}</a>
              </td> 
            <td>{{$aux->data}}</td>
        

    

        
           
             <td>{{$aux->sala->nome}}</td>
             <td>{{$aux->sala->descricao}}</td>
             <td>{{$aux->pessoa->id}}</td>
             <td>{{$aux->pessoa->nome}}</td>
             <td>{{$aux->pessoa->tipo}}</td>
             
                
       
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
</html>



@endsection