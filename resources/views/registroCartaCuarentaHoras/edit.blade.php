<form action="{{ url('/cartaCuarentaHoras/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCartaCuarentaHoras.form', ['modo'=>'Guardar cambios']);
</form>