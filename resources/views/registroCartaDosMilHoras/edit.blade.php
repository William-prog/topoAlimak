<form action="{{ url('/cartaCartaDosMilHoras/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCartaDosMilHoras.form', ['modo'=>'Guardar cambios']);
</form>