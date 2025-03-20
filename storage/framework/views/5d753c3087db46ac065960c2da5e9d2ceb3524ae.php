<?php $__env->startSection('title', __('Account Settings')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Setting Account'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">
        <form role="form" method="post" action="<?php echo e(route('accountsettings.update')); ?>" autocomplete="off">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab_profile" data-toggle="tab">
                                <?php echo app('translator')->get('Profile'); ?>
                            </a>
                        </li>
                        <?php
                            $views_render = accountSettingPayments(['user' => $user]);
                        ?>

                        <?php if(!empty($views_render)): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab_payment_setting" data-toggle="tab">
                                    <?php echo app('translator')->get('Payment Settings'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                                        <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" placeholder="<?php echo app('translator')->get('Full name'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" value="<?php echo e($user->email); ?>" class="form-control disabled" placeholder="E-mail" disabled>
                                        <small class="help-block"><?php echo app('translator')->get("E-mail can't be changed"); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Password'); ?></label>
                                        <input type="password" class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" name="password" placeholder="<?php echo app('translator')->get('Password'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Confirm password'); ?></label>
                                        <input type="password" class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" name="password_confirmation" placeholder="<?php echo app('translator')->get('Confirm password'); ?>">
                                    </div>
                                    <div class="alert alert-info">
                                        <?php echo app('translator')->get('Type new password if you would like to change current password.'); ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="tab-pane" id="tab_payment_setting">
                            <?php if(!empty($views_render)): ?>
                                <?php echo $views_render; ?>

                            <?php endif; ?>
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
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\User\Providers/../Resources/views/auth/profile.blade.php ENDPATH**/ ?>