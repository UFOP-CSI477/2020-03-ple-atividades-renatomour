@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
 
    <title>agendamentos</title>

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


    <div class="album py-1 ">
      <div class="container">

      <h1 class="mx-auto" style="text-align:center; margin-bottom:20pt;">Reserva: {{$agendamento->id}}</h1>


    <table class="table table-bordered table-sm">
          
        <thead class="bg-danger">
    <tr style="color=white;">
    <th>ID</th>
              <th>Data</th>
                  <th>Nome do Local </th>
                      <th>Tipo</th>
                      <th>ID Pessoa</th>
                        <th>Nome</th>
                        <th>Tipo</th>
 
    </tr>
</thead>

<tbody>

  
    

        <tr>
               <td>{{$agendamento->id}}</td>
               <td>{{$agendamento->data}}</td>
               <td>{{$agendamento->sala->nome}}</td>
               <td>{{$agendamento->sala->descricao}}</td>
               <td>{{$agendamento->pessoa->id}}</td>
               <td>{{$agendamento->pessoa->nome}}</td>
               <td>{{$agendamento->pessoa->tipo}}</td>
                       
        
         


    
     
  
        </tr>    
    
    

</tbody>
</table>
<form name="frmDelete"
action="{{route('agendamentos.destroy', $agendamento->id)}}"
method="post"
onsubmit="return confirm('Confirma a exclusão do agendamento??')">



@csrf
@method('DELETE') 
  
  <a type="button" class="btn btn-success mx-sm-1 " href="{{route('agendamentos.edit', $agendamento->id)}}">Atualizar</a>  

       <input type="submit" class="btn  btn-danger mx-sm-1 " value="Excluir">
       
      <a type="button" class="btn btn-info mx-sm-1 " href="{{route('agendamentos.index')}}">Voltar</a>


</form>



  </div>
  </div>

  

   
    </body>


</html>



@endsection