<?php $__env->startSection('title', $translates['Names']); ?>
<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
      <div>
        <a href="<?php echo e(route('settings.job.attributes.' . $attr_route . '.create')); ?>" class="btn btn-primary"><?php echo e($translates['title_create']); ?></a>
      </div>
      <form method="get" action="" class="my-3 my-lg-0 navbar-search">
          <div class="input-group">
              <input type="text" name="search" value="<?php echo e(\Request::get('search', '')); ?>" class="form-control bg-light border-0 small" placeholder="<?php echo app('translator')->get('Search'); ?>" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                      <i class="fas fa-search fa-sm"></i>
                  </button>
              </div>
          </div>
      </form>
  </div>

<div class="row">
    <div class="col-md-12">
        <?php if($paginationData->count() > 0): ?>
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo e($translates['Name']); ?></th>
                                <th><?php echo app('translator')->get('Default'); ?></th>
                                <th><?php echo app('translator')->get('Active'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $paginationData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->name); ?></td>
                                <td>
                                    <?php if($item->is_default): ?>
                                        <span class="small text-success"><i class="fas fa-check-circle text-success"></i></span>
                                    <?php else: ?>
                                        <span class="small text-dander"><i class="fas fa-times-circle"></i></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($item->is_active): ?>
                                        <span class="small text-success"><i class="fas fa-check-circle text-success"></i></span>
                                    <?php else: ?>
                                        <span class="small text-dander"><i class="fas fa-times-circle"></i></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('settings.job.attributes.' . $attr_route . '.edit', ['id' => $item->id])); ?>" class="btn btn-primary"><?php echo app('translator')->get('Edit'); ?></a>
                                    <form class="d-inline-block form-delete" action="<?php echo e(route('settings.job.attributes.' . $attr_route . '.destroy', ['id' => $item->id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-delete"><?php echo app('translator')->get('Delete'); ?></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
        <div class="mt-4">
            <?php echo e($paginationData->appends( Request::all() )->links()); ?>

        </div>
        
        <?php if($paginationData->count() == 0): ?>
        <div class="alert alert-primary text-center">
            <i class="fe fe-alert-triangle mr-2"></i> <?php echo app('translator')->get('No results'); ?>
        </div>
        <?php endif; ?>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Jobs\Providers/../Resources/views/job_attributes/index.blade.php ENDPATH**/ ?>