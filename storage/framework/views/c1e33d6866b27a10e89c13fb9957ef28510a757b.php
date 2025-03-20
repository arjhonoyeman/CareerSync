<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
<li class="nav-item <?php echo e((request()->is('accountsettings')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('accountsettings')); ?>">
		<i class="fa fa-user"></i>
		<span><?php echo app('translator')->get('My profile'); ?></span></a>
</li>
<li class="nav-item <?php echo e((request()->is('resumecv*')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(route('resumecv.index')); ?>">
		<i class="far fa-file-alt"></i>
		<span><?php echo app('translator')->get('My ResumeCV'); ?></span></a>
</li>

<li class="nav-item <?php echo e((request()->is('alltemplates*')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('alltemplates')); ?>">
		<i class="far fa-window-maximize"></i>
		<span><?php echo app('translator')->get('Templates'); ?></span></a>
</li>
<!--
<li class="nav-item <?php echo e((request()->is('my-applications*')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('my.applications')); ?>">
		<i class="fa fa-briefcase"></i>
		<span><?php echo app('translator')->get('Applied Jobs'); ?></span></a>
</li> 

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate')): ?>
<li class="nav-item <?php echo e((request()->is('my_applications*')) ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('my.applications')); ?>">
        <i class="fa fa-briefcase"></i>
        <span><?php echo app('translator')->get('My Applications'); ?></span>
    </a>
</li>
<?php endif; ?>
-->








<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResumeCvs" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-file-alt"></i>
		<span><?php echo app('translator')->get('ResumeCvs'); ?></span>
	</a>
	<div id="collapseResumeCvs" class="collapse <?php echo e((request()->is('settings/resumecv*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.resumecvtemplate.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.resumecvtemplate.index')); ?>">
				<span><?php echo app('translator')->get('All templates'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.resumecvcategories.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.resumecvcategories.index')); ?>">
				<span><?php echo app('translator')->get('All categories'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.resumecvtemplate.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.resumecvtemplate.create')); ?>">
				<span><?php echo app('translator')->get('New template'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.resumecvcategories.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.resumecvcategories.create')); ?>">
				<span><?php echo app('translator')->get('New category'); ?></span>
			</a>
		</div>
	</div>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp 7.4\htdocs\Modules\ResumeCV\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>