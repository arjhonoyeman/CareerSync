<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompanies" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-building"></i>
		<span><?php echo app('translator')->get('Companies'); ?></span>
	</a>
	<div id="collapseCompanies" class="collapse <?php echo e((request()->is('settings/companies*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.companies.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.companies.index')); ?>">
				<span><?php echo app('translator')->get('List'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.companies.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.companies.create')); ?>">
				<span><?php echo app('translator')->get('Create'); ?></span>
			</a>
		</div>
	</div>
</li>
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJobs" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-briefcase"></i>
		<span><?php echo app('translator')->get('Jobs'); ?></span>
	</a>
	<div id="collapseJobs" class="collapse <?php echo e((request()->is('settings/jobs*')) && routeName() != 'settings.jobs.applicants.index' ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item <?php echo e(routeName() == 'settings.jobs.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.jobs.index')); ?>">
				<span><?php echo app('translator')->get('List'); ?></span>
				<!---
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.jobs.create' ? 'active' : ''); ?>" href="<?php echo e(route('settings.jobs.create')); ?>">
				<span><?php echo app('translator')->get('Create'); ?></span>
			</a>
			--->
		</div>
	</div>
</li>
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJobAttributes" aria-expanded="false" aria-controls="collapseTwo">
		<i class="fas fa-briefcase-medical"></i>
		<span><?php echo app('translator')->get('Job Attributes'); ?></span>
	</a>
	<div id="collapseJobAttributes" class="collapse <?php echo e((request()->is('settings/job-attributes*')) ? 'show' : ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
		<div class="bg-white py-2 collapse-inner rounded">
			
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.career_levels.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.career_levels.index')); ?>">
				<span><?php echo app('translator')->get('Career levels'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.functional_areas.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.functional_areas.index')); ?>">
				<span><?php echo app('translator')->get('Functional Areas'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.genders.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.genders.index')); ?>">
				<span><?php echo app('translator')->get('Genders'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.industries.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.industries.index')); ?>">
				<span><?php echo app('translator')->get('Industries'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.job_experiences.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.job_experiences.index')); ?>">
				<span><?php echo app('translator')->get('Job experiences'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.job_types.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.job_types.index')); ?>">
				<span><?php echo app('translator')->get('Job types'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.job_shifts.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.job_shifts.index')); ?>">
				<span><?php echo app('translator')->get('Job shifts'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.degree_levels.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.degree_levels.index')); ?>">
				<span><?php echo app('translator')->get('Degree levels'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.ownership_types.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.ownership_types.index')); ?>">
				<span><?php echo app('translator')->get('Ownership types'); ?></span>
			</a>
			<a class="collapse-item <?php echo e(routeName() == 'settings.job.attributes.salary_periods.index' ? 'active' : ''); ?>" href="<?php echo e(route('settings.job.attributes.salary_periods.index')); ?>">
				<span><?php echo app('translator')->get('Salary periods'); ?></span>
			</a>

		</div>
	</div>
</li>
<li class="nav-item <?php echo e((request()->is('settings/jobs/applicants')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(route('settings.jobs.applicants.index')); ?>">
		<i class="fas fa-bullhorn"></i>
		<span><?php echo app('translator')->get('Applicants Job'); ?></span></a>
</li>
<?php endif; ?>



<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employer')): ?>
	<li class="nav-item <?php echo e((request()->is('company/dashboard')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('company/dashboard')); ?>">
		<i class="fas fa-tachometer-alt"></i>
		<span><?php echo app('translator')->get('Dashboard'); ?></span></a>
	</li>
	<li class="nav-item <?php echo e((request()->is('accountsettings')) ? 'active' : ''); ?>">
	<a class="nav-link" href="<?php echo e(url('accountsettings')); ?>">
		<i class="fa fa-user"></i>
		<span><?php echo app('translator')->get('My profile'); ?></span></a>
	</li>
	<li class="nav-item <?php echo e((request()->is('company/profile')) ? 'active' : ''); ?>">
		<a class="nav-link" href="<?php echo e(route('company.profile')); ?>">
		<i class="fab fa-black-tie"></i>
		<span><?php echo app('translator')->get('Profile Company'); ?></span></a>
	</li>
	<li class="nav-item <?php echo e((request()->is('company/jobs/create')) ? 'active' : ''); ?>">
		<a class="nav-link" href="<?php echo e(route('company.jobs.create')); ?>">
		<i class="fas fa-user-plus"></i>
		<span><?php echo app('translator')->get('Post job'); ?></span></a>
	</li>
	<li class="nav-item <?php echo e((request()->is('company/jobs')) ? 'active' : ''); ?>">
		<a class="nav-link" href="<?php echo e(route('company.jobs.index')); ?>">
		<i class="fas fa-building"></i>
		<span><?php echo app('translator')->get('Company jobs'); ?></span></a>
	</li>
	<li class="nav-item <?php echo e((request()->is('company/applicants')) ? 'active' : ''); ?>">
		<a class="nav-link" href="<?php echo e(route('company.applicants.index')); ?>">
		<i class="fas fa-bullhorn"></i>
		<span><?php echo app('translator')->get('Applicants Jobs'); ?></span></a>
	</li>
	<?php if(Module::find('Saas')): ?>
	<li class="nav-item <?php echo e((request()->is('company/packages')) ? 'active' : ''); ?>">
		<a class="nav-link" href="<?php echo e(route('company.packages')); ?>">
		<i class="fas fa-box"></i>
		<span><?php echo app('translator')->get('Packages'); ?></span></a>
	</li>
	<?php endif; ?>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo e(url('logout')); ?>">
		<i class="fas fa-sign-out-alt"></i>
		<span><?php echo app('translator')->get('Logout'); ?></span></a>
	</li>
<?php endif; ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\Jobs\Providers/../Resources/views/moduletemplates/module-sidebar.blade.php ENDPATH**/ ?>