


<?php $__env->startSection('title', __('Pages Website')); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Pages Website'); ?></h1>
    <a href="<?php echo e(route('settings.pagewebsites.create')); ?>" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> <?php echo app('translator')->get('Create'); ?></a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row mb-2">
          <div class="col-sm-12">
              <small><?php echo app('translator')->get('All the page links will be displayed in the footer menu of the website home page'); ?></small>
          </div>
        </div>
        <?php if($data->count() > 0): ?>
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo app('translator')->get('Title'); ?></th>
                                <th><?php echo app('translator')->get('Active'); ?></th>
                                <th><?php echo app('translator')->get('Date Created'); ?></th>
                                <th><?php echo app('translator')->get('Date Modified'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>

                                    <a href="<?php echo e(route('settings.pagewebsites.edit', $item->id)); ?>"><?php echo e($item->title); ?></a>
                                </td>
                                 <td>
                                    <?php if($item->is_active): ?>
                                        <span class="badge badge-success"><?php echo app('translator')->get('Active'); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-warning"><?php echo app('translator')->get('Not Active'); ?></span>
                                    <?php endif; ?>
                                    
                                </td>
                               <td>
                               
                                <div class="small text-muted">
                                        <?php echo e($item->created_at->format('M j, Y')); ?>

                                </div>
                                </td>
                                <td>
                                        <div class="small text-muted">
                                                <?php echo e($item->updated_at->format('M j, Y')); ?>

                                        </div>
                                </td>
                                
                                <td>
                                     <div class="d-flex">
                                        <div class="p-1 ">
                                             <a href="<?php echo e(route('settings.pagewebsites.edit', $item->id)); ?>" class="btn btn-sm btn-primary"><?php echo app('translator')->get('Edit'); ?></a>
                                        </div>
                                        <div class="p-1 ">
                                                <form method="post" action="<?php echo e(route('settings.pagewebsites.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger btn-clean">
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
            <i class="fe fe-alert-triangle mr-2"></i> <?php echo app('translator')->get('No page found'); ?>
        </div>
        <?php endif; ?>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\PagesWebsite\Providers/../Resources/views/pagewebsites/index.blade.php ENDPATH**/ ?>