
<?php $__env->startSection("titulo-pagina", "Grupos de Usuarios"); ?>
<?php $__env->startSection('contenido'); ?>
<p><a href="/admin/add-user-group"><button clas="btn btn-primary btn-sm">Nuevo grupo de usuario</button></a></p>
<table class="table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Grupo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('users')->where('id', $group->id_user)->first()->email); ?></td>
            <td><?php echo e(DB::table('groups')->where('id', $group->id_group)->first()->description); ?></td>
            <td><button class="btn btn-warning btn-sm"><a href="/admin/users-groups/edit-view/<?php echo e($group->id); ?>">Editar</a></button></td>
            <td>
                <form action="/admin/users-groups/destroy/<?php echo e($group->id); ?>" method="POST">
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
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/usersGroups.blade.php ENDPATH**/ ?>