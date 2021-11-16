<form action="{{ url('/cartaCientoVeinteHoras') }}" method="post">
    @csrf
    @include('registroCartaCientoVeinteHoras.form', ['modo'=>'Registrar']);
</form>