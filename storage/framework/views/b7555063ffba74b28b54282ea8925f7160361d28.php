<form action="<?php echo e(url('/students')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<?php echo $__env->make('examen.form',['modo'=>'Register'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form><?php /**PATH C:\xampp\htdocs\examenP2\resources\views/examen/create.blade.php ENDPATH**/ ?>