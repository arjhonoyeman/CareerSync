<?php $__env->startSection('title', __('Blogs')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('Blogs'); ?></h1>
  <div class="ml-auto d-sm-flex">
    <form method="get" action="" class="navbar-search mr-4">
        <div class="input-group">
            <input type="text" name="search" value="<?php echo e(\Request::get('search', '')); ?>" class="form-control bg-light border-0 small" placeholder="<?php echo app('translator')->get('Search blog'); ?>" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <a href="<?php echo e(route('settings.blogs.create')); ?>" class="btn btn-success">
      <i class="fas fa-plus"></i> <?php echo app('translator')->get('Create blog'); ?>
    </a>
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
                                <th><?php echo app('translator')->get('Category'); ?></th>
                                <th><?php echo app('translator')->get('Title'); ?></th>
                                <th><?php echo app('translator')->get('Thumb'); ?></th>
                                <th><?php echo app('translator')->get('Read times'); ?></th>
                                <th><?php echo app('translator')->get('Created at'); ?></th>
                                <th></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                               <td>
                                   <small><?php echo e($item->category->name); ?></small>
                               </td>
                               <td>
                                   <small><?php echo e($item->title); ?></small>
                               </td>
                               <td>
                                  <img src="<?php echo e($item->getThumbLink()); ?>" alt="<?php echo e($item->title); ?>" width="50" height="50" />
                               </td>
                               <td>
                                <small><?php echo e($item->time_read); ?></small>
                               </td>
                               <td>
                                <small><?php echo e($item->created_at); ?></small>
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
                                    <a href="<?php echo e(route('settings.blogs.edit', $item)); ?>" class="dropdown-item"><?php echo app('translator')->get('Edit'); ?></a>
                                    <form method="post" action="<?php echo e(route('settings.blogs.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
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
      <div class="error mx-auto mb-3"><i class="fas fa-briefcase"></i></div>
      <p class="lead text-gray-800"><?php echo app('translator')->get('No blog Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any blog"); ?>.</p>
      <a href="<?php echo e(route('settings.blogs.create')); ?>" class="btn btn-primary">
        <span class="text"><?php echo app('translator')->get('New blog'); ?></span>
      </a>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Blogs\Providers/../Resources/views/blogs/index.blade.php ENDPATH**/ ?>