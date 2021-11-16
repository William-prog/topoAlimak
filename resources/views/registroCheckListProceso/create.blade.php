<form action="{{ url('/checkListProceso') }}" method="post">
    @csrf
    @include('registroCheckListProceso.form', ['modo'=>'Registrar']);
</form>