
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    
    <title>Página Principal</title>

    <!--Java Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <style>

      body{
        background-color:white;
      
      }
    </style>
    
    <!-- Custom styles for this template -->

  </head>
  <body>

    <header>

   



    


  <div class="navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container d-flex justify-content-between">
    <a href="{{route('principal')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" stroke="currentColor">
          <path fill-rule="evenodd" ></svg>
    
        <strong>Inicio</strong>
      </a>

      <a href="{{route('equipamentos.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" ></svg>
        <strong>Equipamentos</strong>
      </a>

      <a href="{{route('registros.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" ></svg>
        <strong>Registros</strong>
      </a>

      <a href="{{route('users.index')}}" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  stroke="currentColor"  aria-hidden="true" ></svg>
        <strong>Usuários</strong>
      </a>
  

      @guest
      
          <a  href="{{ route('login') }}" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" stroke="currentColor"></svg>
            <strong>L </strong>
          </a>
     
      
      @if (Route::has('register'))
         
              <a  href="{{ route('register') }}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"></svg>
                <strong>Novo Usuário</strong>
              </a>
            
         
      @endif
  @else
      <div class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          
          
                  

          
          </div>
      </div>
  @endguest

      
    </div>
    
  </div>
  
  <div class="album py-5 bg-info">
  
    <div class="container">

      <div class="row d-flex justify-content-center" >
      
      <div class="col-md-6">
      
      <div class="card mb-4 shadow-sm">
      <div class="card-body">
      <h3 class="card-title">Suporte/Administracao</h3>
      <p class="card-text">Suporte: Relação Dos Equipamentos/Manutenção 
      <p class="card-text">Administraçâo: Cadastro dos equipamentos/manutenções.
      </p>
      <div class="d-flex justify-content-between align-items-center">
      <img src="https://blog.cpetecnologia.com.br/wp-content/uploads/2018/08/227982-manutencao-de-equipamentos-de-topografia-por-que-realizar-810x518.jpeg"  width ="200px";  class="img-fluid" alt="Imagem responsiva">
      <div class="btn-group">
                
                <a type="button" class="btn btn-lg btn-outline-info" href="{{route('geral')}}">Suporte</a>
                <a type="button" class="btn btn-lg btn-outline-info" href="{{route('administrativo')}}">Administracao</a>
                
                  
     </div>
     </div>
     </div>
     
     </div>
     </div>
  
  
      </div>       
</header>

<main role="main">



 

  @if(session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>
  @endif
  
  @yield('conteudo')

  

       

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">inicio</a>
    </p>
    </div>
</footer>




      </html>
