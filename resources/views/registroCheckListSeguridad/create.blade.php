<form action="{{ url('/checkListSeguridad') }}" method="post">
    @csrf
    @include('registroCheckListSeguridad.form', ['modo'=>'Registrar']);
</form>
