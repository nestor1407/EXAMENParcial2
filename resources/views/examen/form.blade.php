<!DOCTYPE html>
<html>

<head>
	<title>{{ $modo }} Registrar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body >
    <header>
        <center><h1 id="titulo" >{{ $modo }} Informacion del Estudiante</h1></center>
    </header>
    
    <section class="container">

    	<form action="{{ url('/students') }}" method="POST">
    @csrf
            <div class="form-floating mb-3" >            	
            	<input type="text" name="Nombres" class="form-control " id="floatingInput" placeholder="Nombres" value="{{ isset($student->Nombres)?$student->Nombres:'' }}" required>
                <label for="floatingInput" >Nombres</label>
            </div>

             <div class="form-floating mb-3">            	
            	<input type="text" name="Apellidos" class="form-control" id="floatingInput" placeholder="Apellidos" value="{{ isset($student->Apellidos)?$student->Apellidos:'' }}" required>
                <label for="floatingInput">Apellidos</label>
            </div>

            <div class="mb-3 mt-3">
            	<label>Fecha de Nacimiento</label>
            	<input type="date" name="Fecha_Nacimiento" class="form-control" value="{{ isset($student->Fecha_Nacimiento  )?$student->Fecha_Nacimiento  :'' }}">
            </div>

            <div class="mb-3 mt-3">
                <label>Carrera</label>
                <select name="id_carrera" id="id_carrera" class="form-control" required>
                    <option value="">--- Select ---</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{ $carrera['id_carrera'] }}">{{ $carrera['Nombre_Carrera'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="Sexo" class="form-control" id="floatingInput" placeholder="Masculino/Femenino" value="{{ isset($student->Sexo)?$student->Sexo:'' }}" required>
                <label for="floatingInput">Sexo</label>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="estado_civil" class="form-control" id="floatingInput" placeholder="Casado/Soltero etc." value="{{ isset($student->estado_civil )?$student->estado_civil :'' }}" required>
                <label for="floatingInput" >Estado Civil</label>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="Status" class="form-control"  id="floatingInput" placeholder="Activo/Inactivo" value="{{ isset($student->Status)?$student->Status:'' }}" required>
                <label for="floatingInput"  >Status</label>
            </div>

            <div class="mb-3 mt-3">
                <label>Campus</label>
                <select name="id_campus" id="id_campus" class="form-control" required>
                    <option value="">--- Select ---</option>
                    @foreach ($campus as $campuz)
                        <option value="{{ $campuz['id_campus'] }}">{{ $campuz['Descripcion'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Paiss</label>
                <select name="id_pais" id="id_pais" class="form-control" required>
                    <option value="">--- Select ---</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais['id_pais'] }}">{{ $pais['Descripcion'] }}</option>
                    @endforeach
                </select>
            </div>

		   	<input type="submit" value=" {{ $modo }} " class="btn btn-success">
            <a href='{{ url('students/') }}' class='btn btn-warning'>Regresar</a>
            
	   </form>

    </section>        
</body>
</html>