<!DOCTYPE html>
<html>

<head>
	<title><?php echo e($modo); ?> Registrar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body >
    <header>
        <center><h1 id="titulo" ><?php echo e($modo); ?> Informacion del Estudiante</h1></center>
    </header>
    
    <section class="container">

    	<form action="<?php echo e(url('/students')); ?>" method="POST">
    <?php echo csrf_field(); ?>
            <div class="form-floating mb-3" >            	
            	<input type="text" name="Nombres" class="form-control " id="floatingInput" placeholder="Nombres" value="<?php echo e(isset($student->Nombres)?$student->Nombres:''); ?>" required>
                <label for="floatingInput" >Nombres</label>
            </div>

             <div class="form-floating mb-3">            	
            	<input type="text" name="Apellidos" class="form-control" id="floatingInput" placeholder="Apellidos" value="<?php echo e(isset($student->Apellidos)?$student->Apellidos:''); ?>" required>
                <label for="floatingInput">Apellidos</label>
            </div>

            <div class="mb-3 mt-3">
            	<label>Fecha de Nacimiento</label>
            	<input type="date" name="Fecha_Nacimiento" class="form-control" value="<?php echo e(isset($student->Fecha_Nacimiento  )?$student->Fecha_Nacimiento  :''); ?>">
            </div>

            <div class="mb-3 mt-3">
                <label>Carrera</label>
                <select name="id_carrera" id="id_carrera" class="form-control" required>
                    <option value="">--- Select ---</option>
                    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($carrera['id_carrera']); ?>"><?php echo e($carrera['Nombre_Carrera']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="Sexo" class="form-control" id="floatingInput" placeholder="Masculino/Femenino" value="<?php echo e(isset($student->Sexo)?$student->Sexo:''); ?>" required>
                <label for="floatingInput">Sexo</label>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="estado_civil" class="form-control" id="floatingInput" placeholder="Casado/Soltero etc." value="<?php echo e(isset($student->estado_civil )?$student->estado_civil :''); ?>" required>
                <label for="floatingInput" >Estado Civil</label>
            </div>

            <div class="form-floating mb-3">                
                <input  type="text" name="Status" class="form-control"  id="floatingInput" placeholder="Activo/Inactivo" value="<?php echo e(isset($student->Status)?$student->Status:''); ?>" required>
                <label for="floatingInput"  >Status</label>
            </div>

            <div class="mb-3 mt-3">
                <label>Campus</label>
                <select name="id_campus" id="id_campus" class="form-control" required>
                    <option value="">--- Select ---</option>
                    <?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campuz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($campuz['id_campus']); ?>"><?php echo e($campuz['Descripcion']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Paiss</label>
                <select name="id_pais" id="id_pais" class="form-control" required>
                    <option value="">--- Select ---</option>
                    <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pais['id_pais']); ?>"><?php echo e($pais['Descripcion']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

		   	<input type="submit" value=" <?php echo e($modo); ?> " class="btn btn-success">
            <a href='<?php echo e(url('students/')); ?>' class='btn btn-warning'>Regresar</a>
            
	   </form>

    </section>        
</body>
</html><?php /**PATH C:\xampp\htdocs\examenP2 - copia\resources\views/examen/form.blade.php ENDPATH**/ ?>