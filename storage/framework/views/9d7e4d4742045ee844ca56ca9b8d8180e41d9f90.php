<!-- Static navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky sticky-dark">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset(config('app.logo_frontend'))); ?>" alt="" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
            </ul>
            <ul class="navbar-nav navbar-center">
                <?php echo menuHeaderSkins(); ?>

            <?php if(auth()->guard()->check()): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <strong><?php echo e($user->name); ?></strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(route('settings.dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(route('settings.companies.index')); ?>"><?php echo app('translator')->get('Companies'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(route('settings.jobs.index')); ?>"><?php echo app('translator')->get('Jobs'); ?></a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a>
                        </div>
                      </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <strong><?php echo e($user->name); ?></strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(url('resumecv')); ?>"><?php echo app('translator')->get('My ResumeCV'); ?></a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employer')): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <strong><?php echo e($user->name); ?></strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(route('company.dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(route('company.profile')); ?>"><?php echo app('translator')->get('Profile Company'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(route('company.jobs.index')); ?>"><?php echo app('translator')->get('Company jobs'); ?></a>
                          <a class="dropdown-item" href="<?php echo e(route('company.applicants.index')); ?>"><?php echo app('translator')->get('Applicants Jobs'); ?></a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('Logout'); ?></a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>">
                    <?php echo app('translator')->get('Login'); ?>
                </a>
            </li>
            <li class="nav-item d-inline-block d-lg-none">
                <a href="<?php echo e(route('register')); ?>" class="nav-link"><?php echo app('translator')->get('Sign up'); ?></a>
            </li>
            
        </ul>
        <div class="navbar-button d-none d-lg-inline-block">
            <a href="<?php echo e(route('register')); ?>" class="btn btn-sm btn-primary btn-round"><?php echo app('translator')->get('Sign up'); ?></a>
        </div>
        <?php endif; ?>
        
    </div>
</div>
</nav>
<!-- Navbar End --><?php /**PATH C:\xampp\htdocs\Modules\Themes\Providers/../Resources/views/default/nav.blade.php ENDPATH**/ ?>