
<?php $__env->startSection("titulo-pagina", "Test"); ?>
<?php $__env->startSection('contenido'); ?>
<p><a href="/admin/add-test"><button clas="btn btn-primary btn-sm">Nueva prueba</button></a></p>
<table class="table">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Tiempo max</th>
            <th>Dificultad</th>
            <th>Criterio Aceptación</th>
            <th>Revisión</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <?php if($test->image !== ""): ?>
                <td><img src="/images/tests/<?php echo e($test->id_gymkana); ?>/<?php echo e($test->image); ?>" width="40px"></td>
            <?php else: ?>
                <td></td>
            <?php endif; ?>
            <td><?php echo e($test->name); ?></td>
            <td><?php echo e($test->description); ?></td>
            <td><?php echo e($test->max_period); ?></td>
            <td><?php echo e($test->difficulty); ?></td>
            <td><?php echo e($test->acceptance_criteria); ?></td>
            <td>
                <?php if($test->review == 0): ?>
                    Sí
                <?php else: ?>
                    No
                <?php endif; ?>
            </td>
            <td><button class="btn btn-success btn-sm"><a href="/admin/tests/<?php echo e($test->id); ?>">Editar</a></button></td>
           
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/test.blade.php ENDPATH**/ ?>