<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Admin Dashboard'); ?></h1>
</div>
<div class="row">
    <div class="col-md-3">
        <a href="<?php echo e(route('settings.companies.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body bg-primary text-light">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold mb-1">
                                <?php echo app('translator')->get('Total Company'); ?>
                            </div> 
                            <div class="h5 mb-0 font-weight-bold"><?php echo e($total_companies); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="<?php echo e(route('settings.jobs.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body bg-info text-light">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold mb-1">
                                <?php echo app('translator')->get('Total Jobs'); ?>
                            </div> 
                            <div class="h5 mb-0 font-weight-bold"><?php echo e($total_jobs); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="<?php echo e(route('settings.users.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body bg-dark text-light">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold mb-1">
                                <?php echo app('translator')->get('Total Employers'); ?>
                            </div> 
                            <div class="h5 mb-0 font-weight-bold"><?php echo e($total_employers); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-shield fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="<?php echo e(route('settings.users.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body bg-success text-light">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold mb-1">
                                <?php echo app('translator')->get('Total Candidates'); ?>
                            </div> 
                            <div class="h5 mb-0 font-weight-bold"><?php echo e($total_candidates); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tag fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header text-uppercase font-weight-bold text-gray-800">
            <?php echo app('translator')->get('Recent register companies'); ?>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <?php $__currentLoopData = $recent_20_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <i class="fas fa-building text-dark"></i>
                    <a href="<?php echo e(route('settings.companies.edit',$item)); ?>" class="text-dark"><?php echo e($item->company_name); ?> (<?php echo e($item->company_email); ?>) <?php if(isset($item->city)): ?>, <i class="fas fa-map-marker"></i> <?php echo e($item->city->name); ?> <?php endif; ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="card-footer text-right">
            <a href="<?php echo e(route('settings.companies.index')); ?>" class="text-dark"><?php echo app('translator')->get('See all companies'); ?> <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
          <div class="card-header text-uppercase font-weight-bold text-gray-800">
            <?php echo app('translator')->get('Recent jobs'); ?>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <?php $__currentLoopData = $recent_20_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <i class="fas fa-briefcase text-dark"></i>
                    <a href="<?php echo e(route('settings.jobs.edit',$item)); ?>" class="text-dark"><?php echo e($item->title); ?> (<?php echo e($item->company->company_name); ?>) <?php if(isset($item->city)): ?>, <i class="fas fa-map-marker"></i> <?php echo e($item->city->name); ?> <?php endif; ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="card-footer text-right">
            <a href="<?php echo e(route('settings.jobs.index')); ?>" class="text-dark"><?php echo app('translator')->get('See all jobs'); ?> <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Settings\Providers/../Resources/views/settings/dashboard.blade.php ENDPATH**/ ?>