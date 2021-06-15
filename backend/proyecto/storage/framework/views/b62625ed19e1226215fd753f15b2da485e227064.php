
<?php $__env->startSection("titulo-pagina", "Usuarios"); ?>
<?php $__env->startSection('contenido'); ?>
<p><a href="add-user"><button clas="btn btn-primary btn-sm">Nuevo Usuario</button></a></p>
<div class="col-8">
    <div class="input-group">
        <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre">
        <div class="input-group-append"><span class="input-group-text">Buscar</span></div>
    </div>
    <div id="resultados" class="bg-light border"></div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Perfil</th>
            
            <th>Estado</th>
            <th>Organizador</th>
            <th>Editar</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->surname); ?></td>
            <td><?php echo e($user->perfil); ?></td>
            
            <td>
                <?php if($user->estado == 1): ?>
                    <button class="btn btn-info btn-sm"><a href="/admin/users/deactivate/<?php echo e($user->id); ?>">Desactivar</a></button></td>
                <?php else: ?>
                    <button class="btn btn-info btn-sm"><a href="/admin/users/activate/<?php echo e($user->id); ?>">Activar</a></button></td>
                <?php endif; ?>
            </td>
            <td>
                <?php if($user->perfil != "organizador"): ?>
                    <button class="btn btn-success btn-sm"><a href="/admin/users/makeOrganizer/<?php echo e($user->id); ?>">Convertir</a></button>
                <?php endif; ?>
            </td>
            <td><button class="btn btn-warning btn-sm"><a href="/admin/users/edit-view/<?php echo e($user->id); ?>">Editar</a></button></td>
            
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/users.blade.php ENDPATH**/ ?>