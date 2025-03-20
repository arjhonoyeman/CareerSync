
<?php $__env->startSection('title', __('Integrations')); ?>
<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Integrations'); ?></h1>
</div>
<div class="row">
    <div class="col-md-12">
        <form role="form" method="post" action="<?php echo e(route('settings.general.update', 'integrations')); ?>" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab_social" data-toggle="tab">
                                <?php echo app('translator')->get('Social login'); ?>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#tab_miscellaneous" data-toggle="tab">
                                <?php echo app('translator')->get('Miscellaneous'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="card-body">
                    <div class="tab-content">
                        
                        
                        <div class="tab-pane active" id="tab_social">
                            <div class="d-flex align-items-center justify-content-between">
                                <div><h4><?php echo app('translator')->get('Login with Facebook'); ?></h4></div>
                                <div><img src="<?php echo e(asset('img/facebook.svg')); ?>" height="60" alt="Facebook"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('App ID'); ?></label>
                                        <input type="text" name="FACEBOOK_CLIENT_ID" value="<?php echo e(config('services.facebook.client_id')); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('App Secret'); ?></label>
                                        <input type="text" name="FACEBOOK_CLIENT_SECRET" value="<?php echo e(config('services.facebook.client_secret')); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo app('translator')->get('Get your App ID and App Secret from:'); ?> <a href="https://developers.facebook.com" target="_blank">https://developers.facebook.com</a></p>
                                    <p><?php echo app('translator')->get('Valid OAuth Redirect URI:'); ?> <a href="<?php echo e(route('login.callback', 'facebook')); ?>" target="_blank"><?php echo e(route('login.callback', 'facebook')); ?></a></p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between">
                                <div><h4><?php echo app('translator')->get('Login with Google'); ?></h4></div>
                                <div><img src="<?php echo e(asset('img/google.svg')); ?>" height="60" alt="Google"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Client ID'); ?></label>
                                        <input type="text" name="GOOGLE_CLIENT_ID" value="<?php echo e(config('services.google.client_id')); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Client Secret'); ?></label>
                                        <input type="text" name="GOOGLE_CLIENT_SECRET" value="<?php echo e(config('services.google.client_secret')); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo app('translator')->get('Create a project:'); ?> <a href="https://console.developers.google.com/projectcreate" target="_blank">https://console.developers.google.com/projectcreate</a></p>
                                    <p><?php echo app('translator')->get('Create OAuth client ID credentials:'); ?> <a href="https://console.developers.google.com/apis/credentials" target="_blank">https://console.developers.google.com/apis/credentials</a></p>
                                    <p><?php echo app('translator')->get('Valid OAuth Redirect URI:'); ?> <a href="<?php echo e(route('login.callback', 'google')); ?>" target="_blank"><?php echo e(route('login.callback', 'google')); ?></a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane" id="tab_miscellaneous">
                            <div class="d-flex align-items-center justify-content-between">
                                <div><h4><?php echo app('translator')->get('Google Analytics'); ?></h4></div>
                                <div><img src="<?php echo e(asset('img/google_analytics.svg')); ?>" height="60" alt="Google Analytics"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Property ID'); ?></label>
                                        <input type="text" name="GOOGLE_ANALYTICS" value="<?php echo e(config('app.GOOGLE_ANALYTICS')); ?>" class="form-control" placeholder="UA-XXXXX-Y">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo app('translator')->get("Leave this field empty if you don't want to enable Google Analytics"); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between">
                                <div><h4><?php echo app('translator')->get('Google reCaptcha'); ?></h4></div>
                                <div><img src="<?php echo e(asset('img/google_recaptcha.svg')); ?>" height="60" alt="Google reCaptcha"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Site key'); ?></label>
                                        <input type="text" name="RECAPTCHA_SITE_KEY" value="<?php echo e(config('recaptcha.api_site_key')); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><?php echo app('translator')->get('Secret key'); ?></label>
                                        <input type="text" name="RECAPTCHA_SECRET_KEY" value="<?php echo e(config('recaptcha.api_secret_key')); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo app('translator')->get('To protect your registration form, you can use Google reCaptcha service.'); ?></p>
                                    <ul>
                                        <li><?php echo app('translator')->get('Get your free credentials from <a href=":link" target="_blank">:link</a>', ['link' => 'https://www.google.com/recaptcha/admin']); ?></li>
                                        <li><?php echo app('translator')->get('Select "reCAPTCHA v2" as a site key type.'); ?></li>
                                        <li><?php echo app('translator')->get('Copy & paste the site and secret keys'); ?></li>
                                    </ul>
                                </div>
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
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Settings\Providers/../Resources/views/settings/integrations.blade.php ENDPATH**/ ?>