<?php $__env->startSection('title', __('ResumeCV')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <div>
        <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('My ResumeCV'); ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if($data->count() > 0): ?>
            <div class="card">
                <div class="table-responsive">
                     <table class="table card-table table-vcenter text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                                <th><?php echo app('translator')->get('Public link'); ?></th>
                                <th><?php echo app('translator')->get('Views'); ?></th>
                                <th><?php echo app('translator')->get('Date Info'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <td>
                                     <div class="d-flex">
                                        <div class="p-1 ">
                                              <a href="<?php echo e(route('resumecv.builder', $item->code)); ?>"><span  class="badge badge-primary"><?php echo app('translator')->get('Builder'); ?></span></a>
                                        </div>
                                         <div class="p-1 ">
                                              <a href="<?php echo e(URL::to('resumecv/download',$item->code)); ?>"><span  class="badge badge-success"><?php echo app('translator')->get('Download PDF'); ?></span></a>
                                        </div>
                                        <div class="p-1"> 
                                            <form method="post" action="<?php echo e(route('resumecv.clone', $item)); ?>" >
                                              <?php echo csrf_field(); ?>
                                              <button type="submit" class="badge badge-default border-0">
                                              <?php echo app('translator')->get('Clone'); ?>
                                              </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-1 ">
                                              <a href="<?php echo e(route('resumecv.setting', $item->code)); ?>"><span  class="badge badge-secondary"><?php echo app('translator')->get('Settings'); ?></span></a>
                                        </div>
                                        <div class="p-1 ">
                                                <form method="post" action="<?php echo e(route('resumecv.delete', $item)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="badge badge-danger border-0">
                                                        <?php echo app('translator')->get('Delete'); ?>
                                                    </button>
                                                </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
        <div class="mt-4">
            <?php echo e($data->appends( Request::all() )->links()); ?>

        </div>
    </div>
    
</div>

<div class="row">
  <div class="col-lg-12">
    <?php if($data->count() == 0): ?>
    <div class="text-center">
      <div class="error mx-auto mb-3"><i class="far fa-file-alt"></i></div>
      <p class="lead text-gray-800"><?php echo app('translator')->get('No ResumeCV Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any ResumeCV"); ?>.</p>
      <a href="<?php echo e(url('alltemplates')); ?>" class="btn btn-primary">
        <span class="text"><?php echo app('translator')->get('New ResumeCV'); ?></span>
      </a>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecv/index.blade.php ENDPATH**/ ?>