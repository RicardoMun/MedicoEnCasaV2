<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #99CBCE;">

  <div class="container">

  
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/Imagenes/medicina.png"
        style="width: 45px; height:45px; position:relative; left:9px;" />
        <b>Medi+</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('datosPaciente.index') }}"> Ver pacientes </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Doctores
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('doctors.create') }}">Registrar personal médico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('doctors.index') }}">Listar personal médico</a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contactos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item"> Manizales: 321 4560 890</a></li>
            <li><a class="dropdown-item"> Cali: 602 4395 123</a></li>
            <li><a class="dropdown-item"> Bogotá: 345 1234 532</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
  </nav>