<?php if(auth()->guard()->check()): ?>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
	<li class="nav-item">
		<a class="nav-link " href="<?php echo e(route('templates')); ?>">
			<?php echo app('translator')->get('Create ResumeCV'); ?>
		</a>
	</li>
	<?php endif; ?>
<?php else: ?>
	<li class="nav-item">
		<a class="nav-link " href="<?php echo e(route('templates')); ?>">
			<?php echo app('translator')->get('Create ResumeCV'); ?>
		</a>
	</li>
<?php endif; ?><?php /**PATH C:\xampp 7.4.28\htdocs\Modules\ResumeCV\Providers/../Resources/views/moduletemplates/module-header-skins.blade.php ENDPATH**/ ?>