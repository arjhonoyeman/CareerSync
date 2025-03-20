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
                                <h3><strong><?php echo app('translator')->get('Discover now all company on'); ?> <?php echo e(config('app.name')); ?></strong></h3>
                            </div>
                        </div>
                        <form id="form_companies_search" action="javascript:void(0);">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input class="form-control" value="" placeholder="<?php echo app('translator')->get('Company title, keywords...'); ?>" id="keyword" autocomplete="off">
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
                                    <select class="form-control" id="industry" tabindex="-1" aria-hidden="true">
                                        <option value=""><?php echo app('translator')->get('All Industries'); ?></option>
                                        <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($industry->id); ?>" <?php echo e($filter_industry_id == $industry->id ? 'selected' : ''); ?>><?php echo e($industry->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-block"><i class="pe-7s-search"></i> <?php echo app('translator')->get('Find'); ?></button>
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
                     <div class="row mt-4 mb-4">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($item->user)): ?>
                            <div class="col-md-4 col-lg-3">
                                <?php echo $__env->make('themes::default.includes.item_company', ['company' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                     <div class="row justify-content-end my-5">
                            <div class="col-auto">
                                <?php echo e($data->appends( Request::all() )->links()); ?>

                            </div>
                        </div>
                 </div>
             </div>
         </div>
     </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    var url_search_companies = "<?php echo e(route('companies', ['q' => ':q'])); ?>";
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/companies_list.blade.php ENDPATH**/ ?>