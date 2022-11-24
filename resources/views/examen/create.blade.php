<form action="{{ url('/students') }}" method="POST">
    @csrf
@include('examen.form',['modo'=>'Registrar']);
</form>