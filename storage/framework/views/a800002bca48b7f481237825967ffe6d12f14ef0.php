<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="employer-header bg-light blog-detail-header">
    <div class="container">
        <div class="clearfix">
            <div class="text-center">
              <div class="employer-info-detail">
                  <div class="title-wrapper">
                      <h1 class="employer-title text-center"><?php echo e($blog->title); ?></h1>
                  </div>
                  <div class="employer-metas mt-3">
                      <div class="employer-location">
                          <a href="<?php echo e(route('blogs', ['category_id' => $blog->category->id])); ?>"><?php echo e($blog->category->name); ?></a>
                      </div>
                      <div class="employer-location">
                          <?php echo e(\Carbon\Carbon::parse($blog->created_at)->toFormattedDateString()); ?>

                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row pt-4">
        <div class="col-md-12">
           <div class="blog-content">
                    <?php echo $blog->content; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/blog.blade.php ENDPATH**/ ?>