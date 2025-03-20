<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
<li class="nav-item <?php echo e((request()->is('dashboard')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('dashboard')); ?>">
		<i class="fas fa-tachometer-alt"></i>
		<span><?php echo app('translator')->get('Dashboard'); ?></span></a>
</li>
<?php endif; ?><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Dashboard\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>