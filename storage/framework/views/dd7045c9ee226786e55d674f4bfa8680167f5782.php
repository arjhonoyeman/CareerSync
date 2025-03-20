<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Company Dashboard'); ?></h1>
</div>
<div class="row">
    <div class="col-md-4">
        <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-gray-600 text-uppercase mb-1">
                                <?php echo app('translator')->get('Total Jobs'); ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-600"><?php echo e($total_jobs); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="<?php echo e(route('company.jobs.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-gray-600 text-uppercase mb-1"><?php echo app('translator')->get('Total Jobs Featured'); ?>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-600"><?php echo e($total_jobs_featured); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
</div>
<?php if(Module::find('Saas')): ?>
<div class="mt-4 mb-4">
     <h1 class="h3 text-gray-800"><?php echo app('translator')->get('Subscription'); ?></h1>
    <?php if(!$subscribed): ?>
     <div class="alert alert-warning">
        <?php echo app('translator')->get('Upgrade your account. To get more applicants.'); ?>
    </div>
    <?php endif; ?>
     
</div>


<?php if(!$subscribed): ?>
<div class="row">
    <div class="col-md-<?php echo e(12 / (count($packages) + 1)); ?>">
        <div class="package-item">
            <div class="item">
                <div class="header-package">
                    <div class="inner-package">
                        <div class="top-package-info clearfix flex-middle-lg">
                            <h3 class="title"><?php echo app('translator')->get('Package Free'); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="bottom-package">
                    <div class="price">
                        <span class=""><?php echo app('translator')->get('Free'); ?></span>
                    </div>
                    <span class="f-16 text-muted"><?php echo app('translator')->get('Free'); ?></span>
                    <div class="package-des">
                        <ul>
                            <?php if(config('saas.no_job_post') == -1): ?>
                                <li><i class="fas fa-check"></i><?php echo app('translator')->get('Unlimited Job posting'); ?></li>
                            <?php else: ?>
                                <li><i class="fas fa-check"></i><?php echo app('translator')->get(':number Job posting',['number' => config('saas.no_job_post')]); ?></li>
                            <?php endif; ?>
                            <?php if(config('saas.no_job_featured') == -1): ?>
                                <li><i class="fas fa-check"></i><?php echo app('translator')->get('Unlimited Job featured'); ?></li>
                            <?php else: ?>
                                <li><i class="fas fa-check"></i><?php echo app('translator')->get(':number Job featured',['number' => config('saas.no_job_featured')]); ?></li>
                            <?php endif; ?>
                            <li><i class="fas <?php if(config('saas.featured_company') && config('saas.featured_company') == true): ?> fa-check <?php else: ?> fa-times <?php endif; ?>"></i><?php echo app('translator')->get('Featured Company'); ?></li>
                            <li><i class="fas <?php if(config('saas.support_24_7') && config('saas.support_24_7') == true): ?> fa-check <?php else: ?> fa-times <?php endif; ?>"></i><?php echo app('translator')->get('Premium Support 24/7'); ?></li>
                        </ul>
                    </div>
                    <div class="button-action">
                        <div class="add-cart">
                            <button class="button btn-block" disabled="">
                                <?php echo app('translator')->get('Free'); ?> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-<?php echo e(12 / (count($packages) + 1)); ?>">
            <div class="package-item <?php if($package->is_featured == 1): ?> is_featured <?php endif; ?> ">
                <div class="item">
                    <div class="header-package">
                        <div class="inner-package">
                            <div class="top-package-info clearfix flex-middle-lg">
                                <h3 class="title"><?php echo e($package->title); ?></h3>
                                <?php if($package->is_featured == 1): ?>
                                    <div class="recommended align-right">
                                    <?php echo app('translator')->get('Recommended'); ?></div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="bottom-package">
                        <div class="price">
                            <span class=""><?php echo e($currency_symbol); ?></span><?php echo e($package->price); ?>


                        </div>
                        <span class="f-16 text-muted"><?php echo e($package->interval_number); ?> <?php echo app('translator')->get($package->interval); ?></span>
                        <div class="package-des">
                            <ul>
                                <?php if($package->settings['no_job_post'] == -1): ?>
                                <li><i class="fas fa-check"></i><?php echo app('translator')->get('Unlimited Job posting'); ?></li>
                                <?php else: ?>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get(':number Job posting',['number' => $package->settings['no_job_post']]); ?></li>
                                <?php endif; ?>
                                <?php if($package->settings['no_job_featured']== -1): ?>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get('Unlimited Job featured'); ?></li>
                                <?php else: ?>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get(':number Job featured',['number' => $package->settings['no_job_featured']]); ?></li>
                                <?php endif; ?>
                                
                                <li><i class="fas <?php if($package->hasPermissionTo('featured_company') && $package->settings['featured_company'] == true): ?> fa-check <?php else: ?> fa-times <?php endif; ?>"></i><?php echo app('translator')->get('Featured Company'); ?></li>
                                <li><i class="fas <?php if($package->hasPermissionTo('support_24_7') && $package->settings['support_24_7'] == true): ?> fa-check <?php else: ?> fa-times <?php endif; ?>"></i><?php echo app('translator')->get('Premium Support 24/7'); ?></li>
                            </ul>
                        </div>
                        <div class="button-action">
                            <a href="<?php echo e(route('billing.package', $package)); ?>" class="button btn-block"><?php echo app('translator')->get('Upgrade Now'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>


<?php if($subscribed): ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
           <?php echo app('translator')->get('Your subscription for <strong>:package</strong> package is currently active and expires in <strong>:expires_in</strong> days!', ['package' => $subscription_title, 'expires_in' => $subscription_expires_in]); ?>
        </div>
   
    </div>
</div>
<?php endif; ?>
<?php if($subscribed): ?>
<div class="row">
    <div class="col-md-12">
    
        <div class="text-right">
            <form action="<?php echo e(route('billing.cancel')); ?>" method="POST" onsubmit="return confirm('<?php echo app('translator')->get('Confirm cancel subscription?'); ?>');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-secondary btn-clean">
                    <i class="fe fe-x-circle"></i> <?php echo app('translator')->get('Cancel subscription'); ?> &ndash; <?php echo e($subscription_title); ?>

                </button>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/employer/dashboard.blade.php ENDPATH**/ ?>