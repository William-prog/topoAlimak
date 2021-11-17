<form action="{{ url('/cartaCartaMilHoras') }}" method="post">
    @csrf
    @include('registroCartaMilHoras.form', ['modo'=>'Registrar']);
</form>
