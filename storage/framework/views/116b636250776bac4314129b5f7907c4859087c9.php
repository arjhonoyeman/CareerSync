<?php $__env->startSection('content'); ?>
<?php if(config('recaptcha.api_site_key') && config('recaptcha.api_secret_key')): ?>
<?php $__env->startPush('head'); ?>
<?php echo htmlScriptTagJsApi(); ?>

<?php $__env->stopPush(); ?>
<?php endif; ?>

<div class="row">
  <div class="col-md-6 p-0">
    <div class="half">
      <div class="login-logo">
        <a class="" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(asset(config('app.logo_frontend'))); ?>" height="50" alt="logo">
        </a>
      </div>
      <form class="actionLogin mb-2" action="<?php echo e(route('register')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group first">
          <input class="form-control" type="text" name="name"  value="<?php echo e(old('name')); ?>" placeholder="<?php echo app('translator')->get('Enter name'); ?>" required="">
        </div>
        <div class="form-group first">
          <input class="form-control" type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('E-Mail Address'); ?>" required="">
        </div>
        <div class="form-group first">
          <input class="form-control" type="password" name="password" placeholder="<?php echo app('translator')->get('Password'); ?>" required="">
        </div>
        <div class="form-group last mb-3">
          <input class="form-control" type="password" name="password_confirmation" placeholder="<?php echo app('translator')->get('Confirm password'); ?>" required="">
        </div>
       <div class="form-group">
        <select name="role" class="form-control">
            <option value="candidate"><?php echo app('translator')->get('Register as Candidate'); ?></option>
            <option value="employer"><?php echo app('translator')->get('Register as Employer'); ?></option>
        </select>
        </div>
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
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
          <ul class="list-unstyled mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>
        <button class="btn btn-block btn-primary mt-2" type="submit"><?php echo app('translator')->get('Register'); ?></button>
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
        <a href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('Already have account?'); ?></a>
      </p>
    </div>
  </div>
  <div class="col-md-6 bg-auth-layout">
  <!--<img src="<?php echo e(asset('img/background.png')); ?>" alt="Example Image">
-->
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes::default.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Themes\Providers/../Resources/views/default/auth/register.blade.php ENDPATH**/ ?>