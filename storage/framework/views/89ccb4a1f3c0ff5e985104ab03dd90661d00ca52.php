<?php $__env->startSection('title', __('E-mail Settings')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('E-mail Settings'); ?></h1>
</div>

<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.general.update', 'email')); ?>" autocomplete="off">
            <?php echo csrf_field(); ?>

            <div class="card">
                    <div class="card-status bg-blue"></div>
                    <div class="card-header">
                            <h4 class="card-title"><?php echo app('translator')->get('E-mail Settings'); ?></h4>
                        </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SMTP Host'); ?></label>
                                <input type="text" name="MAIL_HOST" value="<?php echo e(config('mail.host')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SMTP Port'); ?></label>
                                <input type="text" name="MAIL_PORT" value="<?php echo e(config('mail.port')); ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SMTP Username'); ?></label>
                                <input type="text" name="MAIL_USERNAME" value="<?php echo e(config('mail.username')); ?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SMTP Password'); ?></label>
                                <input type="text" name="MAIL_PASSWORD" value="<?php echo e(config('mail.password')); ?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('SMTP Encryption'); ?></label>
                                <?php
                                    $MAIL_ENCRYPTION = config('mail.encryption');
                                ?>
                                <select name="MAIL_ENCRYPTION" class="form-control">
                                    <option value="" <?php echo e(null ==  $MAIL_ENCRYPTION ? 'selected' : ''); ?>><?php echo app('translator')->get('No encryption'); ?></option>
                                    <option value="tls" <?php echo e('tls' == $MAIL_ENCRYPTION ? 'selected' : ''); ?>><?php echo app('translator')->get('TLS'); ?></option>
                                    <option value="ssl" <?php echo e('ssl' == $MAIL_ENCRYPTION ? 'selected' : ''); ?>><?php echo app('translator')->get('SSL'); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('From address'); ?></label>
                                <input type="text" name="MAIL_FROM_ADDRESS" value="<?php echo e(config('mail.from.address')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('From name'); ?></label>
                                <input type="text" name="MAIL_FROM_NAME" value="<?php echo e(config('mail.from.name')); ?>" class="form-control">
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
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Settings\Providers/../Resources/views/settings/email.blade.php ENDPATH**/ ?>