<div class="item-job">
  <article>
      <div class="item-job-list">
          <div class="item-job-half">
              <div class="item-flex-box">
                  <div class="item-job-img">
                      <a href="<?php echo e(route('company', ['slug' => $job->company->slug])); ?>"><img src="<?php echo e($job->company->getLogoLink()); ?>" class="img-responsive" alt="<?php echo e($job->company->company_name); ?>"></a>
                  </div>

                  <div class="item-job-pos">
                      <h3 class="jb-title"><a href="<?php echo e(route('job', ['slug' => $job->slug])); ?>"><?php echo e($job->title); ?></a></h3>
                      
                      <p>
                          <span class="item-job-type"><?php echo e($job->job_type->name); ?></span>
                          <?php if($job->is_featured): ?>
                          <span class="featured-text" data-toggle="tooltip" title="" data-original-title="featured"><?php echo app('translator')->get('Featured'); ?></span>
                          <?php endif; ?>
                      </p>
                     <div class="job-metas">
                          <div class="category-job">
                              <div class="job-category with-icon">
                                  <i class="pe-7s-id"></i>
                                  <a href="<?php echo e(route('jobslist', ['functionalarea' => $job->functional_area->id])); ?>" style=""><?php echo e($job->functional_area->name); ?></a>
                              </div>
                          </div>
                          <?php if(isset($job->city)): ?>
                          <div class="job-location">
                              <i class="pe-7s-map-marker"></i>
                              <a href="<?php echo e(route('jobslist', ['city' => $job->city->id])); ?>"><?php echo e($job->city->name); ?></a>
                          </div>
                          <?php endif; ?>
                          <div class="job-deadline"><i class="pe-7s-date"></i> <?php echo e(\Carbon\Carbon::parse($job->created_at)->toFormattedDateString()); ?></div>
                          <?php if(isset($job->salary_from, $job->salary_to)): ?>
                          <div class="job-salary"><i class="pe-7s-cash"></i> <span class="price-text"><?php echo e($job->salary_from); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span> - <span class="price-text"><?php echo e($job->salary_to); ?> <span class="suffix"><?php echo e($job->salary_currency); ?></span></span>
                          </div>
                          <?php endif; ?>
                      </div>
                  </div>

              </div>
          </div>
         
      </div>
  </article>
</div><?php /**PATH C:\xampp 7.4\htdocs\Modules\Themes\Providers/../Resources/views/default/includes/item_job_side.blade.php ENDPATH**/ ?>