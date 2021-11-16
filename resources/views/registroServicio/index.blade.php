@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))

    {{ Session::get('mensaje')  }}

    @endif
    <style>
        .cards tbody tr {
            float: left;
            width: 23%;
            margin: 0.5rem;
            border: 0.0625rem solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
        }

        .cards tbody td {
            display: block;
        }

        .table tbody label {
            display: none;
        }

        .cards tbody label {
            display: inline;
            position: relative;
            font-size: 85%;
            top: -0.5rem;
            float: left;
            color: #808080;
            min-width: 4rem;
            margin-left: 0;
            margin-right: 1rem;
            text-align: left;
        }

        tr.selected label {
            color: #404040;
        }

        .table .fa {
            font-size: 2.5rem;
            text-align: center;
        }

        .cards .fa {
            font-size: 7.5rem;
        }

        div.dataTables_wrapper div.dataTables_filter {
            text-align: left !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

    <script type="70cf02be0b65b144043f4959-text/javascript">
        $(document).ready(function() {

            var table = $('#register').DataTable({
                pagingType: 'full_numbers',
                pageLength: 10,
                lengthMenu: [10, 15, 20, 100],
                select: 'single',
                "language": {
                    "search": "Buscar&nbsp;:",
                    "lengthMenu": "Mostrar _MENU_ Formularios",
                    "zeroRecords": "Dato no encontrado",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay formularios disponibles",
                    "infoFiltered": "(filtrado de _MAX_ Formularios)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    select: {
                        rows: {
                            _: ""
                        }
                    }
                }
            })

            $('#btToggleDisplay').on('click', function() {
                $("#register").toggleClass('cards')
                $("#register thead").toggle()
            })
        });
    </script>
    <script type="70cf02be0b65b144043f4959-text/javascript">
        $(document).ready(function() {

            var tableAlimak = $('#registerAlimak').DataTable({
                dom: 'fitlp',
                pagingType: 'full_numbers',
                pageLength: 10,
                lengthMenu: [10, 15, 20, 100],
                select: 'single',
                "language": {
                    "search": "Buscar&nbsp;:",
                    "lengthMenu": "Mostrar _MENU_ Formularios",
                    "zeroRecords": "Dato no encontrado",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay formularios disponibles",
                    "infoFiltered": "(filtrado de _MAX_ Formularios)",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    select: {
                        rows: {
                            _: ""
                        }
                    }
                }
            })

            $('#btToggleDisplayAlimak').on('click', function() {
                $("#registerAlimak").toggleClass('cards')
                $("#registerAlimak thead").toggle()
            })
        });
    </script>

    <style>
        .accordion-button:not(.collapsed) {
            color: #FF771F;
            background-color: rgba(255, 255, 255, 0.2);
            border-bottom-color: #FF771F;
            box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
        }

        table.dataTable tbody>tr.selected,
        table.dataTable tbody>tr>.selected {
            color: black !important;
            font-weight: 200;
            background-color: #fff;
        }

        table.dataTable tbody tr.selected a,
        table.dataTable tbody th.selected a,
        table.dataTable tbody td.selected a {
            color: #000;
            font-weight: 700;
        }
    </style>

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>
                            <h3> <i class="fas fa-hard-hat fa-2x"></i> Registros de Servicios </h3>
                        </strong>
                    </button>
                </div>
                <div class="form-group col">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>

                            <h3> <i class="fas fa-parachute-box fa-2x"></i> Registros Alimak </h3>
                        </strong>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <br>

    <style>

    </style>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!--  -->
                    <div class="row m-3">
                        <div class="col">
                            <button id="btToggleDisplay" class="btn btn-primary">
                                Cambiar Tabla
                                <i class="fa fa-id-card-o fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col">
                            @guest

                            @else
                            @if( Auth::user()->name == 'Administrador')
                            @include('checkListEmpleado.tableAdmin')
                            @endif
                            @if( Auth::user()->name != 'Administrador')
                            @include('checkListEmpleado.tableUser')
                            @endif
                            @endguest
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="form">
                        <div class="row mt-2">
                            <div class="form-group col">
                                
                            </div>
                            <div class="form-group col">
                                
                            </div>
                            <div class="form-group col">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
    @include('layouts.footer')
    @endsection