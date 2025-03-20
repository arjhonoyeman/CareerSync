<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<div class="sidebar-heading">
      <?php echo app('translator')->get('Admin Menu'); ?>  
</div>
<li class="nav-item <?php echo e((request()->is('settings/dashboard*')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(route('settings.dashboard')); ?>" >
		<i class="fas fa-tachometer-alt"></i>
		<span><?php echo app('translator')->get('Dashboard'); ?></span>
	</a>
</li>
<li class="nav-item">
	<?php 
		$sub_menu = ["settings.index","settings.localization","settings.email","settings.integrations","settings.manage-ads"];
	?>
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fas fa-fw fa-cog"></i><span><?php echo app('translator')->get('Website settings'); ?></span>
	</a>
	<div id="collapseTwo" class="collapse <?php echo e(in_array(routeName(), $sub_menu) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.index')); ?>">
				<span><?php echo app('translator')->get('General settings'); ?></span>
			</a>
			<!----
			<a class="collapse-item <?php echo e(routeName() == 'settings.manage-ads' ? 'active' : ''); ?>" href="<?php echo e(route('settings.manage-ads')); ?>">
				<span><?php echo app('translator')->get('Manage Ads'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.localization' ? 'active' : ''); ?>" href="<?php echo e(route('settings.localization')); ?>">
				<span><?php echo app('translator')->get('Localization'); ?></span>
			</a>
			<a class="collapse-item " href="<?php echo e(url(config('translation.ui_url'))); ?>">
				<span><?php echo app('translator')->get('Languages'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.email' ? 'active' : ''); ?>" href="<?php echo e(route('settings.email')); ?>">
					<span><?php echo app('translator')->get('E-mail Settings'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.integrations' ? 'active' : ''); ?>" href="<?php echo e(route('settings.integrations')); ?>">
					<span><?php echo app('translator')->get('Integrations'); ?></span>--->
			</a>
		</div>
	</div>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Settings\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>