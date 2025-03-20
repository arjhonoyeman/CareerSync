<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php echo $__env->renderWhen(config('app.GOOGLE_ANALYTICS'), 'core::partials.google-analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo e(__(config('app.name'))); ?> &mdash; <?php echo e(config('app.SITE_SLOGAN')); ?></title>
        <meta name="description" content="<?php echo e(config('app.SITE_DESCRIPTION')); ?>">
        <meta name="keywords" content="<?php echo e(config('app.SITE_KEYWORDS')); ?>">
        <link rel="shortcut icon" href="<?php echo e(asset(config('app.logo_favicon'))); ?>">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&display=swap">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/css/bootstrap.min.css')); ?>"  />
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/css/materialdesignicons.min.css')); ?>"  />
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/css/pe-icon-7-stroke.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/fonts/icomoon/style.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/owlcarousel2/assets/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/owlcarousel2/assets/owl.theme.default.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(Module::asset('themes:default/css/style.css')); ?>"  />

        <?php echo $__env->yieldPushContent('head'); ?>
    </head>
    <body data-spy="scroll" data-target="#navbarCollapse">
        <?php if(session('success')): ?>
        <div class="alert alert-success border-radius-none">
            <i class="fas fa-check-circle text-success mr-2"></i> <?php echo session('success'); ?>

        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
        <div class="alert alert-danger border-radius-none">
            <i class="fas fa-times text-danger mr-2"></i> <?php echo session('error'); ?>

        </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php if(config('app.ads_footer_layout_themes')): ?>
         <section class="mb-4">
             <div class="container">
                 <div class="row">
                     <div class="ads-home-page">
                        <?php echo config('app.ads_footer_layout_themes'); ?>

                     </div>
                 </div>
             </div>
         </section>
         <?php endif; ?>
        <!-- START FOOTER -->
        <section class="py-4 footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 col-sm-6">
                        <p class="mb-0 f_400"><?php echo app('translator')->get('Copyright'); ?> © <?php echo e(now()->year); ?>|| Developed by: BSIT 3C</p>
                    </div>
                    
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <ul class="list-unstyled f_menu text-right">
                            <?php echo menuBottomSkins(['pagewebsites' => $pagewebsites]); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- END FOOTER -->
        <script src="<?php echo e(Module::asset('themes:default/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(Module::asset('themes:default/js/bootstrap.bundle.min.js')); ?>"></script>
         <script src="<?php echo e(Module::asset('themes:default/owlcarousel2/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(Module::asset('themes:default/js/jquery.easing.min.js')); ?>"></script>
        <script src="<?php echo e(Module::asset('themes:default/js/jquery.mb.YTPlayer.js')); ?>"></script>
        <script src="<?php echo e(Module::asset('themes:default/js/contact.init.js')); ?>"></script>
        <script src="<?php echo e(Module::asset('themes:default/js/counter.init.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <script src="<?php echo e(Module::asset('themes:default/js/app.js')); ?>"></script>
        
    </body>
</html><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/layout.blade.php ENDPATH**/ ?>