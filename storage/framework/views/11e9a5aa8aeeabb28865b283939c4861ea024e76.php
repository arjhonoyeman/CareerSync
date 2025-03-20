<?php $__env->startSection('title', __('Templates')); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="section-sm" id="pricing">
        <div class="container">
<div class="row">
  <div class="col-12 text-center">
      <h3 class=""><?php echo app('translator')->get('Choose a template for your Resumecv'); ?></h3>
  </div>
</div>

<div class="row mt-4">
  <div class="col-sm-8">
      <?php
        $route_id = request()->route('id');
      ?>
      <a href="<?php echo e(url('templates')); ?>" class="btn <?php if(empty($route_id)): ?> btn-secondary <?php else: ?> btn-light <?php endif; ?> btn-sm"><?php echo app('translator')->get("All Templates"); ?></a>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="btn-group" role="group">
            <a class="btn <?php if($route_id == $category->id): ?> btn-secondary <?php else: ?> btn-light <?php endif; ?> btn-sm" href="<?php echo e(url('templates/'). '/' .$category->id); ?>"><?php echo e($category->name); ?></a>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php if($data->count() > 0): ?>

<div class="row row_blog_responsive pt-4 clearfix">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 itembb">
          <div class="clearfix blog-bottom blog blogitemlarge">
              <a href="#" data-id="<?php echo e($item->id); ?>" data-toggle="modal" data-target="#createModal" title="<?php echo e($item->name); ?>" class="btn_builder_template image-blog date clearfix">
                  <img src="<?php echo e(URL::to('/')); ?>/storage/thumb_templates/<?php echo e($item->thumb); ?>" alt="<?php echo e($item->name); ?>" data-was-processed="true" class="" />
                  <?php if($item->is_premium): ?>
                        <span class="post-date badge badge-danger"><i class="fas fa-star"></i> <?php echo app('translator')->get("Premium"); ?></span>
                  <?php else: ?>
                        <span class="post-date badge badge-success"><i class="fas fa-star"></i> <?php echo app('translator')->get("Free"); ?></span>
                  <?php endif; ?>
              </a>
              <div class="content_blog clearfixflex flex-column flex-lg-row">
                  <div class="p-1">
                    <?php echo e($item->name); ?>

                  </div>
                  <div class="d-flex pt-1">
                      <a href="#" class="btn btn-sm btn-primary mr-2 btn_builder_template" data-id="<?php echo e($item->id); ?>" data-toggle="modal" data-target="#createModal"><?php echo app('translator')->get("Builder"); ?></a>
                  </div>
              </div>
          </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row mt-2 ml-1">
    <?php echo e($data->appends( Request::all() )->links()); ?>

</div>

<?php else: ?>
<div class="row mt-4">
  <div class="col-lg-12">
        <div class="text-center">
              <div class="error mx-auto mb-3"><i class="far fa-window-maximize"></i></div>
              <p class="lead text-gray-800"><?php echo app('translator')->get('No Template found'); ?></p>
            </div>
  </div>
</div>
<?php endif; ?>

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('New Resumecv'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="" action="<?php echo e(route('resumecv.save')); ?>" method="post" enctype='multipart/form-data'>
          <?php echo csrf_field(); ?>
      <div class="modal-body">
          <div class="form-group">
            <input type="number" class="form-control" name="template_id" hidden="" required="" id="template_id_builder">
            <label for="name" class="col-form-label"><?php echo app('translator')->get('Name'); ?>:</label>
            <input type="text" class="form-control" name="name" required="" id="page-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
        <button type="submit" class="btn btn-primary btn-sm" id="saveandbuilder"><?php echo app('translator')->get('Save & Builder'); ?></button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(Module::asset('resumecv:js/templates.js')); ?>"></script>
<?php $__env->stopPush(); ?>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Themes\Providers/../Resources/views/default/templates.blade.php ENDPATH**/ ?>