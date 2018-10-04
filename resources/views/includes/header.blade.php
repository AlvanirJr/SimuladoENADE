{{Auth::user()->tipousuario_id}}
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: #1a75ff">
  <a class="navbar-brand" href="/">Inicio</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @can('create', Auth::user()) 

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Curso
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cadastrar/curso">Cadastrar</a>
          <a class="dropdown-item" href="/listar/curso">Listar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Coordenador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cadastrar/usuario">Cadastrar</a>
          <a class="dropdown-item" href="/listar/usuario">Listar</a>
        </div>
        </li>
        

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ciclo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cadastrar/ciclo">Cadastrar</a>
          <a class="dropdown-item" href="/listar/ciclo">Listar</a>
        </div>
      </li>
      @endcan

      @can('view_coordenador', Auth::user())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ciclo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cadastrar/ciclo">Cadastrar</a>
          <a class="dropdown-item" href="/listar/ciclo">Listar</a>
        </div>
      </li>
      @endcan


    

    </ul>
  </div>

  <li class="nav-item dropdown" style="list-style-type: none">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}" 
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </div>
  </li>
</nav>