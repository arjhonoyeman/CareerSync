<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>

<li class="nav-item <?php echo e((request()->is('settings/contacts')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(route('settings.contacts.index')); ?>">
		<i class="fas fa-bullhorn"></i>
		<span><?php echo app('translator')->get('Contacts'); ?></span></a>
</li>

<?php endif; ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Contacts\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>