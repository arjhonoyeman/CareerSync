<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- END HOME -->
    <section class="bg-home" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1 class="home-title"><?php echo app('translator')->get('Find a job with'); ?> <?php echo e(config('app.name')); ?></h1>

                                <p class="text-primary mt-3 f-20"><?php echo app('translator')->get('OWN A GOOD Resume-CV AND DREAM JOB'); ?></p>
                                <p><?php echo app('translator')->get('100+ job opportunities are successfully connected every day'); ?></p>
                                <div class="mt-3">
                                    <a href="<?php echo e(route('templates')); ?>" class="btn btn-primary"><?php echo app('translator')->get('Create Resume Online'); ?></a>
                                    <a href="<?php echo e(route('jobslist')); ?>" class="btn btn-primary"><?php echo app('translator')->get('Find Jobs'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="mt-2">
                                <img src="<?php echo e(asset('img/ohh.png')); ?>" width="400" class="img-fluid">
                            </div>
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <h5><strong><?php echo app('translator')->get('Discover now 100+ best jobs on'); ?> <?php echo e(config('app.name')); ?></strong></h5>
                                </div>
                            </div>
                            <form id="form_search_home_page" action="javascript:void(0);">
                                <div class="row">
                                    
                                        <div class="form-group col-md-4">
                                            <input class="form-control" value="" placeholder="<?php echo app('translator')->get('Job title, position you want to apply for'); ?>" id="keyword" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="form-control" id="city"  tabindex="-1" aria-hidden="true">
                                                <option value=""><?php echo app('translator')->get('All location'); ?></option>
                                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="form-control" id="category"  tabindex="-1" aria-hidden="true">
                                                <option value=""><?php echo app('translator')->get('All Functional Area'); ?></option>
                                                <?php $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($functional_area->id); ?>"><?php echo e($functional_area->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group col-button">
                                            <button class="btn btn-primary"><i class="pe-7s-search"></i> <?php echo app('translator')->get('Find job'); ?></button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <?php if(config('app.ads_home_page_below_jobs_search')): ?>
     <section class="mb-4">
         <div class="container">
             <div class="row">
                 <div class="ads-home-page">
                    <?php echo config('app.ads_home_page_below_jobs_search'); ?>

                 </div>
             </div>
         </div>
     </section>
     <?php endif; ?>
   
    <!-- END HOME -->

    <?php if(isset($companies)): ?>
    <!-- START Featured Companies -->
    <section class="section pt-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="mb-0"><?php echo app('translator')->get('Featured Companies'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel">
                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="employer-card">
                                    <a href="<?php echo e(route('company', ['slug' => $company->slug])); ?>" title="Company name">
                                        <img src="<?php echo e(URL::to('/')); ?>/storage/user_storage/<?php echo e($company->user_id. "/". $company->logo); ?>" alt="Connect People" title="Connect People"></a>         
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Featured Companies -->
    <?php endif; ?>
    <!-- START Featured Jobs -->
     <section class="section pt-5">
         <div class="container">
             <div class="row mb-4">
                 <div class="col-lg-12">
                     <div class="text-center">
                         <h2 class="mb-0"><?php echo app('translator')->get('Featured Jobs'); ?></h2>
                     </div>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-md-12">
                     <div class="row">
                         
                            <?php $__currentLoopData = $featuredJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <?php echo $__env->make('themes::default.includes.item_job_side', ['job' => $job], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                     </div>
                 </div>
             </div>
            
             <div class="btn-homepage-center"><a href="<?php echo e(route('jobslist', ['featured' => '1'])); ?>" class="btn btn-primary"><?php echo app('translator')->get('View All Featured Jobs'); ?></a></div>
         </div>
     </section>
    <!-- END Featured Jobs -->

    <!-- START HOW IT WORK -->
    <section class="section pt-5 bg-light" id="how-it-work">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="mb-0"><?php echo app('translator')->get('How Create Resume-CV Online'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="<?php echo e(Module::asset('themes:default/images/arrow-1.png')); ?>" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">1</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-file"></i>
                        </div>
                        <h5 class="mt-4"><?php echo app('translator')->get('Select a template'); ?></h5>
                        <p class="text-muted mt-3">
                           <?php echo app('translator')->get('Choose from a selection of recruiter-approved layout designs for different job types'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="<?php echo e(Module::asset('themes:default/images/arrow-2.png')); ?>" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">2</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-pen"></i>
                        </div>
                        <h5 class="mt-4"><?php echo app('translator')->get('Optimize Your Content'); ?></h5>
                        <p class="text-muted mt-3">
                            <?php echo app('translator')->get('And adding or removing a specific section based on your needs is no problem and you get layout and content suggestions so that your resume looks perfect'); ?>
                        </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="work-count">
                            <p class="mb-0">3</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-user"></i>
                        </div>
                        <h5 class="mt-4"><?php echo app('translator')->get('Publish or Download PDF'); ?></h5>
                        <p class="text-muted mt-3">
                            <?php echo app('translator')->get('Once your content is finished, you can publish link or dowwnload PDF. Your latest version is saved and you can always go back to make edits.'); ?>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END HOW IT WORK -->
    <!-- START Latest Jobs -->
     <section class="section pt-5">
         <div class="container">
             <div class="row mb-4">
                 <div class="col-lg-12">
                     <div class="text-center">
                         <h2 class="mb-0"><?php echo app('translator')->get('Latest Jobs'); ?></h2>
                     </div>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-md-12">
                     <div class="row">
                        <?php $__currentLoopData = $lastestJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="col-md-6">
                            <?php echo $__env->make('themes::default.includes.item_job_side', ['job' => $job], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                 </div>
             </div>
             <div class="btn-homepage-center"><a href="<?php echo e(route('jobslist', ['lastest' => '1'])); ?>" class="btn btn-primary"><?php echo app('translator')->get('View All Latest Jobs'); ?></a></div>
         </div>
     </section>
  
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    var url_search_home_page = "<?php echo e(route('jobslist', ['q' => ':q'])); ?>";
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules\Themes\Providers/../Resources/views/default/home.blade.php ENDPATH**/ ?>