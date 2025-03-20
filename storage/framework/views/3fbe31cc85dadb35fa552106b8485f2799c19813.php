<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="job-header bg-light">
    <div class="container">
        <div class="clearfix">
            <div class="company-img">
                <a href="<?php echo e(route('company', ['slug' => $job->company->slug])); ?>">
                    <img width="100" height="100" src="<?php echo e($job->company->getLogoLink()); ?>" alt="<?php echo e($job->company->company_name); ?>"> 
                </a>
            </div>
            <div class="job-info-detail">
                <div class="title-wrapper">
                    <h1 class="job-title"><?php echo e($job->title); ?></h1>
                </div>
                <div class="job-metas">
                    <div class="category-job">
                        <div class="job-category with-icon">
                            <i class="pe-7s-id"></i>
                            <a href="<?php echo e(route('jobslist', ['functionalarea' => $job->functional_area->id])); ?>" style=""><?php echo e($job->functional_area->name); ?></a>
                        </div>
                    </div>
                    <?php if(isset($job->city)): ?>
                    <div class="job-location">
                        <i class="pe-7s-map-marker"></i>
                        <a href="<?php echo e(route('jobslist', ['city' => $job->city->id])); ?>"><?php echo e($job->city->name); ?></a>
                    </div>
                    <?php endif; ?>
                    <div class="job-deadline"><i class="pe-7s-date"></i> <?php echo e(\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()); ?></div>
                    <?php if(isset($job->salary_from, $job->salary_to)): ?>
                    <div class="job-salary"><i class="pe-7s-cash"></i> <span class="price-text"><?php echo e($job->salary_from); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span> - <span class="price-text"><?php echo e($job->salary_to); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span></span>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="job-metas-bottom">
                    <div class="job-type title-box">
                        <h6 class="title-sub-title mb-0 text-primary"><?php echo e($job->job_type->name); ?></h6>
                        <?php if($job->is_featured): ?>
                        <h6 class="title-sub-title job-featured"><?php echo app('translator')->get('Featured'); ?></h6>
                        <?php endif; ?>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="job-buttons">
            <div class="action">
                <?php if(isset($job->expiry_date)): ?>
                <div class="deadline"><?php echo app('translator')->get('Application ends'); ?>: <strong><?php echo e(\Carbon\Carbon::parse($job->expiry_date)->toFormattedDateString()); ?></strong></div>
                <?php endif; ?>
                <a href="#" data-toggle="modal" data-target="#applyModal" class="btn btn-primary"><?php echo app('translator')->get('Apply Now'); ?></a>
            </div>
        </div>
        <div class="social-job-detail">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('job',$job->slug )); ?>" target="_blank"><i class="mdi mdi-facebook"></i></a>
            <a href="https://twitter.com/share?url=<?php echo e(route('job',$job->slug )); ?>" target="_blank"><i class="mdi mdi-twitter"></i></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e(route('job',$job->slug )); ?>" target="_blank"><i class="mdi mdi-linkedin"></i></a>
        </div>
    </div>
</div>
<div class="job-content container">
    <div class="job-content-detail">
        <!-- Main content -->
        <div class="list-job">

            <!-- overview -->
            <div class="job-detail-more">
                <h3 class="title"><?php echo app('translator')->get('Job Overview'); ?></h3>
                <ul class="list">
                    <li>
                        <div class="icon">
                            <i class="pe-7s-date"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Date Posted'); ?></div>
                            <div class="value"><?php echo e(\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()); ?></div>
                        </div>
                    </li>

                    <li>
                        <div class="icon">
                            <i class="pe-7s-map-marker"></i>
                        </div>
                        <?php if(isset($job->city)): ?>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Location'); ?></div>
                            <div class="value">
                                <div class="">
                                    <a href="<?php echo e(route('jobslist', ['city' => $job->city->id])); ?>"><?php echo e($job->city->name); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </li>

                    <li>
                        <div class="icon">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Offered Salary'); ?></div>
                            <div class="job-salary value"><i class="pe-7s-cash"></i> 
                                <span class="price-text"><?php echo e($job->salary_from); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span> - <span class="price-text"><?php echo e($job->salary_to); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span></span> / <?php echo e($job->job_salary_period->name); ?>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="icon">
                            <i class="pe-7s-date"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Expiration date'); ?></div>
                            <div class="value"><?php echo e(\Carbon\Carbon::parse($job->expiry_date)->toFormattedDateString()); ?></div>
                        </div>
                    </li>

                    <?php if(isset($job->job_experience)): ?>
                    <li>
                        <div class="icon">
                            <i class="pe-7s-user"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Experience'); ?></div>
                            <div class="value">
                                <?php echo e($job->job_experience->name); ?>

                            </div>
                        </div>
                    </li>
                    <?php endif; ?>

                    <?php if(isset($job->gender)): ?>
                    <li>
                        <div class="icon">
                            <i class="pe-7s-user-female"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Gender'); ?></div>
                            <div class="value">
                                <?php echo e($job->gender->name); ?>

                            </div>
                        </div>
                    </li>
                    <?php endif; ?>

                    <?php if(isset($job->degree_level)): ?>
                    <li>
                        <div class="icon">
                            <i class="pe-7s-wristwatch"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Qualification'); ?></div>
                            <div class="value"><?php echo e($job->degree_level->name); ?></div>
                        </div>
                    </li>
                    <?php endif; ?>

                    <?php if(isset($job->career_level)): ?>
                    <li>
                        <div class="icon">
                            <i class="pe-7s-id"></i>
                        </div>
                        <div class="details">
                            <div class="text"><?php echo app('translator')->get('Career Level'); ?></div>
                            <div class="value"><?php echo e($job->career_level->name); ?></div>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- job description -->
            <div class="job-detail-description">
                <h3 class="title"><?php echo app('translator')->get('Job Description'); ?></h3>
                <div>
                    <?php echo $job->description; ?>

                </div>
                <h3 class="title"><?php echo app('translator')->get('Key Responsibilities'); ?></h3>
                <?php echo $job->responbilities; ?>

                <h3 class="title"><?php echo app('translator')->get('Skills, Experiences'); ?></h3>
                <?php echo $job->requirements; ?>


            </div>

            <!-- job releated -->
            <div class="releated-jobs">
                <h3 class="title"><?php echo app('translator')->get('Related Jobs'); ?></h3>
                <div class="row">
                    <div class="col-md-12">
                        <?php $__currentLoopData = $siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('themes::default.includes.item_job_side', ['job' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('Apply'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="" action="<?php echo e(route('company.apply')); ?>" enctype="multipart/form-data" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <?php 
                        $tmp_user = \Auth::getUser();
                    ?>
                    <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>" />
                    <input type="hidden" name="company_id" value="<?php echo e($job->company_id); ?>" />
                    <div class="form-group">
                        <label class="col-form-label"><?php echo app('translator')->get('Full name'); ?>:</label>
                        <input type="text" class="form-control" placeholder="" name="fullname" value="<?php echo e(old('fullname', isset($tmp_user) ? $tmp_user->name : '' )); ?>" required />
                        <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo app('translator')->get('Email'); ?>:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo e(old('email', isset($tmp_user) ? $tmp_user->email : '' )); ?>" required />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo app('translator')->get('Description'); ?>:</label>
                        <textarea class="form-control" placeholder="<?php echo app('translator')->get('Description for employer'); ?>" name="description" rows="3"><?php echo e(old('description', '' )); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo app('translator')->get('ResumeCV Link'); ?>:</label>
                        <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('Your resume link public'); ?>" name="resume_link" value="<?php echo e(old('resume_link', '')); ?>" />
                        <small><a href="<?php echo e(route('templates')); ?>" class="text-info"><?php echo app('translator')->get("If you don't have a resume you can create one for FREE here"); ?>.</a></small>
                        <?php $__errorArgs = ['resume_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <br><small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo app('translator')->get('Or ResumeCV PDF'); ?>:</label>
                        <input name="resume_pdf" class="form-control" type="file" accept="application/pdf" />
                        <?php $__errorArgs = ['resume_pdf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                   
               
                    <?php if(Auth::check()): ?>
                    <button type="submit" class="btn btn-primary btn-sm" ><?php echo app('translator')->get('Apply'); ?></button>
<?php else: ?>
    <p>You are not logged in.</p>
<?php endif; ?>
               
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php if($errors->has('fullname') || $errors->has('email') || $errors->has('description') || $errors->has('resume_link') || $errors->has('resume_pdf')): ?> 
<script>
    $('#applyModal').modal();
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Themes\Providers/../Resources/views/default/job_details.blade.php ENDPATH**/ ?>