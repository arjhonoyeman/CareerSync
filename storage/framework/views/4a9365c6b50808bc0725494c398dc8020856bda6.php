<?php $__env->startSection('title', __('Update Catetory')); ?>

<?php $__env->startSection('content'); ?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Update Catetory'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.resumecvcategories.update', $category->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                                <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Name'); ?>">
                            </div>

                        </div>
                        
                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.resumecvcategories.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <button class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecvcategories/edit.blade.php ENDPATH**/ ?>