<form action="{{ url('/checkListOperativa/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCheckListOperativa.form', ['modo'=>'Guardar cambios']);
</form>