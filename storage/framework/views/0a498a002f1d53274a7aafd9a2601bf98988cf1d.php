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
        <a href='<?php echo e(url('students/create')); ?>' class='btn btn-secondary'>CREAR NUEVO ESTUDIANTE</a>
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
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->Nombres); ?></td>
                <td><?php echo e($student->Apellidos); ?></td>
                <td><?php echo e($student->Fecha_Nacimiento); ?></td>
                <td><?php echo e($student->id_carrera); ?></td>
                <td><?php echo e($student->Sexo); ?></td>
                <td><?php echo e($student->estado_civil); ?></td>
                <td><?php echo e($student->Status); ?></td>
                <td><?php echo e($student->id_campus); ?></td>
                <td><?php echo e($student->id_pais); ?></td>
                <td> 
                <a href="<?php echo e(url('/students/'.$student->id.'/edit')); ?>" class="btn btn-success">Editar</a>
                     |   
                <form action="<?php echo e(url('/students/'.$student->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                <input type="submit" onclick="return confirm('Are you sure delete this record?')" value="Eliminar" class="btn btn-danger">

                </form> </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <?php echo $students->links(); ?>

    </div> 
</body>
</html><?php /**PATH C:\xampp\htdocs\examenP2 - copia\resources\views/examen/index.blade.php ENDPATH**/ ?>