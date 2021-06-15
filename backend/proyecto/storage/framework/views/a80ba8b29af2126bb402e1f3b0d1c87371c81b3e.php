
<?php $__env->startSection("titulo-pagina", "Instancia Gymkanas"); ?>
<?php $__env->startSection('contenido'); ?>
<p><a href="add-gk-instance"><button clas="btn btn-primary btn-sm">Nueva Instancia Gymkana</button></a></p>
<table class="table">
    <thead>
        <tr>
            <th>Gymkana</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Observaciones</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $gk_instance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gymkana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('gymkanas')->where('id', $gymkana->id_gymkana)->first()->name); ?></td>
            <td><?php echo e($gymkana->start_date); ?></td>
            <td><?php echo e($gymkana->finish_date); ?></td>
            <td><?php echo e($gymkana->observations); ?></td>
            <td><?php echo e($gymkana->description); ?></td>
            <td>
                <?php if($gymkana->finish_date >  date('Y-m-d H:i:s')): ?>
                    Activa
                <?php else: ?>
                    Finalizada
                <?php endif; ?>
            </td>
            <td><button class="btn btn-warning btn-sm"><a href="/admin/gk-instance/edit-view/<?php echo e($gymkana->id); ?>">Editar</a></button></td>
            <td>
                <form action="gk-instance/destroy/<?php echo e($gymkana->id); ?>" method="POST">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar?...')">
                </form>
            </td>
        </tr>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/gymkanasInstance.blade.php ENDPATH**/ ?>