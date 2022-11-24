
<form action="<?php echo e(url('/students/'.$student->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PATCH')); ?>

    <?php echo $__env->make('examen.form',['modo'=>'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form><?php /**PATH C:\xampp\htdocs\examenP2 - copia\resources\views/examen/edit.blade.php ENDPATH**/ ?>