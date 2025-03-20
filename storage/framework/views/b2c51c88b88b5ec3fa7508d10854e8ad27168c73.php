<?php $__env->startSection('title', $translates['title_edit']); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo e($translates['title_edit']); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.job.attributes.' . $attr_route . '.update', ['id' => $item->id])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label class="form-label"><?php echo e($translates['Name']); ?></label>
                                <input type="text" name="name" value="<?php echo e(old('name', $item->name)); ?>" class="form-control" placeholder="<?php echo e($translates['Name']); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Is default'); ?></label>
                                <div>
                                    <label><input type="radio" name="is_default" value="1" <?php echo e(old('is_default', $item->is_default) == '1' ? 'checked' : ''); ?>> <?php echo app('translator')->get('Yes'); ?></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <label><input type="radio" name="is_default" value="0" <?php echo e(old('is_default', $item->is_default) == '0' ? 'checked' : ''); ?>> <?php echo app('translator')->get('No'); ?></label>
                                </div>
                                <?php $__errorArgs = ['is_default'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Is active'); ?></label>
                                <div>
                                    <label><input type="radio" name="is_active" value="1" <?php echo e(old('is_active', $item->is_active) == '1' ? 'checked' : ''); ?>> <?php echo app('translator')->get('Active'); ?></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <label><input type="radio" name="is_active" value="0" <?php echo e(old('is_active', $item->is_active) == '0' ? 'checked' : ''); ?>> <?php echo app('translator')->get('In-active'); ?></label>
                                </div>
                                <?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        </div>
                        
                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.job.attributes.' . $attr_route . '.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <button class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/job_attributes/edit.blade.php ENDPATH**/ ?>