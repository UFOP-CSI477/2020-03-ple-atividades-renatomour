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
    
    
    
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  

              
         <title>Cadastro de Agendamentos</title>

    <style>

        body{
             background-color:white;
             font-family: "Times New Roman", Times, serif;
        
      }
    </style>
   

  </head>
  <body >


    <form  action="{{route('registros.store')}}" method="post" style="border-style:solid; margin:34px; " >
        @csrf
    
               <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:35pt">
               <h1 class="card-title" style="text-align:center; margin-bottom:20pt;">Cadastro de Manutenções</h1>
               <div class="row">





               <div class="col-md-6">
            <div class="form-group">
            <label for="user_id">Usuário:</label>
               
           
            <input value="{{Auth::user()->id}}" required="required" type="text" class="form-control" readonly=“true” id="user_id" placeholder="ID do usuário" name="user_id">
                
          </div>
          </div>

          <div class="row">
           <div class="col-md-6">
           <div class="form-group">
           <label for="tipo">Tipo:</label>
           <select name="tipo" id="tipo" class="form-control" required="required">
                
                    
                    <option value="1">POUCO URGENTE</option>
                    <option value="2">URGENTE</option>
                    <option value="3">MUITO URGENTE</option>
                    
                  </select>
            
            </div>
            </div>
  
        


        
          </div>




        
         


          <div class="col-md-6">
               <div class="form-group">
               <label for="equipamento_id">Equipamento: </label>             
               <select name="equipamento_id" id="equipamento_id" class="form-control" required="required">
                      
                    
                      @foreach($equipamentos as $equipamento)
                         <option value="{{$equipamento->id}}">{{$equipamento->nome}}</option>
                       @endforeach
                    </select>           
        
          </div>
          </div>

         
            <div class="col-md-6">
            <div class="form-group">
            <label for="datalimite">Data Limite:</label>
            <input required="required" min="now()" type="date" class="form-control" id="datalimite" placeholder="" name="datalimite">
                
         
          </div>
          </div>
          </div>


          <div class="row">
           <div class="col-md-6">
           <div class="form-group">
           <label for="descricao">Descrição:</label>
          <input required="required" type="text" class="form-control" id="descricao" placeholder="Descrição Da Manutencâo" name="descricao">
                            
          </div>
          </div>


         
        
            
              <div class="col-md-6">
              <div class="form-group" style="place-items:start center; margin-top:34pt;">
              <button type="submit" class="btn btn-lg btn-success">Inserir</button>
              <button type="reset" class="btn btn-lg btn-danger">Limpar</button>
      
      
            </div>
            </div>
            </div>
            </div>

        
        
            </form>
        
        </body>

</html>

@endsection

