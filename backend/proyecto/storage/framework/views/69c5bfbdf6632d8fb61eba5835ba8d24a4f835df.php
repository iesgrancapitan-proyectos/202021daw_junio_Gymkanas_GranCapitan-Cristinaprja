    
    <?php $__env->startSection("titulo-pagina", "Grupos"); ?>
    <?php $__env->startSection('contenido'); ?>
    <p><a href="add-group"><button clas="btn btn-primary btn-sm">Nueva Grupo</button></a></p>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($g->id); ?></td>
                <td><?php echo e($g->description); ?></td>
                <td><button class="btn btn-warning btn-sm"><a href="/admin/groups/edit-view/<?php echo e($g->id); ?>">Editar</a></button></td>
                <td>
                    <form action="groups/destroy/<?php echo e($g->id); ?>" method="POST">
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
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/groups.blade.php ENDPATH**/ ?>