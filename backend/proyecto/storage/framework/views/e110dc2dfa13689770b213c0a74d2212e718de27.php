
<?php $__env->startSection("titulo-pagina", "Test"); ?>
<?php $__env->startSection('contenido3'); ?>

<table class="table">
    <thead>
        <tr>
            <th>Grupo</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Criterio Aceptación</th>
            <th>Respuestas</th>
            <th>Puntos</th>
            <th colspan="2">Verificar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $group_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('groups')->where('id', $g_test->id_group)->first()->description); ?></td>
            <td><?php echo e(DB::table('tests')->where('id', $g_test->id_test)->first()->name); ?></td>
            <td><?php echo e(DB::table('tests')->where('id', $g_test->id_test)->first()->description); ?></td>
            <td><?php echo e(DB::table('tests')->where('id', $g_test->id_test)->first()->acceptance_criteria); ?></td>
            <td><?php echo e($g_test->answer); ?></td>
            <td><?php echo e(DB::table('tests')->where('id', $g_test->id_test)->first()->score); ?></td>
            <td><button class="btn btn-success btn-sm"><a href="/organizador/tests/correct/<?php echo e($g_test->id); ?>">Correcta</a></button></td>
            <td><button class="btn btn-danger btn-sm"><a href="/organizador/tests/incorrect/<?php echo e($g_test->id); ?>">InCorrecta</a></button></td>
           
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('organizador.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/organizador/testsAnswer.blade.php ENDPATH**/ ?>