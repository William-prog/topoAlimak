<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ALIMAK</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generalStyle.css') }}" rel="stylesheet">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <link href="{{ asset('css/switch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/textCopy.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/radio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/circleProgress.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/1bf0086160.js" crossorigin="anonymous"></script>


    <!-- Styles boostrapt  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar-custom">
            <div class="container-menu">
                <div class="header-navigation-menu">
                    <div class="header-icon">
                        <img src="/img/LogoBlanco.png" alt="">
                    </div>
                    <button class="navbar-nav-toggle">
                        <span></span>
                    </button>
                    <div class="navbar-navigation">
                        <ul>
                            @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Iniciar sesión    ') }}<i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">{{ __('Crear cuenta   ') }}<i class="fas fa-user-plus"></i></a>
                            </li>
                            @else

                            @if( Auth::user()->role == 'SuperAdministrador')
                            @include('layouts.superAdmin')
                            @endif

                            @if( Auth::user()->role == 'Operador')
                            @include('layouts.operador')
                            @endif

                            @if( Auth::user()->role == 'Administrador')
                            @include('layouts.administrador')
                            @endif

                            @if( Auth::user()->role == 'Externo')
                            @include('layouts.externo')
                            @endif

                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"><i class="fas fa-caret-down"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off"></i>{{ __(' Cerrar sesión') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Modal Formularios-->
        <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulario a llenar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body content-modal">
                        <div class="row">
                            <a href="/checkList/create" class="col-md-6">
                                <div class="buttonModalA norm-option">
                                    <h5>Registro de</h5>
                                    <span>Servicio</span>
                                    <div class="circle-option">
                                        <i style="color: #FF771F;" class="fas fa-user-check fa-1x"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="/alimak/create" class="col-md-6">
                                <div class="buttonModalA norm-option">
                                    <h5>Check List</h5>
                                    <span>Alimak</span>
                                    <div class="circle-option">
                                        <i style="color: #FF771F;" class="fas fa-sort-amount-down-alt fa-1x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn border shadow" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
            @guest

            @else
            @if( Auth::user()->role == 'SuperAdministrador')
            <style>
                .btn-flotante {
                    font-size: 20px;
                    /* Cambiar el tamaño de la tipografia */
                    text-transform: uppercase;
                    /* Texto en mayusculas */
                    font-weight: bold;
                    /* Fuente en negrita o bold */
                    color: #777777;
                    /* Color del texto */
                    border-radius: 5px;
                    /* Borde del boton */
                    letter-spacing: 2px;
                    /* Espacio entre letras */
                    background-color: #ffffff;
                    /* Color de fondo */
                    padding: 10px 10px;
                    /* Relleno del boton */
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    transition: all 300ms ease 0ms;
                    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                    z-index: 99;
                }

                .btn-flotante:hover {
                    background-color: #000;
                    color: #FFFFFF;
                    /* Color de fondo al pasar el cursor */
                    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
                    transform: translateY(-7px);
                }

                @media only screen and (max-width: 600px) {
                    .btn-flotante {
                        font-size: 14px;
                        padding: 12px 20px;
                        bottom: 20px;
                        right: 20px;
                    }
                }
            </style>
            <a href="{{ '/logued' }}" class="btn-flotante">
                <i class="fas fa-user-secret fas-1x"></i>
            </a>
            @endif
            @endguest
        </main>
    </div>
</body>

</html>