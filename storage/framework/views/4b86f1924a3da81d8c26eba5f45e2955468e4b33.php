<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-6 p-0">
    <div class="half">
          <div class="login-logo">
            <a class="" href="<?php echo e(url('/')); ?>">
              <img src="<?php echo e(asset(config('app.logo_frontend'))); ?>" height="80" alt="logo">
            </a>
          </div>
          <form class="actionLogin mb-2" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group first">
              <input class="form-control" type="text" name="email" placeholder="<?php echo app('translator')->get('E-Mail Address'); ?>" required="">
            </div>
            <div class="form-group last mb-3">
              <input class="form-control" type="password" name="password" placeholder="<?php echo app('translator')->get('Password'); ?>" required="">
            </div>
            
            <div class="d-flex mb-4 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption"><?php echo app('translator')->get("Remember me"); ?></span>
              <input type="checkbox" id="rememberMe" name="remember"  checked="checked"/>
              <div class="control__indicator"></div>
            </label>
            <span class="ml-auto">
              <a class="forgot-pass" href="<?php echo e(route('password.request')); ?>"><?php echo app('translator')->get('I forgot password'); ?></a>
            </span>
          </div>
          <?php if($errors->any()): ?>
          <div class="alert alert-danger">
            <ul class="list-unstyled mb-0">
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li> <i class="fas fa-times text-danger mr-2"></i> <?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <?php endif; ?>
          <button class="btn btn-block btn-primary mt-2" type="submit"><?php echo app('translator')->get('Sign in'); ?></button>
        </form>
        <div class="social-login">
          <?php if(config('services.facebook.client_id') && config('services.facebook.client_secret')): ?>
          <a href="<?php echo e(route('login.social', 'facebook')); ?>" class="facebook btn d-flex justify-content-center align-items-center">
            <span class="icon-facebook mr-3"></span> <?php echo app('translator')->get('Login with Facebook'); ?>
          </a>
          <?php endif; ?>
          <?php if(config('services.google.client_id') && config('services.google.client_secret')): ?>
          <a href="<?php echo e(route('login.social', 'google')); ?>" class="google btn d-flex justify-content-center align-items-center">
            <span class="icon-google mr-3"></span> <?php echo app('translator')->get('Login with Google'); ?>
          </a>
          <?php endif; ?>
        </div>
        <p class="mt-2">
          <a href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get("Don't have account yet?"); ?></a>
        </p>
      </div>
  </div>
  <div class="col-md-6 bg-auth-layout">
  <!-- <img src="<?php echo e(asset('img/background.png')); ?>" alt="Example Image"> -->
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules\Themes\Providers/../Resources/views/default/auth/login.blade.php ENDPATH**/ ?>