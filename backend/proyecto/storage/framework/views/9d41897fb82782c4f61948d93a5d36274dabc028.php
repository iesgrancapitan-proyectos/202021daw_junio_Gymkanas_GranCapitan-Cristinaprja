
<?php $__env->startSection("titulo-pagina", "Test"); ?>
<?php $__env->startSection('contenido'); ?>

<table class="table">
    <thead>
        <tr>
            <th>Titulo Gymkana</th>
            <th>Descripción Gymkana</th>
            <th>Num Pruebas</th>
            <th>Pruebas</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $gymkanas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gymkana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($gymkana->name); ?></td>
            <td><?php echo e($gymkana->description); ?></td>
            <td><?php echo e(sizeof(DB::table('tests')->where('id_gymkana', $gymkana->id)->get())); ?></td>
            <td><button class="btn btn-success btn-sm"><a href="/admin/tests/<?php echo e($gymkana->id); ?>">Ver Pruebas</a></button></td>           
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/testsGk.blade.php ENDPATH**/ ?>