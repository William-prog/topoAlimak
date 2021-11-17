@extends('layouts.app')
@section('content')
<div class="container" style="text-align: center;">
    <style>
        .pdf{
            border-radius: 2%;
        }
    </style>
    <embed class="pdf" src="/document/ProcedimientoTecnico.pdf#toolbar=0" width="80%" height="750">
</div>
@include('layouts.footer')
@endsection