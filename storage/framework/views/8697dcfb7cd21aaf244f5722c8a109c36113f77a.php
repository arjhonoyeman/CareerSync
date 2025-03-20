<nav class="navbar navbar-expand topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
  </button>
  <!-- Topbar Navbar -->
  <ul class="navbar-nav">
    <?php echo menuHeaderTopLeft(); ?>

  </ul>
 

  <ul class="navbar-nav ml-auto">
    
    <?php echo menuHeaderTop(); ?>


    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
          <?php if($active_language): ?>
            <?php echo e($active_language); ?>

          <?php endif; ?>
        </span>
        <i class="fas fa-language fa-lg"></i>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('localize', $item)); ?>" rel="alternate" hreflang="<?php echo e($item); ?>" class="dropdown-item">
          <?php echo e($item); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </li>


    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
        <i class="fas fa-laugh-wink"></i>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo e(route('accountsettings.index')); ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <?php echo app('translator')->get('Account Settings'); ?>
        </a>
        
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <?php echo app('translator')->get('Logout'); ?>
        </a>
      </div>
    </li>
  </ul>
</nav><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Core\Providers/../Resources/views/partials/header-top.blade.php ENDPATH**/ ?>