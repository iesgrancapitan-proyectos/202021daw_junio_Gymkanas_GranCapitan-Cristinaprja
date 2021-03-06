
<?php $__env->startSection("titulo-pagina", "Participantes"); ?>
<?php $__env->startSection('contenido'); ?>
<p style="text-align: center"><a href="add-participant"><button type="button" class="btn btn-primary">Nuevo Participante</button></a></p>
<table class="table">
    <thead>
        <tr>
            <th>Group</th>
            <th>Gymkana</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('groups')->where('id', $p->id_group)->first()->description); ?></td>
            <td><?php echo e(DB::table('gymkana_instance')->where('id', $p->id_gymkana_instance)->first()->description); ?></td>
            <td>
                <form action="/admin/participants/destroy/<?php echo e($p->id); ?>" method="POST">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar?...')">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/participants.blade.php ENDPATH**/ ?>