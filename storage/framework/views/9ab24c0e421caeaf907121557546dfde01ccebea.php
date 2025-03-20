<?php $__env->startSection('title', __('Create new template')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('New'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">
         <form role="form" method="post" action="<?php echo e(route('settings.resumecvtemplate.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Name'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Categories'); ?></label>
                                 <select name="category_id" class="form-control">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Thumb'); ?> (750x750)</label>
                                <input name="thumb" type="file"><br>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('HTML content'); ?></label>
                                <textarea rows="4" name="content" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Style content'); ?></label>
                                <textarea rows="4" name="style" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Active'); ?></div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="active" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Allow active template'); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Premium'); ?></div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="is_premium" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Premium template'); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.resumecvtemplate.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <div class="ml-auto">
                            <button class="btn btn-primary" name="save_and_builder" type="submit" value="save_and_builder"><?php echo app('translator')->get('Save & Builder'); ?></button>
                            <button class="btn btn-success"><?php echo app('translator')->get('Save'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecvtemplates/create.blade.php ENDPATH**/ ?>