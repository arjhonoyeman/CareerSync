

<?php $__env->startSection('title', __('Update user')); ?>

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Update'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">
        <form role="form" method="post" action="<?php echo e(route('settings.users.update', $user)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                                <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Name'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('E-mail'); ?></label>
                                <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="<?php echo app('translator')->get('E-mail'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Password'); ?></label>
                                <input type="password" name="password" value="" class="form-control" placeholder="<?php echo app('translator')->get('Password'); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Confirm password'); ?></label>
                                <input type="password" name="password_confirmation" value="" class="form-control" placeholder="<?php echo app('translator')->get('Password'); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Role User'); ?></label>
                                <select name="role" class="form-control" id="user_role_select">
                                    <option value="candidate" <?php echo e($user->role == 'candidate' ? 'selected' : ''); ?>><?php echo app('translator')->get('Candidate'); ?></option>
                                    <option value="employer" <?php echo e($user->role == 'employer' ? 'selected' : ''); ?>><?php echo app('translator')->get('Employer'); ?></option>
                                    <option value="admin" <?php echo e($user->role == 'admin' ? 'selected' : ''); ?>><?php echo app('translator')->get('Admin'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row <?php if($user->role != 'employer'): ?> d-none <?php endif; ?>" id="row_package_user">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Package'); ?></label>
                                <select name="package_id" class="form-control">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($package->id); ?>" <?php echo e($package->id == $user->package_id ? 'selected' : ''); ?>><?php echo e($package->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                 <small class="text-info"><?php echo app('translator')->get('Select a package for employer'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Package ends at'); ?></label>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" name="package_ends_at" value="<?php echo e($user->package_ends_at); ?>" placeholder="<?php echo app('translator')->get('Package ends at'); ?>" data-target="#datetimepicker1"/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <small class="text-info"><?php echo app('translator')->get('Select a package ends date for employer'); ?></small>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.users.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <button class="btn btn-success ml-auto"><?php echo app('translator')->get('Update user'); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
      <script src="<?php echo e(Module::asset('user:js/user.js')); ?>" ></script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\User\Providers/../Resources/views/users/edit.blade.php ENDPATH**/ ?>