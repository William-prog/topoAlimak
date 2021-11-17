<form action="{{ url('/cartaCartaDosMilHoras') }}" method="post">
    @csrf
    @include('registroCartaDosMilHoras.form', ['modo'=>'Registrar']);
</form>
