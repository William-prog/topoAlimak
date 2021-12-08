@extends('layouts.app')

@section('content')
<div class="container">


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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <div class="row m-3">
        <div class="col">
            @guest

            @else

            @if( Auth::user()->role == 'SuperAdministrador')
            @include('informes.registrosUsuariosAdministrador')
            @endif

            @if( Auth::user()->role == 'Administrador')
            @include('informes.registrosUsuariosAdministrador')
            @endif

            @if( Auth::user()->role == 'Operador')
            @include('informes.registrosUsuarioUsuario')
            @endif

            @if( Auth::user()->role == 'Externo')
            @include('informes.registrosUsuariosAdministrador')
            @endif

            @endguest
        </div>
    </div>

</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>
@include('layouts.footer')
@endsection