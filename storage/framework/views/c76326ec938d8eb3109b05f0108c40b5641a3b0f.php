<?php $__env->startSection('title', __('Settings')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Setting'); ?> - <?php echo e($item->name); ?></h1>
    <div class="my-3 my-lg-0 navbar-search">
        <div class="input-group">
            <div class="p-1 ">
                <a href="<?php echo e(route('resumecv.builder', $item->code)); ?>" class="btn btn-sm btn-primary"><i class="far fa-window-maximize"></i> <?php echo app('translator')->get('Builder'); ?></a>
            </div>
        </div>
    </div>
</div>
<form role="form" method="post" action="<?php echo e(route('resumecv.settings.update',$item)); ?>" autocomplete="off" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="form-group">
                <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                <input type="text" name="name" value="<?php echo e($item->name); ?>" class="form-control">
            </div>

            <div class="form-group mt-4">
                <label for="basic-url"><?php echo app('translator')->get('Public link Resumecv'); ?></label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3"><?php echo e(URL::to('publish')); ?></span>
                  </div>
                  <input type="text" name="slug" class="form-control" id="basic-url" value="<?php echo e($item->slug); ?>" aria-describedby="basic-addon3">
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <button class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecv/setting.blade.php ENDPATH**/ ?>