<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- START PRICING -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4"><?php echo e($page->title); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-4">
                <?php echo $page->description; ?>

            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Themes\Providers/../Resources/views/default/page.blade.php ENDPATH**/ ?>