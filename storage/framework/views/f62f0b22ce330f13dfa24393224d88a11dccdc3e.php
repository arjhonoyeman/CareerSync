<?php $__env->startSection('title', __('All Companies')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('All Companies'); ?></h1>
        <a href="<?php echo e(route('settings.companies.create')); ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> <?php echo app('translator')->get('Create company'); ?>
        </a>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if($data->count() > 0): ?>
            <div class="card">
                <div class="table-responsive">
                     <table class="table card-table table-vcenter text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo app('translator')->get('Logo'); ?></th>
                                <th><?php echo app('translator')->get('Company Info'); ?></th>
                                <th><?php echo app('translator')->get('Employer Info'); ?></th>
                                <th><?php echo app('translator')->get('Info'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                               <td>
                                 
                                   <img src="<?php echo e(URL::to('/')); ?>/storage/user_storage/<?php echo e($item->user_id. "/". $item->logo); ?>" width="50" height="50">
                               </td>
                               <td>
                                   <small><?php echo app('translator')->get('Name'); ?>: <?php echo e($item->company_name); ?></small><br>
                                   <small><?php echo app('translator')->get('Email'); ?>: <?php echo e($item->company_email); ?></small>
                               </td>
                               <td>
                                  <?php if(isset($employer)): ?>
                                   <small><?php echo app('translator')->get('Name'); ?>: <?php echo e($employer->name); ?></small><br>
                                   <small><?php echo app('translator')->get('Email'); ?>: <?php echo e($employer->email); ?></small>
                                  <?php endif; ?>
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
                                <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-h"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-top">
                                    <a href="<?php echo e(route('settings.companies.edit', $item)); ?>" class="dropdown-item"><?php echo app('translator')->get('Edit'); ?></a>
                                    <a href="<?php echo e(route('company',$item->slug)); ?>" class="dropdown-item"><?php echo app('translator')->get('Public Profile'); ?></a>
                                    <form method="post" action="<?php echo e(route('settings.companies.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="dropdown-item"><?php echo app('translator')->get('Delete'); ?></button>
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
      <div class="error mx-auto mb-3"><i class="fas fa-building"></i></div>
      <p class="lead text-gray-800"><?php echo app('translator')->get('No Companies Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any companies"); ?>.</p>
      <a href="<?php echo e(route('settings.companies.create')); ?>" class="btn btn-primary">
        <span class="text"><?php echo app('translator')->get('New Company'); ?></span>
      </a>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Jobs\Providers/../Resources/views/companies/index.blade.php ENDPATH**/ ?>