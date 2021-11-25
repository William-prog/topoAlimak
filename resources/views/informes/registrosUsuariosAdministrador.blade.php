<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
<script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

<script type="70cf02be0b65b144043f4959-text/javascript">
    $(document).ready(function() {
        var table = $('#dataTableServicios').DataTable({
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
            $("#dataTableServicios").toggleClass('cards')
            $("#dataTableServicios thead").toggle()
        })
    });
</script>

<table id="dataTableServicios" class="table table-sm table-hover" cellspacing="0">
    <thead class="">
        <tr>
            <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 5%;">No.</th>
            <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 10%;">Fecha</th>
            <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 15%;">Operador</th>
            <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 20%;">Empresa</th>
            <th style="position: sticky; top: 0;     background-color: #FEFCFB !important; width: 10%;">Turno</th>
            <th style="width: 10%;">Estado</th>
            <th style="width: 10%;">PDF</th>
        </tr>
    </thead>
    <tbody>
        <p style="display:none;"> {{$contador=0}} </p>
        @foreach($registroServicio as $registro)
        @if( $registro->idForanea == $registro->id)
        <tr>
            <td>{{$contador = $contador + 1}}</td>
            <td>
                <?php
                date_default_timezone_set("America/Mexico_City");
                setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                $data['Fecha'] = $registro->fechaRegistro;
                $marca = strtotime($data['Fecha']);
                ?>
                <?= strftime('%e/%B/%Y', $marca) ?>
            </td>
            <td> {{$registro->nomOperador}} </td>
            <!-- <td> {{$registro->encargado}} </td> -->
            <td> {{$registro->empresa}} </td>
            <td> {{$registro->turno}} </td>
            <td>
                <div class="form">
                    <div class="form-group">
                        <div class="row mt-1">
                            <div style="margin-left: 5%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                @if($registro->horaSalida == '---')
                                <a style="width: 83%; padding-left: 4%; font-size: 0.8vw;" href="{{ url('/servicio/'.$registro->idForanea.'/edit')}}" class="btn btn-danger">
                                    Cerrar Registro
                                </a>
                                @endif
                                @if($registro->horaSalida != '---')
                                <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                                    <strong> Terminado </strong>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="form">
                    <div class="form-group">
                        <div class="row mt-1">
                            <div style="margin-left: 5%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/generarReportePorServicio/PDF/'.$registro->fechaRegistro.'/'.$registro->turno.'/'.$registro->id) }}" target="_blank" class="btn btn-warning">
                                    Generar PDF
                                    <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>

            <!-- <td>
                    <div class="form">
                        <div class="form-group">
                            <div class="row mt-1">
                                <div style="margin-left: 5%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                    <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/generarReporte/CSV/'.$registro->fechaRegistro.'/'.$registro->turno.'/'.$registro->id) }}" target="_blank" class="btn btn-warning">
                                        Generar Excel
                                        <i style="color: green;" class="fas fa-file-excel" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td> -->
                
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="70cf02be0b65b144043f4959-|49" defer=""></script>