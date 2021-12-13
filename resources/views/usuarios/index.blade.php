@extends('layouts.app')

@section('content')
<div class="container">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js" integrity="sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

    <script type="70cf02be0b65b144043f4959-text/javascript">
        $(document).ready(function() {
            var table = $('#dataTableUsuarios').DataTable({
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
                $("#dataTableUsuarios").toggleClass('cards')
                $("#dataTableUsuarios thead").toggle()
            })
        });
    </script>

    <div class="row m-3">
        <div class="col-7">
            <table id="dataTableUsuarios" class="table table-sm table-hover" cellspacing="0">
                <thead class="">
                    <tr>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 5%;">No.</th>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 10%;">Hora</th>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 10%;">Num</th>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 20%;">Nombre</th>
                        <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 20%;">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <p style="display:none;"> {{$contador=0}} </p>
                    @foreach($usuariosLogueado as $usuario)
                    <tr>
                        <td>{{$contador = $contador + 1}}</td>
                        <td>
                            <?php
                            date_default_timezone_set("America/Mexico_City");
                            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                            $data['Fecha'] = $usuario->fecha;
                            $marca = strtotime($data['Fecha']);
                            ?>
                            <?= strftime('%e/%B/%Y', $marca) ?>
                        </td>
                        <td> {{$usuario->hora}} </td>
                        <td> {{$usuario->email}} </td>
                        <td> {{$usuario->nombre}} </td>
                        <td> {{$usuario->rol}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-5">
            <style>
                .cardManteniemito:hover {
                    background-color: #3D3D3D;
                    -webkit-transition: background-color 500ms linear;
                    -ms-transition: background-color 500ms linear;
                    transition: background-color 500ms linear;
                    border: 4 px solid rgba(255, 119, 31, 80%);

                    color: white;
                }
            </style>
            <div class="mb-4" style="width: 100%;">
                <div class=" rounded-lg p-5 shadow cardManteniemito">
                    <h2 class="h6 font-weight-bold text-center mb-4">40 Horas</h2>

                    <!-- Progress bar 1 -->
                    <canvas id="myChart"></canvas>
                    <!-- END -->

                    <!-- Demo info -->
                    <div class="row text-center mt-4">

                        @foreach($usuariosRegistrados as $usuarios)
                        @php
                        $contadorUsuarios=0;
                        @endphp
                        <div class="col-6 border-right">
                            <div class="h8 font-weight-bold mb-0">
                                
                                @if($usuarios->name != 'Sheccid Itzel Diaz Cadena')
                                {{ $usuarios->name }}
                                @endif
                                @if($usuarios->name != 'Itzel Primavera Serrano Ortiz')
                                {{ $usuarios->name }}
                                @endif
                                @if($usuarios->name != 'Amanda Robles Arango')
                                {{ $usuarios->name }}
                                @endif

                                @if($usuarios->name == 'Sheccid Itzel Diaz Cadena')
                                Sheccid
                                @endif
                                @if($usuarios->name == 'Itzel Primavera Serrano Ortiz')
                                Primavera
                                @endif
                                @if($usuarios->name == 'Amanda Robles Arango')
                                Amanda
                                @endif
                                <span class="small text-gray">
                                    @foreach($usuariosLogueado as $logued)
                                    @if($usuarios->name == $logued->nombre)

                                    @php
                                    $contadorUsuarios+=$contadorUsuarios+1;
                                    @endphp

                                    @endif
                                    @endforeach
                                    {{$contadorUsuarios}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- END -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>

    <script>
        const jsonUsuariosLogueado = <?php echo json_encode($usuariosLogueado) ?>;
        let cantSuperAdministrador = jsonUsuariosLogueado.filter(function(type, index) {
            return type.rol == 'SuperAdministrador'
        });
        let cantAdministrador = jsonUsuariosLogueado.filter(function(type, index) {
            return type.rol == 'Administrador'
        });
        let cantExterno = jsonUsuariosLogueado.filter(function(type, index) {
            return type.rol == 'Externo'
        });
    </script>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['SuperAdmin', 'Administrador', 'Externo'],
                datasets: [{
                    label: 'Usuarios',
                    data: [cantSuperAdministrador.length, cantAdministrador.length, cantExterno.length],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>
@include('layouts.footer')
@endsection