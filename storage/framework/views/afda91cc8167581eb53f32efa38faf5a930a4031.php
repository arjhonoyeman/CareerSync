<article >
    <div class="employer-item">
        <div class="employer-img">
            <a href="<?php echo e(route('company', ['slug' => $company->slug])); ?>">
                <img width="100" height="100" src="<?php echo e($company->getLogoLink()); ?>" class="" alt="<?php echo e($company->company_name); ?>"> </a>
        </div>
        <h2 class="employer-title"><a href="<?php echo e(route('company', ['slug' => $company->slug])); ?>"><?php echo e($company->company_name); ?></a></h2>
        <div class="employer-information">
            <?php if(isset($company->city)): ?>
            <div class="employer-location">
                <div class="value">
                    <i class="pe-7s-map-marker"></i>
                    <a href="<?php echo e(route('companies', ['city' => $company->city->id])); ?>"><?php echo e($company->city->name); ?></a>
                </div>
            </div>
            <?php endif; ?>
            <?php if(isset($company->industry)): ?>
            <div class="job-category">
                <div class="value">
                    <i class="pe-7s-id"></i>
                    <a class="employer-category" href="<?php echo e(route('companies', ['industry' => $company->industry->id])); ?>"><?php echo e($company->industry->name); ?></a>
                </div>
            </div>
            <?php endif; ?>
            <div class="open-job">
                <span><?php echo app('translator')->get('Open Jobs'); ?> - <?php echo e($company->jobs()->count()); ?></span> 
            </div>
            <?php if($company->is_featured): ?>
            <div class="mt-1">
                <span class="featured-text"><?php echo app('translator')->get('Featured'); ?></span>
            </div>
            <?php endif; ?>
        </div>
    </div>
</article><?php /**PATH C:\xampp7.4.29\htdocs\Modules\Themes\Providers/../Resources/views/default/includes/item_company.blade.php ENDPATH**/ ?>