
<form action="{{ url('/students/'.$student->id) }}" method="POST">
    @csrf
    {{ method_field('PATCH') }}
    @include('examen.form',['modo'=>'Editar']);
</form>