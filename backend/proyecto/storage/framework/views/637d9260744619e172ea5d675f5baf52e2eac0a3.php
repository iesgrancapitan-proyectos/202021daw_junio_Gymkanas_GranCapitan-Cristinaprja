
<?php $__env->startSection("titulo-pagina", "Gymkanas"); ?>
<?php $__env->startSection('contenido2'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Duracion</th>
            <th>Fecha Creación</th>
            <th>Empezar</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $gymkanas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gymkana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($gymkana->name); ?></td>
            <td><?php echo e($gymkana->description); ?></td>
            <td><?php echo e($gymkana->type); ?></td>
            <td><?php echo e($gymkana->period); ?></td>
            <td><?php echo e($gymkana->created_at); ?></td>
            <td><button class="btn btn-success btn-sm"><a href="/admin/gymkanas/start/<?php echo e($gymkana->id); ?>">Empezar</a></button></td>
            <td><button class="btn btn-warning btn-sm"><a href="/admin/gymkanas/edit-view/<?php echo e($gymkana->id); ?>">Editar</a></button></td>
            <td>
                <form action="gymkanas/destroy/<?php echo e($gymkana->id); ?>" method="POST">
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
<?php echo $__env->make('alumno.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/alumno/gymkanas.blade.php ENDPATH**/ ?>