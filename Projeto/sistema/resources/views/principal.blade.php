
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    
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
        font-family: "Times New Roman", Times, serif;
 
      }
    </style>
    
    <!-- Custom styles for this template -->

  </head>
  <body>

    <header>

  <div class="navbar navbar-light" style="background-color:#A52A2A; shadow-sm">
    <div class="container d-flex justify-content-between">
      
    <a href="{{route('principal')}}" style="color:white;"class="navbar-brand d-flex align-items-center">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-text-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
                                        <strong>Inicio</strong>
                                        
      </a>

      <a href="{{route('agendamentos.index')}}" style="color:white;"class="navbar-brand d-flex align-items-center">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
                                       <strong>Reservas</strong>

      </a>
      <a href="{{route('salas.index')}}" style="color:white;"class="navbar-brand d-flex align-items-center">
     
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>
                                        <strong>Salas</strong>
                                        
      </a>

      <a href="{{route('pessoas.index')}}" style="color:white;"class="navbar-brand d-flex align-items-center">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
                                        <strong>Pessoas</strong>

<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"></svg>
      </a>
    

      @guest
      
          <a  href="{{ route('login') }}"style="color:white;" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" stroke="currentColor"></svg>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
            <strong>Login</strong>
          </a>
     
      
      @if (Route::has('register'))
         
              <a  href="{{ route('register') }}"style="color:white;" class="navbar-brand d-flex align-items-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"></svg>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                <strong>Cadastrar
                     Usuario</strong>
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
</header>

<main role="main">



  <section class="jumbotron text-center">
    <div class="container">
      <h1>Sistema de Reservas De Salas</h1>
      <img src="https://icea.ufop.br/sites/default/files/styles/os_files_xlarge/public/icea/files/banner_icea.png?m=1526529430&itok=qwvgttfZ" class="img-fluid" alt="Imagem responsiva">
      <div class="album py-5">
                 <div class="container">

         <div class="row">
         <div class="col-md-6">
         <div class="card mb-4 shadow-sm text-white bg-secondary ">
       
                <div class="card-body">
                  
                       <h3 class="card-title">Área Geral </h3>
                        <p class="card-text">Lista de Reservas/Pessoas/Salas
          
                      </p>
          
          <div class="d-flex justify-content-between align-items-center text-align:center">
          <div class="btn-group  ">
      
          <a type="button" class="btn btn-lg btn-danger" href="{{route('geral')}}">Acessar</a>
        
              
                  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>




        <div class="col-md-6">
        <div class="card mb-4 shadow-sm text-white bg-secondary">
        <div class="card-body">
      
                  <h3 class="card-title">Área administrativa</h3>
                  <p class="card-text">Cadastros de Salas/Pessoas/Reservas
                      
                      </p>
                  
        <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
        <a type="button" class="btn btn-lg btn-danger" href="{{route('administrativo')}}">Acessar</a>
                
                  
                    
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>        

       

</main>

      </div>
  </section>

  @if(session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>
  @endif
  
  @yield('conteudo')

  






      </html>
