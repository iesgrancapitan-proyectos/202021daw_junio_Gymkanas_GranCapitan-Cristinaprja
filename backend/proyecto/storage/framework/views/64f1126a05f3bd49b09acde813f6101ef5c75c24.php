
<?php $__env->startSection("titulo-pagina", "Inscripciones"); ?>
<?php $__env->startSection('contenido'); ?>
<table class="table">
    <thead>
        <tr>
            <th>Gymkana</th>
            <th>Participante</th>
            <th>Date</th>
            <th>Observations</th>
            <th>Botones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $inscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(DB::table('gymkana_instance')->where('id', $inscription->id_gymkana_instance)->first()->description); ?></td>
            <td><?php echo e(DB::table('groups')->where('id', DB::table('participants')->where('id', $inscription->id_participant)->first()->id)->first()->description); ?></td>
            <td><?php echo e($inscription->date); ?></td>
            <td><?php echo e($inscription->observations); ?></td>
            <?php if($inscription->checkup !== 1): ?>
                <td><button class="btn btn-success btn-sm"><a href="/admin/inscriptions/accept/<?php echo e($inscription->id); ?>">Aceptar</a></button></td>
                <td><button class="btn btn-warning btn-sm"><a href="/admin/inscriptions/deny/<?php echo e($inscription->id); ?>">Rechazar</a></button></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/inscriptions.blade.php ENDPATH**/ ?>