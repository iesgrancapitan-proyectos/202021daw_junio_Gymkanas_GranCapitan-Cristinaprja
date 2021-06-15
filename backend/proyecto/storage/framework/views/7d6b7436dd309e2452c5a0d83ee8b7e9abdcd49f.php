
<?php $__env->startSection("titulo-pagina", "Nueva Instancia Gymkana"); ?>
<?php $__env->startSection('contenido'); ?>
    <form method="POST" action="/admin/gymkanas/start-gymkana">
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label for="id_gymkana" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gymkana')); ?></label>
            <div class="col-md-6">
                <input type="text" name="name_gymkana" value="<?php echo e($gymkana->name); ?>" readonly="readonly" class="form-control <?php $__errorArgs = ['id_gymkana'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <input type="hidden" name="period_gymkana" value="<?php echo e($gymkana->period); ?>" />                
                <input type="hidden" name="id_gymkana" value="<?php echo e($gymkana->id); ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label for="start_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Fecha Inicio')); ?></label>
            <div class="col-md-6">
                <input id="start_date" type="datetime-local" class="form-control <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="start_date"
                    value="<?php echo e(old('start_date')); ?>" required autocomplete="start_date" autofocus>

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
            <label for="observations" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Observaciones')); ?></label>

            <div class="col-md-6">
                <input id="observations" type="text" class="form-control <?php $__errorArgs = ['observations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="observations"
                    value="<?php echo e(old('observations')); ?>" required autocomplete="observations" autofocus>

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
                    name="description" value="<?php echo e(old('description')); ?>" required autocomplete="description" autofocus>

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
                    <?php echo e(__('Agregar Gymkana')); ?>

                </button>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Usuarios\Usuario\Desktop\laravel\proyecto\resources\views/admin/startGymkana.blade.php ENDPATH**/ ?>