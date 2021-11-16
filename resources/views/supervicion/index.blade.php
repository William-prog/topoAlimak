@extends('layouts.app')
@section('content')
<div class="container">
    <div class="form">
        <div class="row mt-2" style="text-align: center; align-items: center;">
            <div class="form-group col">
                <style>
                    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,800);

                    /* *,
                                    *:before,
                                    *:after {
                                        box-sizing: border-box;
                                        padding: 0;
                                        margin: 0;
                                        font: 300 1em/1.5 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
                                        text-decoration: none;
                                        color: #111;
                                    } */
                    .hoverA:hover {
                        border-bottom: 1px solid #111;
                    }

                    .btnOperacion:hover {
                        cursor: pointer
                    }

                    .btnOperacion {
                        background: transparent;
                        outline: none;
                        position: relative;
                        border: 2px solid #111;
                        padding: 15px 50px;
                        overflow: hidden;
                    }

                    /*button:before (attr data-hover)*/
                    .btnOperacion:hover:before {
                        opacity: 1;
                        transform: translate(0, 0);
                    }

                    .btnOperacion:before {
                        content: attr(data-hover);
                        color: #FF771F;
                        position: absolute;
                        top: 1.1em;
                        left: 0;
                        width: 100%;
                        /* text-transform: uppercase; */
                        letter-spacing: 3px;
                        font-weight: 800;
                        font-size: .8em;
                        opacity: 0;
                        transform: translate(-100%, 0);
                        transition: all .3s ease-in-out;
                    }

                    /*button div (button text before hover)*/
                    .btnOperacion:hover div {
                        opacity: 0;
                        transform: translate(100%, 0)
                    }

                    .btnOperacion div {
                        text-transform: uppercase;
                        letter-spacing: 3px;
                        font-weight: 800;
                        font-size: .8em;
                        transition: all .3s ease-in-out;
                    }
                </style>

                <button onclick="operativa();" style="display: block; margin: 0 auto;" class="btnOperacion" data-hover="Ver Registros">
                    <div>Operativa</div>
                </button>
            </div>
            <div class="form-group col">
                <button onclick="proceso();" style="display: block; margin: 0 auto;" class="btnOperacion" data-hover="Ver Registros">
                    <div>Proceso</div>
                </button>
            </div>
            <div class="form-group col">
                <button onclick="seguridad();" style="display: block; margin: 0 auto;" class="btnOperacion" data-hover="Ver Registros">
                    <div>Seguridad</div>
                </button>
            </div>
        </div>
    </div>

    <script>
        function operativa() {
            $("#operativa").css("display", "block");
            $("#proceso").css("display", "none");
            $("#seguridad").css("display", "none");
        }

        function proceso() {
            $("#proceso").css("display", "block");
            $("#operativa").css("display", "none");
            $("#seguridad").css("display", "none");
        }

        function seguridad() {
            $("#seguridad").css("display", "block");
            $("#proceso").css("display", "none");
            $("#operativa").css("display", "none");
        }
    </script>

    <div class="form">
        <div class="row mt-2">
            <div style="display: none;" id="operativa" class="form-group col">
                @include('supervicion.informesCheckListOperativa')
            </div>
            <div style="display: none;" id="proceso" class="form-group col">
                @include('supervicion.informesCheckListProceso')
            </div>
            <div style="display: none;" id="seguridad" class="form-group col">
                @include('supervicion.informesCheckListSeguridad')
            </div>
        </div>
    </div>

</div>
@include('layouts.footer')
@endsection