<?php $__env->startSection('title', __('Contacts')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
  <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('Contacts'); ?></h1>
  <div class="ml-auto d-sm-flex">
    <form method="get" action="" class="navbar-search mr-4">
        <div class="input-group">
            <input type="text" name="search" value="<?php echo e(\Request::get('search', '')); ?>" class="form-control bg-light border-0 small" placeholder="<?php echo app('translator')->get('Search contact'); ?>" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
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
                                <th><?php echo app('translator')->get('Fullname'); ?></th>
                                <th><?php echo app('translator')->get('Info'); ?></th>
                                <th><?php echo app('translator')->get('Subject'); ?></th>
                                <th><?php echo app('translator')->get('Created at'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <small>
                                      <?php if($item->is_readed): ?>
                                        <?php echo e($item->fullname); ?>

                                      <?php else: ?> 
                                        <strong><?php echo e($item->fullname); ?></strong>
                                      <?php endif; ?>
                                    </small>
                                </td>
                                <td>
                                  <small><label><?php echo app('translator')->get('Phone'); ?></label> <a href="tel:<?php echo e($item->phone); ?>"><?php echo e($item->phone); ?></a></small><br />
                                  <small><label><?php echo app('translator')->get('Email'); ?></label> <a href="mailto:<?php echo e($item->email); ?>"><?php echo e($item->email); ?></a></small>
                                </td>
                                <td>
                                    <small><?php echo e($item->subject); ?></small><br />
                                    <small><a href="javascript:void(0);" class="btn-show-content" data-id="<?php echo e($item->id); ?>" data-subject="<?php echo e($item->subject); ?>" data-content="<?php echo e($item->content); ?>" data-readed="<?php echo e($item->is_readed ? '1' : '0'); ?>"><?php echo app('translator')->get('View content...'); ?></a></small>
                                </td>
                                <td>
                                  <small><?php echo e($item->created_at); ?></small>
                                </td>
                                <td>
                                  <div class="btn-group">
                                    <form method="post" action="<?php echo e(route('settings.contacts.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('Delete'); ?></button>
                                    </form>
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
      <p class="lead text-gray-800"><?php echo app('translator')->get('No contact Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any contact"); ?>.</p>
    </div>
    <?php endif; ?>
  </div>
</div>

<div id="modalContent" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <script>
    const URL_POST_READED_AJAX = "<?php echo e(route('settings.contacts.ajaxreaded')); ?>";
    const CSRF_TOKEN = "<?php echo e(csrf_token()); ?>";
  </script>
  <script src="<?php echo e(Module::asset('contacts:js/contacts.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Contacts\Providers/../Resources/views/contacts/index.blade.php ENDPATH**/ ?>