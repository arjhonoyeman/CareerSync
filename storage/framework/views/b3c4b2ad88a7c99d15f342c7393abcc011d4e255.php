<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<li class="nav-item">
	<a class="nav-link <?php echo e((request()->is('settings/users*')) ? '' : 'collapsed'); ?>" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-user"></i>
		<span><?php echo app('translator')->get('Users'); ?></span>
	</a>
	<div id="collapseUsers" class="collapse <?php echo e((request()->is('settings/users*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.users.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.users.index')); ?>">
				<span><?php echo app('translator')->get('All users'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.users.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.users.create')); ?>">
				<span><?php echo app('translator')->get('New user'); ?></span>
			</a>
		</div>
	</div>
</li>
<?php endif; ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\User\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>