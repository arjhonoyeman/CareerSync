<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Dashboard'); ?></h1>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="<?php echo e(route('resumecv.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-gray-600 text-uppercase mb-1">
                                <?php echo app('translator')->get('Total ResumeCV'); ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-600"><?php echo e($total_resume); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="<?php echo e(route('resumecv.index')); ?>" class="text-decoration-none">
            <div class="card shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-gray-600 text-uppercase mb-1"><?php echo app('translator')->get('Total Views ResumeCV'); ?>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-600"><?php echo e($total_views); ?></div>
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

<div class="row">
    <div class="col-md-12">
        <?php if($data_10_first->count() > 0): ?>
            <div class="mt-4 mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('My ResumeCV'); ?></h1>
            </div>
            <div class="card">
                <div class="table-responsive">
                     <table class="table card-table table-vcenter text-nowrap">
                        <thead class="">
                            <tr>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                                <th><?php echo app('translator')->get('Public link'); ?></th>
                                <th><?php echo app('translator')->get('Views'); ?></th>
                                <th><?php echo app('translator')->get('Date Info'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data_10_first; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <span><a href="<?php echo e(route('resumecv.builder', $item->code)); ?>"><?php echo e($item->name); ?></a></span>
                                </td>
                                <td>
                                    <div class="public-link"><small><a href="<?php echo e(URL::to('publish',$item->slug)); ?>" target="_blank" class="text-dark"><?php echo e(URL::to('publish')); ?>/<?php echo e($item->slug); ?></a></small>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-info badge-pill"><?php echo e($item->view_count); ?> <?php echo app('translator')->get('views'); ?></span>
                                </td>
                                <td>
                                <div class="small text-muted">
                                        <?php echo app('translator')->get('Created'); ?>: <?php echo e($item->created_at->format('M j, Y')); ?><br>
                                        <?php echo app('translator')->get('Modified'); ?>: <?php echo e($item->updated_at->format('M j, Y')); ?>

                                </div>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
    
    </div>
    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Dashboard\Providers/../Resources/views/index.blade.php ENDPATH**/ ?>