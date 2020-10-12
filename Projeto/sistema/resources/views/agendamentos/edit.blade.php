@extends('principal')

@section('conteudo')


 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   
                         <title>Editar Reservas</title>

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
    <form  action="{{route('agendamentos.update', $agendamento->id)}}" method="post" style="border-style:solid; margin:34px; ">
        @csrf
        @method('PUT')
    
      <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">
      
              <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Atualizar Reserva </h1>
      
     <div class="row">
     <div class="col-md-6">
     <div class="form-group">
    
              <label for="pessoa_id">Pessoa: </label>             
           
              <select name="pessoa_id" id="pessoa_id" class="form-control">
            
              <option value={{$agendamento->pessoa->id}}>{{$agendamento->pessoa->nome}}</option>
     @foreach($pessoas as $pessoa)
                        
                         <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
      
      @endforeach
             </select>           
        
        
        
          </div>
          </div>




  <div class="col-md-6">
  <div class="form-group">
  
            <label for="sala_id">Nome Do Local:</label>
            <select name="sala_id" id="sala_id" class="form-control">
            <option value="{{$agendamento->pessoa->id}}">{{$agendamento->sala->nome}}</option>
                   
                   
     @foreach($salas as $sala)
                    <option value="{{$sala->id}}">{{$sala->nome}}</option>
     @endforeach
           
            </select>
                
      
      
          </div>
          </div>
          </div>

       
 
        

              
              
              
              
       <div class="col-md-6">
        <div class="form-group">
        
              <label for="data">Data :</label>
               <input value="{{$agendamento->data}}"type="date" class="form-control" id="data" placeholder="" name="data">
                
         
         
         
          </div>
          </div>
          </div>

           
  
           
        <div class="col-md-6">
        <div class="form-group" style="place-items:center;">
         
              <button type="submit" class="btn  btn-success ">Editar</button>
              <button type="reset" class="btn  btn-danger   ">Limpar</button>
         
         
         
         
         
            </div>
            </div>
            </div>
            </div>

  
  
  
        </form>
  
</body>

</html>

@endsection

