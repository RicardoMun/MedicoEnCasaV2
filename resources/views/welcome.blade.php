
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Medico en casa</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    
    

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #99CBCE;">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/Imagenes/medicina.png"
                        style="width: 45px; height:45px; position:relative; left:9px;" />
                        <b>Medi+</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav me-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('datosPaciente.index') }}">Ver pacientes</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctors.create') }}">Registrar personal médico</a>
                        </li>
                            
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctors.index') }}">Listar personal médico</a>
                        </li>

                    </ul>
                    

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-0 py-0 sm:block">

                            @auth
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm">Iniciar sesión</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-success btn-sm">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </nav>
        


        <div class="container">

            <div class="section">
                <div class="row">
                    <div class="col s6 mystylesecond">
                        <b><h1 style="color:#99CBCE;">¿Quienes somos?</h1></b>
                        <p style="">Lorem ipsum dolor sit amet consectetur adipiscing elit, inceptos augue magna pulvinar fermentum ut diam, justo auctor commodo quisque parturient non.
                            Lacus et inceptos lectus ac sociis vitae penatibus vehicula phasellus mus quam gravida curae tellus tortor, congue tempus feugiat facilisi dis commodo
                            vel montes dictumst enim primis mi aliquam lacinia. Hac torquent curabitur orci tincidunt class ornare fringilla bibendum nam, lobortis mollis pulvinar 
                            proin at nisl congue praesent, facilisis vestibulum ligula erat metus penatibus imperdiet integer.
            
                            Magna pulvinar felis non morbi platea montes sociis lacus pretium, ornare mattis iaculis in cursus faucibus ad fermentum ridiculus, torquent hac integer 
                            erat inceptos eleifend lectus lobortis. Ullamcorper vel sapien nulla auctor convallis neque, eu nisi magna ante eleifend aptent fusce, euismod suspendisse curae cras sodales. 
                            Massa accumsan iaculis mattis vestibulum nascetur platea habitasse ligula habitant, phasellus facilisis fames nec nibh curabitur sodales aliquet, justo facilisi sociosqu turpis
                            mollis semper mus id.
                        </p>

                    </div>

                    <div class="col s6">
                        <img src="/Imagenes/Hospital.jpg"
                        style="width: 670px; height:380.76px; position:relative; left:9px; top: 150px" />

                        <img src="/Imagenes/medicina.png"
                        style="width: 480px; height:453px; position:absolute; left:1376px; top: 150px" />
                    </div>

                </div>

                <div class="d-flex justify-content-around">
                    <div class="d-flex">
                        <p style="color:#99CBCE;" class="material-icons style_circle" >
                            check_circle <p style="color: black;" class="check_circle">Medico en casa</p> 
                        </p>
                    </div>
                    <div class="d-flex">
                        <p style="color:#99CBCE;" class="material-icons style_circle">
                            check_circle <p style="color: black;" class="check_circle">Medico cirujano</p> 
                        </p>
                    </div>
                    <div class="d-flex">
                        <p style="color:#99CBCE;" class="material-icons style_circle">
                            check_circle <p style="color: black;" class="check_circle">Servicio 24h</p> 
                        </p>
                    </div>
                    <div class="d-flex">
                        <p style="color:#99CBCE;" class="material-icons style_circle">
                            check_circle <p style="color: black;" class="check_circle">Contactos:</p> 
                            <a> Manizales -> 321 4560 890 | </a> 
                            <a> Cali -> 602 4395 123 | </a> 
                            <a> Bogotá -> 345 1234 532 | </a>
                        </p>
                    </div>
                </div>

            </div>
            
            
        </div>
        
        <main class="py-4">
            
            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
