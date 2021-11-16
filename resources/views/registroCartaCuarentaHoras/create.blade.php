<form action="{{ url('/cartaCuarentaHoras') }}" method="post">
    @csrf
    @include('registroCartaCuarentaHoras.form', ['modo'=>'Registrar']);
</form>
