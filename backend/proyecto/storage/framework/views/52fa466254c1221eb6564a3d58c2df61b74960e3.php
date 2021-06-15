
<?php $__env->startSection("titulo-pagina", "Test"); ?>
<?php $__env->startSection('contenido3'); ?>

<table class="table">
    <thead>
        <tr>
            <th>Gymkana</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Criterio Aceptación</th>
            <th>Puntos</th>
            <th>Respuestas</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('gymkanas')->where('id', $test->id_gymkana)->first()->name); ?></td>
            <td><?php echo e($test->name); ?></td>
            <td><?php echo e($test->description); ?></td>
            <td><?php echo e($test->acceptance_criteria); ?></td>
            <td><?php echo e($test->score); ?></td>
            <td><button class="btn btn-success btn-sm"><a href="/organizador/tests/<?php echo e($test->id); ?>">Ver</a></button></td>
           
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('organizador.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/organizador/tests.blade.php ENDPATH**/ ?>