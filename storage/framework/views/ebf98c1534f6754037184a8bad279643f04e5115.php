<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
<li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('alltemplates')); ?>">
        <i class="fas fa-plus fa-lg"></i>
        <span class="d-none d-sm-inline-block ml-2"><?php echo app('translator')->get('New ResumeCV'); ?></span>
      </a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employer')): ?>
<li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('company.jobs.create')); ?>">
        <i class="fas fa-plus fa-lg"></i>
        <span class="d-none d-sm-inline-block ml-2"><?php echo app('translator')->get('New Job'); ?></span>
      </a>
</li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<!---<li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('settings/companies/create')); ?>">
        <i class="fas fa-plus fa-lg"></i>
        <span class="d-none d-sm-inline-block ml-2"><?php echo app('translator')->get('New Job'); ?></span>
      </a>
</li> -->
<?php endif; ?>
<?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/moduletemplates/module-header-top-left.blade.php ENDPATH**/ ?>