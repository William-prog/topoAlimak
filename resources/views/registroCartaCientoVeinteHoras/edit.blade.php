<form action="{{ url('/seguridad/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCartaCientoVeinteHoras.form', ['modo'=>'Guardar cambios']);
</form>