<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="ltr">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="<?php echo e(app()->getLocale()); ?>" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo e(asset(config('app.logo_favicon'))); ?>" type="image/png">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <meta name="description" content="<?php echo e(config('app.SITE_DESCRIPTION')); ?>">
    <meta name="keywords" content="<?php echo e(config('app.SITE_KEYWORDS')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(Module::asset('core:core/core.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Module::asset('core:app/css/customize.css')); ?>">
    <?php echo $__env->renderWhen(config('app.GOOGLE_ANALYTICS'), 'core::partials.google-analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
    
    <?php echo $__env->yieldPushContent('head'); ?>
    <script type="text/javascript">
      var BASE_URL = '<?php echo e(url('/')); ?>';
    </script>
  </head>
  <body id="page-top" class="sidebar-toggled">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <?php echo $__env->make('core::partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <?php echo $__env->make('core::partials.header-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
              <ul class="list-unstyled mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <i class="fas fa-times text-danger mr-2"></i> <?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                  <div class="alert alert-success">
                      <i class="fas fa-check-circle text-success mr-2"></i> <?php echo session('success'); ?>

                  </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-times text-danger mr-2"></i> <?php echo session('error'); ?>

                </div>
            <?php endif; ?>
            <!-- Page Heading -->
            <?php echo $__env->yieldContent('content'); ?>
            
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
 
        <!-- Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span><?php echo app('translator')->get('Copyright'); ?> © <?php echo e(now()->year); ?>|| Developed by: BSIT 3C</a></span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

   
    <script src="<?php echo e(Module::asset('core:core/core.js')); ?>" ></script>
    <script src="<?php echo e(Module::asset('core:vendor/tinymce/js/tinymce/tinymce.min.js')); ?>" ></script>
    <script src="<?php echo e(Module::asset('core:vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>" ></script>
    <script src="<?php echo e(Module::asset('core:app/js/app.js')); ?>" ></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
  </body>
</html><?php /**PATH C:\xampp 7.4\htdocs\Modules\Core\Providers/../Resources/views/layouts/app.blade.php ENDPATH**/ ?>