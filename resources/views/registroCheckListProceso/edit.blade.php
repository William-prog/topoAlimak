<form action="{{ url('/checkListProceso/'.$datoRegistro->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}`
    @include('registroCheckListProceso.form', ['modo'=>'Guardar cambios']);
</form>