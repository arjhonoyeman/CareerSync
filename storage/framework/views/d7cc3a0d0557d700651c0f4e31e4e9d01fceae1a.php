<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <section class="pt-4 pb-4">
      <div class="home-center">
          <div class="home-desc-center">
              <div class="container">
                  <div class="row mt-3">
                      <div class="col-md-12">
                          <div class="row mb-2">
                              <div class="col-md-12">
                                  <h3><strong><?php echo app('translator')->get('All blog'); ?></strong></h3>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="">
      <div class="container">
          <div class="row mb-4">
              <div class="col-md-12">
                  <div class="row mt-4 mb-4">
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-4 col-xs-12 col-sm-6">
                          <?php echo $__env->make('themes::default.includes.item_blog', ['blog' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="row my-5">
                      <div class="col-auto">
                          <?php echo e($data->appends( Request::all() )->links()); ?>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Themes\Providers/../Resources/views/default/blogs.blade.php ENDPATH**/ ?>