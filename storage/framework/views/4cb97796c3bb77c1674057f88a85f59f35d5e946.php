<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="<?php echo e(app()->getLocale()); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo e(asset('public/img/favicon.png')); ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/img/favicon.png')); ?>" />
    <title><?php echo e($data->name); ?></title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link rel="stylesheet" href="<?php echo e(Module::asset('resumecv:css/builder.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(Module::asset('resumecv:css/customize.css')); ?>">
    <script src="<?php echo e(Module::asset('resumecv:js/builder.js')); ?>"></script>
    <script type="text/javascript">
        var config = {
            all_icons: <?php echo json_encode($all_icons, 15, 512) ?>,
        };
    </script>
    <script src="<?php echo e(Module::asset('resumecv:js/preset.js')); ?>"></script>
</head>

<body>
 <div id="mobileAlert">
      <div class="message">
        <h3><?php echo app('translator')->get('Builder not work on mobile'); ?></h3>
        <a href ="<?php echo e(route('resumecv.index')); ?>"><?php echo app('translator')->get('Back'); ?></a>
      </div>
    </div>
        <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
      <div class="modal-header">
        <h2><?php echo app('translator')->get('Select a template'); ?></h2>
        <span class="close">&times;</span>
      </div>
      <div class="row">
          <?php $__currentLoopData = $all_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="column">
              <div class="card card-template" data-templateid="<?php echo e($item->id); ?>">
                  <img src="<?php echo e(URL::to('/')); ?>/storage/thumb_templates/<?php echo e($item->thumb); ?>" alt="<?php echo e($item->name); ?>" data-was-processed="true" class="" />
                  <div class="container">
                    <h4><b><?php echo e($item->name); ?></b></h4> 
                  </div>
                </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
  </div>
</div>
 <div id="loadingMessage">
      <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="gjs"></div>
   
    <script type="text/javascript">
        var _token = '<?php echo e(csrf_token()); ?>';
        var upload_Image = '<?php echo e(URL::to('resumecvtemplate/uploadimage')); ?>';
        var url_load_template = "<?php echo e(URL::to('resumecvtemplate/loadtemplate')); ?>";
        var url_default_css_template = '<?php echo e(Module::asset('resumecv:css/font-awesome.css')); ?>';
        var urlStore = '<?php echo e(URL::to('settings/resumecvtemplate/update-builder/'.$data->id)); ?>';
        var urlLoad = '<?php echo e(URL::to('settings/resumecvtemplate/load-builder/'.$data->id)); ?>';
        var back_button_url = "<?php echo e(URL::to('settings/resumecvtemplate')); ?>";
        var images_url = <?php echo json_encode($images_url, 15, 512) ?>;
        var all_fonts = <?php echo json_encode($all_fonts, 15, 512) ?>;
        var langs = {
          "fontFamily": "<?php echo app('translator')->get('FONT FAMILY'); ?>",
          "changeTemplates": "<?php echo app('translator')->get('Change Templates'); ?>",
        };
    </script>
    <script src="<?php echo e(Module::asset('resumecv:js/admin-builder.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp 7.4\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecvtemplates/builder_template.blade.php ENDPATH**/ ?>