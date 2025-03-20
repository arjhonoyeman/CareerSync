<?php $__env->startSection('title', __('All Jobs')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('All Jobs'); ?></h1>
        <div class="ml-auto d-sm-flex">
          <form method="get" action="" class="navbar-search mr-4">
              <div class="input-group">
                  <input type="text" name="search" value="<?php echo e(\Request::get('search', '')); ?>" class="form-control bg-light border-0 small" placeholder="<?php echo app('translator')->get('Search Job title..'); ?>" aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                          <i class="fas fa-search fa-sm"></i>
                      </button>
                  </div>
              </div>
          </form>
         <!-- <a href="<?php echo e(route('settings.jobs.create')); ?>" class="btn btn-success">
          <i class="fas fa-plus"></i> <?php echo app('translator')->get('Create job'); ?>
          </a> -->
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
                                <th><?php echo app('translator')->get('Company Info'); ?></th>
                                <th><?php echo app('translator')->get('Job Info'); ?></th>
                                <th><?php echo app('translator')->get('City'); ?></th>
                                <th><?php echo app('translator')->get('Info'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               <td>
                                   <small><?php echo app('translator')->get('Name'); ?>: <?php echo e($item->company->company_name); ?></small><br>
                                   <small><?php echo app('translator')->get('Email'); ?>: <?php echo e($item->company->company_email); ?></small>
                               </td>
                               <td>
                                <small><?php echo app('translator')->get('Job Tile'); ?>: <?php echo e($item->title); ?></small><br>
                                <small>
                                    <?php if(isset($item->functional_area->name)): ?>
                                        <?php echo e($item->functional_area->name); ?>

                                    <?php endif; ?>
                                </small>
                               </td>
                               <td>
                                <small>
                                <?php if(isset($item->city->name)): ?>
                                    <?php echo e($item->city->name); ?>

                                <?php endif; ?>
                                </small>
                               </td>

                               <td>
                                    <?php if($item->is_active): ?>
                                        <span class="small text-success"><i class="fas fa-check-circle"></i> <?php echo app('translator')->get('Active'); ?></span>
                                    <?php else: ?>
                                        <span class="small text-danger"><i class="fas fa-times-circle"></i> <?php echo app('translator')->get('No Active'); ?></span>
                                    <?php endif; ?>
                                    <br>
                                    <?php if($item->is_featured): ?>
                                        <span class="small text-primary"><i class="fas fa-check-circle"></i> <?php echo app('translator')->get('Featured'); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                     <div class="d-flex">
                                        <div class="p-1">
                                              <a href="<?php echo e(route('settings.jobs.edit', $item)); ?>"><span  class="badge badge-primary"><?php echo app('translator')->get('Edit'); ?></span></a>
                                        </div>
                                        <div class="p-1 ">
                                              <a href="<?php echo e(route('tracklink.show', ['target_class' => 'job', 'target_id' => $item->id])); ?>"></span></a>
                                        </div>
                                        <div class="p-1">
                                              <a href="<?php echo e(route('job',$item->slug)); ?>"><span  class="badge badge-primary"><i class="far fa-eye"></i> <?php echo app('translator')->get('Job public'); ?></span></a>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="p-1 ">
                                                <form method="post" action="<?php echo e(route('settings.jobs.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
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
      <div class="error mx-auto mb-3"><i class="fas fa-briefcase"></i></div>
      <p class="lead text-gray-800"><?php echo app('translator')->get('No Jobs Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any job"); ?>.</p>
      <a href="<?php echo e(route('settings.jobs.create')); ?>" class="btn btn-primary">
        <span class="text"><?php echo app('translator')->get('New Job'); ?></span>
      </a>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/jobs/index.blade.php ENDPATH**/ ?>