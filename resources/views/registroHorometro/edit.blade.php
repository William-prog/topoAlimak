<form action="{{ url('/servicio/'.$datoId ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroHorometro.form', ['modo'=>'Guardar cambios']);
</form>