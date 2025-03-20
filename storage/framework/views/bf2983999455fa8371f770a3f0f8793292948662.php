<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('themes::default.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="pt-4 pb-4">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row mb-2 text-center">
                                <div class="col-md-12">
                                    <h3><strong><?php echo app('translator')->get('Get in touch'); ?></strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <p><?php echo app('translator')->get('If you have any questions or need help, please fill out the form below. We do our best to response within 1 business day'); ?></p>
                <form method="post" action="<?php echo e(route('contacts.save')); ?>" class="contact-form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label label-required"><?php echo app('translator')->get('Fullname'); ?></label>
                                <input type="text" name="fullname" class="form-control" value="<?php echo e(old('fullname', '')); ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label label-required"><?php echo app('translator')->get('Phone number'); ?></label>
                                <input type="text" name="phone" class="form-control" value="<?php echo e(old('phone', '')); ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label label-required"><?php echo app('translator')->get('Email address'); ?></label>
                                <input type="email" name="email" class="form-control" value="<?php echo e(old('email', '')); ?>" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label label-required"><?php echo app('translator')->get('Subject'); ?></label>
                                <input type="text" name="subject" class="form-control" value="<?php echo e(old('subject', '')); ?>" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label label-required"><?php echo app('translator')->get('Content'); ?></label>
                                <textarea name="content" class="form-control" rows="4" required><?php echo e(old('content', '')); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <?php if(config('recaptcha.api_site_key') && config('recaptcha.api_secret_key')): ?>
                            <div class="form-group">
                            <?php echo htmlFormSnippet(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                            <div class="text-red mt-1">
                                <small><strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong></small>
                            </div>
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-md-12">
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Submit'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>      
    </div>

<?php $__env->stopSection(); ?>

<?php if(config('recaptcha.api_site_key') && config('recaptcha.api_secret_key')): ?>
    <?php $__env->startPush('head'); ?>
        <?php echo htmlScriptTagJsApi(); ?>

    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/contact.blade.php ENDPATH**/ ?>