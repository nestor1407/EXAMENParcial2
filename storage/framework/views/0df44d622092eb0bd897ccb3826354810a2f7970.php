<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo e($modo); ?> Stundets</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .m-r-1em{ margin-right:1em; }
        .m-b-1em{ margin-bottom:1em; }
        .m-l-1em{ margin-left:1em; }
        .mt0{ margin-top:0; }
    
        body {
        margin: 0;
        background: darkgrey;
    }
    
    header {
        background-color: #062a49;
        color: white;
        padding: 3rem 2rem;
    }
    
    
    header h1 {
        font-size: 4rem;
        text-align: center;
    }
    
    .container {
        width: 500px;
        margin: 0 auto;
    }
    
    section {
        transition: all 0.3s ease;
        background-color: ghostwhite;
        margin: 1rem 0;
        border-radius: 0.5rem;
        padding: 0.50rem 0;
        cursor: pointer;
    }
    
    section:hover {
        box-shadow: 0 0.1rem 0.4rem rgba(0, 0, 0, 1);
    }
        </style>
</head>
<body>
    <header>
        <h1 id="titulo"><?php echo e($modo); ?> student Information</h1>
    </header>
    
    <section class="container mt-3">

    	<form action="<?php echo e(url('/students')); ?>" method="POST">
    <?php echo csrf_field(); ?>
            <div class="mb-3 mt-3">
            	<label>Names</label>
            	<input type="text" name="Nombres" class="form-control" placeholder="Enter your Name" value="<?php echo e(isset($student->Nombres)?$student->Nombres:''); ?>" required>
            </div>

             <div class="mb-3 mt-3">
            	<label>Surnames</label>
            	<input type="text" name="Apellidos" class="form-control" placeholder="Enter your Last name" value="<?php echo e(isset($student->Apellidos)?$student->Apellidos:''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
            	<label>Date of Birth</label>
            	<input type="date" name="Fecha_Nacimiento" class="form-control" value="<?php echo e(isset($student->Fecha_Nacimiento  )?$student->Fecha_Nacimiento  :''); ?>">
            </div>

            <div class="mb-3 mt-3">
                <label>College Carrer</label>
                <select name="id_carrera" id="id_carrera" class="form-control" required>
                    <option value="">--- Select ---</option>
                    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($carrera['id_carrera']); ?>"><?php echo e($carrera['Nombre_Carrera']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label>Sex</label>
                <input id="C" type="text" name="Sexo" class="form-control" placeholder="Enter your Sex" value="<?php echo e(isset($student->Sexo)?$student->Sexo:''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Civil Status</label>
                <input id="C" type="text" name="estado_civil" class="form-control" placeholder="Enter your Civil Status" value="<?php echo e(isset($student->estado_civil )?$student->estado_civil :''); ?>" required>
            </div>

            <div class="mb-3 mt-3">
                <label>Status</label>
                <input id="C" type="text" name="Status" class="form-control" placeholder="Enter your Status" value="<?php echo e(isset($student->Status)?$student->Status:''); ?>" required>
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
                <label>Country</label>
                <select name="id_pais " id="id_pais " class="form-control" required>
                    <option value="">--- Select ---</option>
                    <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pais['id_pais']); ?>"><?php echo e($pais['Descripcion']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

		   	<input type="submit" value="<?php echo e($modo); ?> Student Information " class="btn btn-primary">
            <a href='<?php echo e(url('students/')); ?>' class='btn btn-danger'>to Back</a>
            
	   </form>

    </section>        
</body>
</html><?php /**PATH C:\xampp\htdocs\examenP2\resources\views/examen/form.blade.php ENDPATH**/ ?>