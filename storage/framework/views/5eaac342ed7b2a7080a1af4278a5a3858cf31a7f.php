<form action="<?php echo e(url('/students')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<?php echo $__env->make('examen.form',['modo'=>'Registrar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form><?php /**PATH C:\xampp\htdocs\examenP2 - copia\resources\views/examen/create.blade.php ENDPATH**/ ?>