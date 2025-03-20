<?php $__env->startSection('title', __('All Applicants')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-4 text-gray-800"><?php echo app('translator')->get('All Applicants'); ?></h1>
        <div class="ml-auto d-sm-flex">
          <form method="get" action="" class="navbar-search mr-4">
              <div class="input-group">
                  <input type="text" name="search" value="<?php echo e(\Request::get('search', '')); ?>" class="form-control bg-light border-0 small" placeholder="<?php echo app('translator')->get('Search full name..'); ?>" aria-label="Search" aria-describedby="basic-addon2">
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
                     <table class="table card-table table-vcenter">
                        <thead class="thead-dark">
                            <tr>
                                <th><?php echo app('translator')->get('Job Info'); ?></th>
                                <th><?php echo app('translator')->get('Company Info'); ?></th>
                                <th><?php echo app('translator')->get('Applicants Info'); ?></th>
                                <th><?php echo app('translator')->get('Description'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              
                               <td>
                                <?php if(isset($item->job)): ?>
                                <small><?php echo app('translator')->get('Job Tile'); ?>: 
                                  <a href="<?php echo e(route('settings.jobs.edit', ['job' => $item->id])); ?>" class="text-dark">
                                    <strong><?php echo e($item->job->title); ?></strong>
                                  </a>
                                </small>
                                <?php endif; ?>
                               </td>
                               <td>
                                  <?php if(isset($item->job->company)): ?>
                                   <small><?php echo app('translator')->get('Name'); ?>: <a href="<?php echo e(route('settings.companies.edit', ['company' => $item->job->company])); ?>" class="text-dark">
                                    <strong><?php echo e($item->job->company->company_name); ?></strong>
                                    </a>
                                   </small><br>
                                   <small><?php echo app('translator')->get('Email'); ?>: <strong><?php echo e($item->job->company->company_email); ?></strong></small>
                                   <?php endif; ?>
                               </td>
                               <td>
                                 <small><?php echo app('translator')->get('Full name'); ?>: <strong><?php echo e($item->fullname); ?></strong></small><br>
                                 <small><?php echo app('translator')->get('Email'); ?>: <strong><?php echo e($item->email); ?></strong></small>
                               </td>

                               <td class="td_description">
                               <small><?php echo e($item->description); ?></small>
                              </td>
                              
                                <td>
                                  <div class="d-flex">
                                        <div class="p-1"> 
                                          <?php if($item->resume_link): ?>
                                            <a href="<?php echo e($item->resume_link); ?>">
                                              <span class="badge badge-success"><?php echo app('translator')->get('View Resume'); ?></span>
                                            </a>
                                          <?php elseif($item->resume_pdf): ?>
                                            <a href="<?php echo e(URL::to('/')); ?>/storage/resume_cvs_apply/<?php echo e($item->resume_pdf); ?>">
                                              <span class="badge badge-info"><?php echo app('translator')->get('View Resume'); ?></span>
                                            </a>
                                          <?php endif; ?>
                                        </div>
                                        <div class="p-1"> 
                                          <form method="post" action="<?php echo e(route('settings.jobs.applicants.destroy', $item->id)); ?>" onsubmit="return confirm('<?php echo app('translator')->get('Confirm delete?'); ?>');">
                                              <?php echo csrf_field(); ?>
                                              <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="badge badge-danger border-0"><?php echo app('translator')->get('Delete'); ?></button>
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
      <div class="error mx-auto mb-3"><i class="fas fa-bullhorn"></i></div>
      <p class="lead text-gray-800"><?php echo app('translator')->get('No Applicants Found'); ?></p>
      <p class="text-gray-500"><?php echo app('translator')->get("You don't have any applicants. Please share your jobs for candidates"); ?>.</p>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Jobs\Providers/../Resources/views/applicants/index.blade.php ENDPATH**/ ?>