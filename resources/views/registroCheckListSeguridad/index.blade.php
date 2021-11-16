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
                dom: 'fitlp',
                pagingType: 'full_numbers',
                pageLength: 5,
                lengthMenu: [5, 10, 15, 20, 100],
                select: 'single',
                "language": {
                    "search": "Buscar&nbsp;:",
                    "lengthMenu": "Mostrar _MENU_ Formularios",
                    "zeroRecords": "Dato no encontrado",
                    "info": "Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay formularios disponibles",
                    "infoFiltered": "(filtrado de _MAX_ Formularios)",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    }
                }
            })

            $('#btToggleDisplay').on('click', function() {
                $("#register").toggleClass('cards')
                $("#register thead").toggle()
            })
        });
    </script>

    <div class="container-fluid">
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
                <table id="register" class="table table-sm table-hover" cellspacing="0">
                    <thead class="">
                        <tr>
                            <th>Registro</th>
                            <th>cls_Fecha</th>
                            <th>cls_Turno</th>
                            <th>cls_Verificador</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registroCheckListSeguridad as $registro)
                        <tr>
                            <td scope="row"> {{$registro->id}} </td>
                            <td> {{date("d-m-Y", strtotime($registro->cls_Fecha));}} </td>
                            <td> {{$registro->cls_Turno}} </td>
                            <td> {{$registro->cls_Verificador}} </td>
                            <td>
                                <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/generarReporteSeguridad/PDF/'.$registro->id) }}" target="_blank" class="btn btn-warning">
                                    Generar PDF
                                    <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
    @include('layouts.footer')
    @endsection