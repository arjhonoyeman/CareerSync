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
                                <h3><strong><?php echo app('translator')->get('Discover now all best jobs on'); ?> <?php echo e(config('app.name')); ?></strong></h3>
                            </div>
                        </div>
                        <form id="form_search" action="javascript:void(0);">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input class="form-control" value="<?php echo e($q); ?>" placeholder="<?php echo app('translator')->get('Job title, position you want to apply for'); ?>" id="keyword" autocomplete="off">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" id="city" tabindex="-1" aria-hidden="true">
                                        <option value=""><?php echo app('translator')->get('All location'); ?></option>
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>" <?php echo e($filter_city_id == $city->id ? 'selected' : ''); ?>><?php echo e($city->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" id="category" tabindex="-1" aria-hidden="true">
                                        <option value=""><?php echo app('translator')->get('All Functional Area'); ?></option>
                                        <?php $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($functional_area->id); ?>" <?php echo e($filter_functional_area_id == $functional_area->id ? 'selected' : ''); ?>><?php echo e($functional_area->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-block"><i class="pe-7s-search"></i> <?php echo app('translator')->get('Find job'); ?></button>
                                </div>
                            </div>
                            <div id="form-search-advanced" class="mt-2">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <input class="form-control" type="number" id="salary_from" value="<?php echo e($filter_salary_from); ?>" placeholder="<?php echo app('translator')->get('Salary from'); ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input class="form-control" type="number" id="salary_to" value="<?php echo e($filter_salary_to); ?>" placeholder="<?php echo app('translator')->get('Salary to'); ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select class="form-control"  tabindex="-1" aria-hidden="true" id="job_type">
                                            <option value=""><?php echo app('translator')->get('All Job Type'); ?></option>
                                            <?php $__currentLoopData = $job_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($job_type->id); ?>" <?php echo e($filter_job_type_id == $job_type->id ? 'selected' : ''); ?>><?php echo e($job_type->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>     
                            <div class="row">
                                <div class="col-md-9">&nbsp;</div>
                                <div class="col-md-3">
                                    <div class="pull-right" id="show_advanced">
                                        <a href="#" id="btn-show-advanced-search">
                                            <i class="pe-7s-angle-down"></i><?php echo app('translator')->get('Search advanced'); ?>
                                        </a>
                                        <a href="#" id="btn-hidden-advanced-search">
                                            <i class="pe-7s-angle-up"></i><?php echo app('translator')->get('Hide search advanced'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>       
                        </form>
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
                <h5><strong><?php echo app('translator')->get('We found :num Matches for you', ['num' => $data->total()]); ?></strong></h5>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make('themes::default.includes.item_job_side', ['job' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="row justify-content-end my-5">
                            <div class="col-auto">
                                <?php echo e($data->appends( Request::all() )->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    var url_search_jobs = "<?php echo e(route('jobslist', ['q' => ':q'])); ?>";
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules\Themes\Providers/../Resources/views/default/jobs_list.blade.php ENDPATH**/ ?>