

<?php $__env->startSection('title', __('Settings')); ?>

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('General settings'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.general.update')); ?>" autocomplete="off"  enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fe fe-sliders"></i> <?php echo app('translator')->get('General settings'); ?></h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Site URL'); ?></label>
                                <input type="text" name="APP_URL" value="<?php echo e(config('app.url')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Site name'); ?></label>
                                <input type="text" name="APP_NAME" value="<?php echo e(config('app.name')); ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Site slogan'); ?></label>
                                <input type="text" name="SITE_SLOGAN" value="<?php echo e(config('app.SITE_SLOGAN')); ?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SERVER IP'); ?></label>
                                <input type="text" name="SERVER_IP" value="<?php echo e(config('app.SERVER_IP')); ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Favicon'); ?></div>
                                <div class="custom-file">
                                    <input type="file" class="" name="logo_favicon">
                                </div>
                                <small class="help-block"><?php echo app('translator')->get('Recommended size: :size', ['size' => '48x48']); ?></small>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="<?php echo e(asset(config('app.logo_favicon'))); ?>" height="50" alt="">
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Logo'); ?></div>
                                <div class="custom-file">
                                    <input type="file" class="" name="logo_frontend">
                                </div>
                                <small class="help-block"><?php echo app('translator')->get('Recommended size: :size', ['size' => '170x45']); ?></small>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="<?php echo e(asset(config('app.logo_frontend'))); ?>" height="50" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Logo Light'); ?></div>
                                <div class="custom-file">
                                    <input type="file" class="" name="logo_light">
                                </div>
                                <small class="help-block"><?php echo app('translator')->get('Recommended size: :size', ['size' => '170x45']); ?></small>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center p-2" style="background-color: black">
                            <img src="<?php echo e(asset(config('app.logo_light'))); ?>" height="50" alt="">
                        </div>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label class="form-label"><?php echo app('translator')->get('Description'); ?></label>
                        <textarea name="SITE_DESCRIPTION" rows="2" class="form-control"><?php echo e(config('app.SITE_DESCRIPTION')); ?></textarea>
                        <small class="help-block"><?php echo app('translator')->get('Recommended length of the description is 150-160 characters'); ?></small>
                    </div>

                    <div class="form-group">
                        <label class="form-label"><?php echo app('translator')->get('Keywords'); ?></label>
                        <textarea name="SITE_KEYWORDS" rows="3" class="form-control"><?php echo e(config('app.SITE_KEYWORDS')); ?></textarea>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Skins'); ?></label>
                                <select name="SITE_LANDING" class="form-control">
                                    <?php $__currentLoopData = $skins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item); ?>" <?php echo e($item == config('app.SITE_LANDING') ? 'selected' : ''); ?>><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fe fe-save mr-2"></i> <?php echo app('translator')->get('Save settings'); ?>
                    </button>
                </div>
            </div>

        </form>

    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Settings\Providers/../Resources/views/settings/index.blade.php ENDPATH**/ ?>