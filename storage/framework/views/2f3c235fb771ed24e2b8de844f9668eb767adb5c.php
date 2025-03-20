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
      <title><?php echo e($item->name); ?></title>
      <link rel="icon" href="<?php echo e(asset(config('app.logo_favicon'))); ?>" type="image/png">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(config('app.logo_favicon'))); ?>" />
      <meta name="description" content="<?php echo e(config('app.SITE_DESCRIPTION')); ?>">
      <meta name="keywords" content="<?php echo e(config('app.SITE_KEYWORDS')); ?>">
      <link rel="stylesheet" href="<?php echo e(Module::asset('resumecv:css/font-awesome.css')); ?>">
  </head>
<body>
   
    
    <?php if($check_remove_brand == false): ?>
      <div class="action_footer">
            <a href="<?php echo e(URL::to('/')); ?>" class="cd-top">
                <?php echo e(config('app.name')); ?>

            </a>
      </div>
    <?php endif; ?>
    <script>
            window._loadPageLink = "<?php echo e(url('/')."/get-page-json/".$item->code); ?>";
            window._token = "<?php echo e(csrf_token()); ?>";
    </script>
    <link rel="stylesheet" href="<?php echo e(Module::asset('resumecv:css/publish.css')); ?>">
    <script type="text/javascript" src="<?php echo e(Module::asset('resumecv:js/jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(Module::asset('resumecv:js/publish.js')); ?>"></script>
</body>



</html>
<?php /**PATH C:\xampp7.4.29\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecv/publish.blade.php ENDPATH**/ ?>