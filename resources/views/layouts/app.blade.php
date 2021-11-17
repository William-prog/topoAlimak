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
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/radio.css') }}" rel="stylesheet">

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
                            @if( Auth::user()->name != 'Fresnillo PLC')
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">

                                    {{ __('Generalidades    ') }}

                                    <span class="caret">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/Procedimiento" style="cursor: pointer">{{ __('Procedimiento Técnico    ') }}</a>
                                    </li>
                                    <li>
                                        <a href="/Diagnostico" style="cursor: pointer">{{ __('Diagnóstico    ') }}</a>
                                    </li>
                                    <li>
                                        <a href="/Mapa" style="cursor: pointer">{{ __('Mapa de Procesos    ') }}</a>
                                    </li>
                                </ul>
                            </li>

                            @if( Auth::user()->name == 'Administrador')
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Resumen Técnico    ') }} <span class="caret"><i class="fas fa-indent"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/estadisticas" style="cursor: pointer">{{ __('Estadísticas    ') }}<i class="fas fa-chart-bar"></i></a>
                                    </li>
                                    <li>
                                        <a href="/informes" style="cursor: pointer">{{ __('Informes    ') }}<i class="fas fa-paste"></i></a>
                                    </li>
                                    <li>
                                        <a href="/horometro" style="cursor: pointer">{{ __('Horómetros    ') }}<i class="fas fa-paste"></i></a>
                                    </li>
                                    <li>
                                        <a href="/supervicion" style="cursor: pointer">{{ __('Supervisión    ') }}<i class="fas fa-paste"></i></a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if( Auth::user()->name != 'Administrador' && Auth::user()->name != 'Fresnillo PLC')
                            <li>
                                <a href="/informes" style="cursor: pointer">{{ __('Informes    ') }}<i class="fas fa-paste"></i></a>
                            </li>
                            @endif
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle"></i> {{ __('Operación    ') }} <span class="caret"><i class="fas fa-user-plus"></i></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/horometro/create" style="cursor: pointer">{{ __('Horómetro     ') }}<i class="fas fa-stopwatch"></i></a>
                                    </li>
                                    <li>
                                        <a href="/servicio/create" style="cursor: pointer">{{ __('Usuarios     ') }}<i class="fas fa-plus-circle"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Supervisión    ') }} <span class="caret"><i class="fas fa-clipboard-check"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/checkListOperativa/create" style="cursor: pointer">{{ __('Operativa    ') }}</a>
                                        <a href="/checkListProceso/create" style="cursor: pointer">{{ __('Proceso    ') }}<i class="fas fa-user-plus"></i></a>
                                        <a href="/checkListSeguridad/create" style="cursor: pointer">{{ __('Seguridad de Higiene    ') }}<i class="fas fa-hand-sparkles"></i></a>
                                        <!-- <a href="/" style="cursor: pointer">{{ __('Mantenimiento    ') }}<i class="fas fa-tools"></i></a> -->
                                    </li>
                                </ul>
                            </li>
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Mantenimiento    ') }} <i class="fas fa-tools"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/cartaCuarentaHoras" style="cursor: pointer">{{ __('Mantenimiento 40 Hrs   ') }}<i class="fas fa-business-time"></i></a>
                                        <a href="/cartaCientoVeinteHoras" style="cursor: pointer">{{ __('Mantenimiento 120 Hrs   ') }}<i class="fas fa-business-time"></i></a>
                                        <a href="/cartaCartaMilHoras" style="cursor: pointer">{{ __('Mantenimiento 1000 Hrs   ') }}<i class="fas fa-business-time"></i></a>
                                        <a href="/cartaCartaDosMilHoras" style="cursor: pointer">{{ __('Mantenimiento 2000 Hrs   ') }}<i class="fas fa-business-time"></i></a>
                                    </li>
                                </ul>
                            </li>
                            @endif

                            @if(Auth::user()->name == 'Fresnillo PLC')
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Generalidades    ') }}
                                    <span class="caret">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/Procedimiento" style="cursor: pointer">{{ __('Procedimiento Técnico    ') }}</a>
                                    </li>
                                    <li>
                                        <a href="/Diagnostico" style="cursor: pointer">{{ __('Diagnóstico    ') }}</a>
                                    </li>
                                    <li>
                                        <a href="/Mapa" style="cursor: pointer">{{ __('Mapa de Procesos    ') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Resumen Técnico    ') }} <span class="caret"><i class="fas fa-indent"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/estadisticas" style="cursor: pointer">{{ __('Estadísticas    ') }}<i class="fas fa-chart-bar"></i></a>
                                    </li>
                                    <li>
                                        <a href="/informes" style="cursor: pointer">{{ __('Informes    ') }}<i class="fas fa-paste"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li style="font-size: 12px;" class="dropdown">
                                <a href="#" class="sub-menu-toggle">
                                    {{ __('Mantenimiento    ') }} <i class="fas fa-tools"></i></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/mantenimiento" style="cursor: pointer">{{ __('Control de Mantenimiento   ') }}<i class="fas fa-business-time"></i></a>
                                        <!-- <a href="/proceso/create" style="cursor: pointer">{{ __('/-/-/    ') }}<i class="fas fa-user-plus"></i></a>
                                        <a href="/seguridad/create" style="cursor: pointer">{{ __('/-/-/    ') }}<i class="fas fa-hand-sparkles"></i></a> -->
                                    </li>
                                </ul>
                            </li>
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

                            <!--  -->


                            @endguest
                            <!--  -->
                            <!--  -->
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
        </main>
    </div>
</body>

</html>

<!-- MODAL -->
<style>
    a {
        text-decoration: none !important;
    }

    .welcome-message .borderBtn {
        position: absolute;
        top: 300%;
        left: 45%;
        text-align: center;
        text-decoration: none;
        font-weight: 500;
        font-size: 1.05em;
        color: white;
        padding: 1.45em 3.35em;
        border-radius: 0.25em;
        background: rgba(195, 40, 40, 1);
    }

    .borderBtn:hover {
        color: white;
        background-color: #363B3F;
    }

    .container .btn-lg {
        background: rgba(195, 40, 40, 1);
        border: 0.05em solid rgba(195, 40, 40, .7);
        color: white;
    }

    .container .btn-lg:hover {
        background: white;
        border: 0.05em solid rgba(195, 40, 40, 1);
        color: rgba(195, 40, 40, 1);
    }

    .modal-body .form-control {
        border-radius: 0.35em;
        margin-right: 0.25em;
        padding: 0.15em;
    }

    .modal-body .form-group label {
        margin-left: 0.35em;
    }

    .modal-header {
        background: linear-gradient(to bottom right, #ff781f, white);
    }

    .modal-body .form-group {
        text-align: center;
    }

    .close {
        color: white !important;
        opacity: 0.8 !important;
    }

    .mohe {
        position: relative;
        display: block;
        color: white;
        float: left;
        padding: 0.75em;
    }

    .mohe:after {
        position: absolute;
        content: "";
        top: -1.45em;
        bottom: -1.45em;
        right: -7.15em;
        border-left: 0.05em solid rgba(0, 0, 0, 0.2);
        border-right: 0.05em solid rgba(255, 255, 255, 0.7);
        transform: rotate(25deg);
    }

    .divIcon {
        margin: 9%;
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
        bottom: 20px;
        right: 20px;
        transition: all 300ms ease 0ms;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        z-index: 99;
    }

    .divIcon:hover {
        background-color: #000;
        color: #ff781f;
        /* Color de fondo al pasar el cursor */
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-7px);
    }

    #link {
        text-decoration: none;
    }
</style>

<style>
    .modal-backdrop.show {
        opacity: .5;
        display: none !important;
    }
</style>

<div class="modal fade" id="myModal" role="dialog">
    <!-- modal dialog -->
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <div class="mohe">
                    <h2 class="modal-title"> Formulario a llenar</h2>
                </div>
            </div>
            <!-- end modal header-->
            <!-- modal body -->
            <div class="modal-body form-group">
                <div class="row mt-2">
                    <div class="form-group col">
                        <a href="/checkList/create">
                            <div class="col divIcon">
                                <i class="fas fa-hard-hat fa-7x"></i>
                                <p>Registro de Servicio</p>
                            </div>
                        </a>
                    </div>
                    <div class="form-group col">
                        <div target="_blank" id="link" href="/viewPdfChart">
                            <a href="/alimak/create">
                                <div class="col divIcon">
                                    <i class="fas fa-parachute-box fa-7x"></i>
                                    <p>Alimak CheckList</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>