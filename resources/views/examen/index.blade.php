<!DOCTYPE HTML>
<html>
<head>
    <title>List</title>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body  >
 

    <div class="container">
        <div><br></div>
        <header>
            <center><h1 id="titulo" >Lista de Estudiantes</h1></center>
        </header>
        
        <br>
        <a href='{{ url('students/create') }}' class='btn btn-secondary'>CREAR NUEVO ESTUDIANTE</a>
</br>  
</br>      
        <table class="table table-hover">
        <thead border="3">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Carrera</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Status</th>
                <th>Campus</th>
                <th>Pais</th>
                <th>Editar/Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->Nombres }}</td>
                <td>{{ $student->Apellidos }}</td>
                <td>{{ $student->Fecha_Nacimiento }}</td>
                <td>{{ $student->id_carrera }}</td>
                <td>{{ $student->Sexo }}</td>
                <td>{{ $student->estado_civil }}</td>
                <td>{{ $student->Status }}</td>
                <td>{{ $student->id_campus }}</td>
                <td>{{ $student->id_pais }}</td>
                <td> 
                <a href="{{ url('/students/'.$student->id.'/edit') }}" class="btn btn-success">Editar</a>
                     |   
                <form action="{{ url('/students/'.$student->id) }}" method="POST" class="d-inline">
                    @csrf
                    {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Are you sure delete this record?')" value="Eliminar" class="btn btn-danger">

                </form> </td>

            </tr>
            @endforeach
        </tbody>
        </table>
        {!! $students->links() !!}
    </div> 
</body>
</html>