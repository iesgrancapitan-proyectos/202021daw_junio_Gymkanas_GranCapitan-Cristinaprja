
<?php $__env->startSection("titulo-pagina", "Actualizar Instancia Gymkana"); ?>
<?php $__env->startSection('contenido'); ?>
<form method="POST" action="/admin/gk-instance/update/<?php echo e($id); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
        <label for="start_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Fecha Inicio')); ?></label>

        <div class="col-md-6">
            <input id="start_date" type="text" class="form-control <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="start_date"
                value="<?php echo e(DB::table('gymkana_instance')->where('id', $id)->first()->start_date); ?>" required autocomplete="start_date" autofocus>

            <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="finish_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Fecha Fin')); ?></label>

        <div class="col-md-6">
            <input id="finish_date" type="text" class="form-control <?php $__errorArgs = ['finish_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="finish_date" value="<?php echo e(DB::table('gymkana_instance')->where('id', $id)->first()->finish_date); ?>" required autocomplete="finish_date" autofocus>

            <?php $__errorArgs = ['finish_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="observations" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tipo')); ?></label>

        <div class="col-md-6">
            <input id="observations" type="text" class="form-control <?php $__errorArgs = ['Observaciones'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="observations"
                value="<?php echo e(DB::table("gymkana_instance")->where("id", $id)->first()->observations); ?>" required autocomplete="observations" autofocus>

            <?php $__errorArgs = ['observations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Descripción')); ?></label>

        <div class="col-md-6">
            <input id="description" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="description" value="<?php echo e(DB::table("gymkana_instance")->where("id", $id)->first()->description); ?>" required autocomplete="description" autofocus>

            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Editar Instancia Gymkana')); ?>

            </button>
        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/updateGkInstance.blade.php ENDPATH**/ ?>