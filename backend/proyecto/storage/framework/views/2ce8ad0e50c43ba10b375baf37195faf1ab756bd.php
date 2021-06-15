

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1">
            <p><a href="/alumno/gymkanas">Gymkanas</a></p>
            <p><a href="/alumno/inscripciones">Inscripciones</a></p>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><?php echo e(__('Gymkanas')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <?php echo $__env->yieldContent('contenido2'); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/alumno/base.blade.php ENDPATH**/ ?>