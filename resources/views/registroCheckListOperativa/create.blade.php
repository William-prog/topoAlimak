<form action="{{ url('/checkListOperativa') }}" method="post">
    @csrf
    @include('registroCheckListOperativa.form', ['modo'=>'Registrar']);
</form>
