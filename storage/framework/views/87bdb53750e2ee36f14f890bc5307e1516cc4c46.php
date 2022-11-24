<!DOCTYPE HTML>
<html>
<head>
    <title>List</title>
 
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
        background: #f3f3f3;
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
    </style>
 
</head>
<body>
 

    <div class="container">
        <div><br></div>
        <header>
            <h1 id="titulo">List of students</h1>
        </header>
        
        <br>
        <a href='<?php echo e(url('students/create')); ?>' class='btn btn-success m-b-1em'>Create New Student</a>
                 
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Names</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>college career</th>
                <th>Sex</th>
                <th>Civil Status</th>
                <th>Status</th>
                <th>Campus</th>
                <th>Country</th>
                <th>Actions</th>
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
                <a href="<?php echo e(url('/students/'.$student->id.'/edit')); ?>" class="btn btn-warning">Edit Student</a>
                     |   
                <form action="<?php echo e(url('/students/'.$student->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                <input type="submit" onclick="return confirm('Are you sure delete this record?')" value="Delete Student" class="btn btn-danger">

                </form> </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <?php echo $students->links(); ?>

    </div> 
</body>
</html><?php /**PATH C:\xampp\htdocs\examenP2\resources\views/examen/index.blade.php ENDPATH**/ ?>