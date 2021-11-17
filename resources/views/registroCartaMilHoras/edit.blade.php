<form action="{{ url('/cartaCartaMilHoras/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCartaMilHoras.form', ['modo'=>'Guardar cambios']);
</form>