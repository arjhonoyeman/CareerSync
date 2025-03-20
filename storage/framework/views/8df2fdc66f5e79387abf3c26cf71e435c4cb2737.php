<?php $__env->startSection('title', __('Resumecv templates')); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Resumecv templates'); ?></h1>
    <a href="<?php echo e(route('settings.resumecvtemplate.create')); ?>" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> <?php echo app('translator')->get('Create'); ?></a>
</div>

<div class="row">
    <div class="col-md-12">

        <?php if($data->count() > 0): ?>
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo app('translator')->get('Image'); ?></th>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                                <th><?php echo app('translator')->get('Category'); ?></th>
                                <th><?php echo app('translator')->get('Status'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img src="<?php echo e(URL::to('/')); ?>/storage/thumb_templates/<?php echo e($item->thumb); ?>" class="img-thumbnail" height="40" />
                                    
                                </td>
                                <td>
                                    <span><a href="<?php echo e(route('settings.resumecvtemplate.edit', $item)); ?>"><?php echo e($item->name); ?></a></span>
                                </td>
                                <td><?php if(isset($item->category)): ?>
                                         <span><a href="<?php echo e(route('settings.resumecvcategories.edit', $item->category->id)); ?>"><?php echo e($item->category->name); ?></a></span>
                                    <?php else: ?>
                                        <span><?php echo app('translator')->get('None'); ?></span>
                                    <?php endif; ?>
                                   
                                </td>
                                <td>
                                    <?php if($item->active): ?>
                                        <span class="small text-success"><i class="fas fa-check-circle text-success"></i> <?php echo app('translator')->get('Active'); ?></span>
                                    <?php else: ?>
                                        <span class="small text-warning"><i class="fas fa-times-circle"></i> <?php echo app('translator')->get('Not active'); ?></span>
                                    <?php endif; ?>
                                    <p class="mb-2"></p>
                                    <?php if($item->is_premium): ?>
                                        <span class="small text-dark"><strong><?php echo app('translator')->get('Premium'); ?></strong></span>
                                    <?php else: ?>
                                        <span class="small text-success"><strong><?php echo app('translator')->get('Free'); ?></strong></span>
                                    <?php endif; ?>
                                    
                                </td>
                                <td>
                                     <div class="d-flex">
                                        <div class="p-1">
                                              <a href="<?php echo e(route('settings.resumecvtemplate.edit', $item)); ?>"><span  class="badge badge-primary"><?php echo app('translator')->get('Edit'); ?></span></a>
                                        </div>
                                        <div class="p-1 ">
                                              <a href="<?php echo e(route('settings.resumecvtemplate.builder', $item)); ?>"><span  class="badge badge-dark"><?php echo app('translator')->get('Builder'); ?></span></a>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-1"> 
                                            <form method="post" action="<?php echo e(route('settings.resumecvtemplate.clone', $item)); ?>" >
                                              <?php echo csrf_field(); ?>
                                              <button type="submit" class="badge badge-default border-0">
                                              <?php echo app('translator')->get('Clone'); ?>
                                              </button>
                                            </form>
                                        </div>
                                        <div class="p-1 ">
                                                <form method="post" action="<?php echo e(route('settings.resumecvtemplate.destroy', $item)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
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
        <?php if($data->count() == 0): ?>
            <div class="alert alert-primary text-center">
                <i class="fe fe-alert-triangle mr-2"></i> <?php echo app('translator')->get('No Templates found'); ?>
            </div>
        <?php endif; ?>

    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecvtemplates/index.blade.php ENDPATH**/ ?>