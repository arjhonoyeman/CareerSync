
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<!--
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocationAttributes" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-search-location"></i>
		<span><?php echo app('translator')->get('Location'); ?></span>
	</a>
	<div id="collapseLocationAttributes" class="collapse <?php echo e((request()->is('settings/location*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.location.cities.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.location.cities.index')); ?>">
				<span><?php echo app('translator')->get('Cities'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.location.states.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.location.states.index')); ?>">
				<span><?php echo app('translator')->get('States'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.location.countries.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.location.countries.index')); ?>">
				<span><?php echo app('translator')->get('Countries'); ?></span>
			</a>
		</div>
	</div>
	
</li>
--->
<?php endif; ?>
<?php /**PATH C:\xampp 7.4.28\htdocs\Modules\Location\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>