<?php $__env->startSection('title', __('Edit Job')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Edit Job'); ?></h1>
    <div class="ml-auto">
        <a href="<?php echo e(route('tracklink.show', ['target_class' => 'job', 'target_id' => $job->id])); ?>" class="btn btn-dark"><i class="fas fa-chart-pie"></i> <?php echo app('translator')->get('Statistics'); ?></a>
        <a href="<?php echo e(route('job',$job->slug)); ?>" class="btn btn-primary"><i class="far fa-eye"></i> <?php echo app('translator')->get('Job public'); ?></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.jobs.update', $job)); ?>">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Company'); ?></label>
                                <select name="company_id" class="form-control" required="">
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($company->id); ?>" <?php echo e($job->company_id == $company->id ? 'selected' : ''); ?>><?php echo e($company->company_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Title'); ?></label>
                                <input type="text" name="title" class="form-control" value="<?php echo e($job->title); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('City'); ?></label>
                                <select name="city_id" class="form-control" required>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e($job->city_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Active'); ?></div>
                                <label class="custom-switch">
                                    <?php if($job->is_active): ?>
                                        <input type="checkbox" name="is_active"  value="1" class="custom-switch-input" checked>
                                    <?php else: ?> 
                                        <input type="checkbox" name="is_active" class="custom-switch-input" >
                                    <?php endif; ?>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Yes'); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Job featured'); ?></div>
                                <label class="custom-switch">
                                    <?php if($job->is_featured): ?>
                                        <input type="checkbox" name="is_featured"  value="1" class="custom-switch-input" checked>
                                    <?php else: ?> 
                                        <input type="checkbox" name="is_featured" class="custom-switch-input" >
                                    <?php endif; ?>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Enable Job featured'); ?></span>
                                    <br><small class="text-primary">(<?php echo app('translator')->get('With job featured your job will be a prominent badge, show up on website homepage, suggestions for candidates...'); ?>)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Description'); ?></label>
                                 <textarea name="description" id="description" rows="3" class="form-control"><?php echo e($job->description); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Responbilities'); ?></label>
                                 <textarea name="responbilities" id="responbilities" rows="3" class="form-control"><?php echo e($job->responbilities); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Requirements'); ?></label>
                                 <textarea name="requirements" id="requirements" rows="3" class="form-control"><?php echo e($job->requirements); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Salary period'); ?></label>
                                <select name="salary_period_id" class="form-control" required="">
                                    <?php $__currentLoopData = $salaryPeriods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salaryPeriod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($salaryPeriod->id); ?>" <?php echo e($job->salary_period_id == $salaryPeriod->id ? 'selected' : ''); ?>><?php echo e($salaryPeriod->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Salary from'); ?></label>
                                <input type="number" min="0" step="1" name="salary_from" class="form-control" value="<?php echo e($job->salary_from); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Salary to'); ?></label>
                                <input type="number" min="0" step="1" name="salary_to" class="form-control" value="<?php echo e($job->salary_to); ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Salary Currency'); ?></label>
                                <select name="salary_currency" class="form-control" required="">
                                    <?php $__currentLoopData = getCurencies(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item); ?>"  <?php echo e($item == $job->salary_currency ? 'selected' : ''); ?>><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Career level'); ?></label>
                                <select name="career_level_id" class="form-control" required="">
                                    <?php $__currentLoopData = $careerLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $careerLevel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($careerLevel->id); ?>" <?php echo e($job->career_level_id == $careerLevel->id ? 'selected' : ''); ?>><?php echo e($careerLevel->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Functional Area'); ?></label>
                                <select name="functional_area_id" class="form-control" required="">
                                    <?php $__currentLoopData = $functionalAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functionalArea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($functionalArea->id); ?>" <?php echo e($job->functional_area_id == $functionalArea->id ? 'selected' : ''); ?>><?php echo e($functionalArea->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Gender'); ?></label>
                                <select name="gender_id" class="form-control" required="">
                                    <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($gender->id); ?>" <?php echo e($job->gender_id == $gender->id ? 'selected' : ''); ?>><?php echo e($gender->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Job type'); ?></label>
                                <select name="job_type_id" class="form-control" required="">
                                    <?php $__currentLoopData = $jobTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($jobType->id); ?>" <?php echo e($job->job_type_id == $jobType->id ? 'selected' : ''); ?>><?php echo e($jobType->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Job shift'); ?></label>
                                <select name="job_shift_id" class="form-control" required="">
                                    <?php $__currentLoopData = $jobShifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobShift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($jobShift->id); ?>" <?php echo e($job->job_shift_id == $jobShift->id ? 'selected' : ''); ?>><?php echo e($jobShift->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Expiry date'); ?></label>
                                <div class="input-group date" id="expiry_date" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" name="expiry_date" value="<?php echo e($job->expiry_date); ?>" data-target="#expiry_date" />
                                    <div class="input-group-append" data-target="#expiry_date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Require degree level'); ?></label>
                                <select name="degree_level_id" class="form-control" required="">
                                    <?php $__currentLoopData = $degreeLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $degreeLevel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($degreeLevel->id); ?>" <?php echo e($job->degree_level_id == $degreeLevel->id ? 'selected' : ''); ?>><?php echo e($degreeLevel->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Require job experience'); ?></label>
                                <select name="job_experience_id" class="form-control" required="">
                                    <?php $__currentLoopData = $jobExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobExperience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($jobExperience->id); ?>" <?php echo e($job->job_experience_id == $jobExperience->id ? 'selected' : ''); ?>><?php echo e($degreeLevel->name); ?>><?php echo e($jobExperience->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.jobs.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <button class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(Module::asset('jobs:js/jobs.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/jobs/edit.blade.php ENDPATH**/ ?>