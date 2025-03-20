<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<li class="nav-item <?php echo e((request()->is('settings/pagewebsites*')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(route('settings.pagewebsites.index')); ?>" >
		<i class="fas fa-pager"></i>
		<span><?php echo app('translator')->get('Pages Website'); ?></span>
	</a>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp7.4.29\htdocs\Modules\PagesWebsite\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>