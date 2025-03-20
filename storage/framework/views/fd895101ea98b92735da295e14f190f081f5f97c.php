<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-blog"></i>
		<span><?php echo app('translator')->get('Blogs'); ?></span>
	</a>
	<div id="collapseBlogs" class="collapse <?php echo e((request()->is('settings/blogs*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.blogs.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.blogs.index')); ?>">
				<span><?php echo app('translator')->get('All Blogs'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.blogs.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.blogs.create')); ?>">
				<span><?php echo app('translator')->get('Create Blog'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.blogs.categories.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.blogs.categories.index')); ?>">
				<span><?php echo app('translator')->get('All Categories'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.blogs.categories.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.blogs.categories.create')); ?>">
				<span><?php echo app('translator')->get('Create Category'); ?></span>
			</a>
		</div>
	</div>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Blogs\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>