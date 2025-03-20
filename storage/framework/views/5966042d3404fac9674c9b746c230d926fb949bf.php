<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="employer-header bg-light">
    <div class="container">
        <div class="clearfix">
            <div class="flex-middle-sm row">
            <div class="company-img">
                <a href="javascript:void(0);">
                    <img width="100" height="100" src="<?php echo e($company->getLogoLink()); ?>">
                </a>
            </div>
            <div class="employer-info-detail">
                <div class="title-wrapper">
                    <h1 class="employer-title"><?php echo e($company->company_name); ?></h1>
                </div>
                <div class="employer-metas">
                    <?php if(isset($company->industry)): ?>
                    <div class="category-job">
                        <div class="employer-category with-icon">
                            <i class="pe-7s-id"></i>
                            <a href="<?php echo e(route('companies', ['industry' => $company->industry->id])); ?>" style=""><?php echo e($company->industry->name); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($company->city)): ?>
                    <div class="employer-location">
                        <i class="pe-7s-map-marker"></i>
                        <a href="<?php echo e(route('companies', ['city' => $company->city->id])); ?>"><?php echo e($company->city->name); ?></a>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($company->phone)): ?>
                    <div class="employer-deadline"><i class="pe-7s-headphones"></i> <?php echo e($company->phone); ?></div>
                    <?php endif; ?>
                    <?php if(isset($company->company_email)): ?>
                    <div class="employer-salary"><i class="pe-7s-mail"></i> <?php echo e($company->company_email); ?></div>
                    <?php endif; ?>
                </div>

                <div class="employer-metas-bottom">
                    <div class="employer-type title-box">
                        <h6 class="title-sub-title mb-0 text-primary"><?php echo app('translator')->get('Open Jobs'); ?> - <span><?php echo e($company->jobs()->active()->count()); ?></span></h6>
                        <?php if($company->is_featured): ?>
                            <h6 class="title-sub-title job-featured"><?php echo app('translator')->get('Featured'); ?></h6>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="employer-content container">
    <div class="row pt-5">
        <div class="col-xs-12 col-md-8 list-content-candidate">
            <div class="employer-detail-description">
                <h3 class="title"><?php echo app('translator')->get('About Company'); ?></h3>
                <div class="inner">
                    <?php echo $company->description; ?>

                </div>
            </div>
            <div class="social-job-detail">
                <span class="title"><?php echo app('translator')->get('Social Profiles'); ?>: </span>
                <?php if(isset($company->facebook)): ?>
                <a href="<?php echo e($company->facebook); ?>"><i class="mdi mdi-facebook"></i></a>
                <?php endif; ?>
                <?php if(isset($company->twitter)): ?>
                <a href="<?php echo e($company->twitter); ?>"><i class="mdi mdi-twitter"></i></a>
                <?php endif; ?>
                <?php if(isset($company->linkedin)): ?>
                <a href="<?php echo e($company->linkedin); ?>"><i class="mdi mdi-linkedin"></i></a>
                <?php endif; ?>
                <?php if(isset($company->youtube)): ?>
                <a href="<?php echo e($company->youtube); ?>"><i class="mdi mdi-youtube"></i></a>
                <?php endif; ?>
                <?php if(isset($company->instagram)): ?>
                <a href="<?php echo e($company->instagram); ?>"><i class="mdi mdi-instagram"></i></a>
                <?php endif; ?>
            </div>
            <div class="employer-detail-description">
                <h3 class="title"><?php echo app('translator')->get('Open Position'); ?></h3>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $jobs = $company->jobs()->active()->orderBy('is_featured', 'desc')->get();
                        ?>
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($job)): ?>
                                <?php echo $__env->make('themes::default.includes.item_job_side', ['job' => $job], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-xs-12 sidebar-job">
            <aside class="widget widget_apus_employer_info">
                <div class="job-detail-employer-info">
                    <div class="job-category">
                        <h3 class="title"><?php echo app('translator')->get('Categories'); ?>:</h3>
                        <div class="value">
                            <?php if(isset($company->industry)): ?>
                            <a class="category-employer" href="<?php echo e(route('companies', ['industry' => $company->industry->id])); ?>"><?php echo e($company->industry->name); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="employer-meta with-icon-title">
                        <h3 class="title">
                            <?php echo app('translator')->get('Founded Date'); ?>
                        </h3>
                        <div class="value">
                            <?php echo e($company->established_in); ?> 
                        </div>
                    </div>
                    <div class="employer-meta with-icon-title">
                        <h3 class="title">
                            <?php echo app('translator')->get('Company Size'); ?>:
                            
                        </h3>
                        <div class="value">
                            <?php echo e($company->no_of_employees); ?> 
                        </div>
                    </div>
                    <div class="employer-meta with-icon-title">
                        <h3 class="title">
                            <?php echo app('translator')->get('Offices Size'); ?>:
                            
                        </h3>
                        <div class="value">
                            <?php echo e($company->no_of_offices); ?> 
                        </div>
                    </div>
                    <?php if(isset($company->location)): ?>
                    <div class="employer-location">
                        <h3 class="title"><?php echo app('translator')->get('Address'); ?>:</h3>
                        <div class="value">
                            <a href="javascript:void(0);"><?php echo e($company->location); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($company->phone)): ?>
                    <div class="job-phone">
                        <h3 class="title"><?php echo app('translator')->get('Phone Number'); ?>:</h3>
                        <div class="value">
                            <div class="phone-wrapper phone-hide">
                                <a class="phone" href="tel:<?php echo e($company->phone); ?>"><?php echo e($company->phone); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($company->email)): ?>
                    <div class="job-email">
                        <h3 class="title"><?php echo app('translator')->get('Email'); ?>:</h3>
                        <div class="value">
                            <?php echo e($company->email); ?> </div>
                    </div>
                    <?php endif; ?>
                    <div class="social-employer">
                        <h3 class="title"><?php echo app('translator')->get('Socials'); ?></h3>
                        <div class="value">
                            <div class="apus-social-share">
                                <?php if(isset($company->facebook)): ?>
                                <a href="<?php echo e($company->facebook); ?>"><i class="mdi mdi-facebook"></i></a>
                                <?php endif; ?>
                                <?php if(isset($company->twitter)): ?>
                                <a href="<?php echo e($company->twitter); ?>"><i class="mdi mdi-twitter"></i></a>
                                <?php endif; ?>
                                <?php if(isset($company->linkedin)): ?>
                                <a href="<?php echo e($company->linkedin); ?>"><i class="mdi mdi-linkedin"></i></a>
                                <?php endif; ?>
                                <?php if(isset($company->youtube)): ?>
                                <a href="<?php echo e($company->youtube); ?>"><i class="mdi mdi-youtube"></i></a>
                                <?php endif; ?>
                                <?php if(isset($company->instagram)): ?>
                                <a href="<?php echo e($company->instagram); ?>"><i class="mdi mdi-instagram"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($company->website)): ?>
                    <div class="employer-website">
                        <a href="<?php echo e($company->website); ?>" class="btn btn-info btn-block"><?php echo e(getDomainFromURL($company->website)); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </aside>
            <?php if(isset($company->location)): ?>
            <aside class="widget widget_apus_employer_maps">
                <h2 class="widget-title"><span><?php echo app('translator')->get('Employer Location'); ?></span></h2>
                <div>
                    <iframe src="https://maps.google.it/maps?q=<?php echo e(urlencode(strip_tags($company->location))); ?>&output=embed" allowfullscreen frameBorder="0"></iframe>
                </div>
            </aside>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/company_detail.blade.php ENDPATH**/ ?>