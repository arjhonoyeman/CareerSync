<?php $__env->startSection('title', __('Company Profile')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Edit Company Profile'); ?></h1>
    <a href="<?php echo e(route('company',$company->slug)); ?>" class="btn btn-primary ml-auto"><i class="far fa-eye"></i> <?php echo app('translator')->get('Public Profile'); ?></a>
</div>
<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo e(route('company.update-profile')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <input type="text" hidden="" name="company_id" value="<?php echo e($company->id); ?>">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-label mb-2"><?php echo app('translator')->get('Company Logo'); ?></div>
                                <div class="custom-file">
                                    <input type="file" class="" name="logo" accept="image/*">
                                </div>
                                <small class="help-block"><?php echo app('translator')->get('Recommended size: :size', ['size' => '100x100']); ?></small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="<?php echo e(URL::to('/')); ?>/storage/user_storage/<?php echo e($company->user_id. "/". $company->logo); ?>" height="80" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label mb-2"><?php echo app('translator')->get('Company featured'); ?></div>
                                <label class="custom-switch">
                                    <?php if($company->is_featured): ?>
                                        <input type="checkbox" name="is_featured"  value="1" class="custom-switch-input" checked>
                                    <?php else: ?> 
                                        <input type="checkbox" name="is_featured" class="custom-switch-input" >
                                    <?php endif; ?>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Enable featured'); ?></span>
                                    <br><small class="text-primary">(<?php echo app('translator')->get('With featured your company will be a prominent badge, show up on website homepage, suggestions for candidates...'); ?>)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Company Name'); ?></label>
                                <input type="text" name="company_name" value="<?php echo e($company->company_name); ?>" class="form-control" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Company Email'); ?></label>
                                <input type="email" name="company_email" value="<?php echo e($company->company_email); ?>" class="form-control" placeholder="" required="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Company CEO'); ?></label>
                                <input type="text" name="company_ceo" value="<?php echo e($company->company_ceo); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Industry'); ?></label>
                                <select name="industry_id" class="form-control" required="">
                                    <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e($company->industry_id ==  $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Ownership'); ?></label>
                                <select name="ownership_type_id" class="form-control" required="">
                                    <?php $__currentLoopData = $ownershipType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e($company->ownership_type_id ==  $item->id  ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('No of Employees'); ?></label>
                                <select name="no_of_employees" class="form-control" required="">
                                    <?php $__currentLoopData = getNumEmployees(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item); ?>" <?php echo e($company->no_of_employees ==  $item ? 'selected' : ''); ?>><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('No of Office'); ?></label>
                                <select name="no_of_offices" class="form-control" required="">
                                    <?php $__currentLoopData = getNumOffices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item); ?>" <?php echo e($company->no_of_offices ==  $item ? 'selected' : ''); ?>><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Established'); ?></label>
                                <select name="established_in" class="form-control" required="">
                                    <?php $__currentLoopData = getEstablishedIn(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item); ?>" <?php echo e($company->established_in ==  $item ? 'selected' : ''); ?>><?php echo e($item); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Description'); ?></label>
                                 <textarea name="description" id="company_description" rows="3" class="form-control"><?php echo e($company->description); ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Address'); ?></label>
                                <input type="text" name="location" value="<?php echo e($company->location); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('City'); ?></label>
                                <select name="city_id" class="form-control" required="">
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e($company->city_id ==  $item->id  ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Website URL'); ?></label>
                                <input type="url" name="website" value="<?php echo e($company->website); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Phone'); ?></label>
                                <input type="text" name="phone" value="<?php echo e($company->phone); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Fax'); ?></label>
                                <input type="text" name="fax" value="<?php echo e($company->fax); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Facebook Link'); ?></label>
                                <input type="url" name="facebook" value="<?php echo e($company->facebook); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Twitter link'); ?></label>
                                <input type="url" name="twitter" value="<?php echo e($company->twitter); ?>" class="form-control" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Linkedin link'); ?></label>
                                <input type="url" name="linkedin" value="<?php echo e($company->linkedin); ?>" class="form-control" placeholder="" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Youtube link'); ?></label>
                                <input type="url" name="youtube" value="<?php echo e($company->youtube); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Pinterest link'); ?></label>
                                <input type="url" name="pinterest" value="<?php echo e($company->pinterest); ?>" class="form-control" placeholder="" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex">
                        <button class="btn btn-primary ml-auto"><?php echo app('translator')->get('Save'); ?></button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(Module::asset('jobs:js/employer.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Jobs\Providers/../Resources/views/employer/company-profile.blade.php ENDPATH**/ ?>