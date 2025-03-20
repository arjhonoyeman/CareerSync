<?php $__env->startSection('title', __('Manage Ads')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Manage Ads'); ?></h1>
</div>

<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.general.update', 'ads')); ?>" autocomplete="off">
            <?php echo csrf_field(); ?>

            <div class="card">
                    <div class="card-status bg-blue"></div>
                    <div class="card-header">
                            <h4 class="card-title"><?php echo app('translator')->get('Manage Ads'); ?></h4>
                        </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Home Page Below Job Search'); ?></label>
                                <textarea class="form-control" name="ads_home_page_below_jobs_search" rows="6" placeholder="<?php echo app('translator')->get('Add your script Google ads, tag <img> banner or any vendor ads..'); ?>"><?php echo e(config('app.ads_home_page_below_jobs_search')); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Footer Layout Of Themes'); ?></label>
                                <textarea class="form-control"name="ads_footer_layout_themes" rows="6" placeholder="<?php echo app('translator')->get('Add your script Google ads, tag <img> banner or any vendor ads..'); ?>"><?php echo e(config('app.ads_footer_layout_themes')); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fe fe-save mr-2"></i> <?php echo app('translator')->get('Save settings'); ?>
                    </button>
                </div>
            </div>

        </form>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Settings\Providers/../Resources/views/settings/ads.blade.php ENDPATH**/ ?>