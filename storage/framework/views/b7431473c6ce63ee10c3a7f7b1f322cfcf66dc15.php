<?php $__env->startSection('title', __('Create category')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Create category'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.blogs.categories.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="form-label mb-2"><?php echo app('translator')->get('Thumbnail'); ?></div>
                        <div class="custom-file">
                            <input type="file" class="" name="thumb" accept="image/*">
                        </div>
                        <small class="help-block"><?php echo app('translator')->get('Recommended size: :size', ['size' => '100x100']); ?></small>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><?php echo app('translator')->get('Is featured'); ?></label>
                        <div>
                            <label><input type="radio" name="is_featured" value="1" <?php echo e(old('is_featured', '1') == '1' ? 'checked' : ''); ?>> <?php echo app('translator')->get('Yes'); ?></label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" name="is_featured" value="0" <?php echo e(old('is_featured', '1') == '0' ? 'checked' : ''); ?>> <?php echo app('translator')->get('No'); ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><?php echo app('translator')->get('Is active'); ?></label>
                        <div>
                            <label><input type="radio" name="is_active" value="1" <?php echo e(old('is_active', '1') == '1' ? 'checked' : ''); ?>> <?php echo app('translator')->get('Active'); ?></label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" name="is_active" value="0" <?php echo e(old('is_active', '1') == '0' ? 'checked' : ''); ?>> <?php echo app('translator')->get('In-active'); ?></label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.blogs.categories.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <button type="submit" class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Blogs\Providers/../Resources/views/categories/create.blade.php ENDPATH**/ ?>