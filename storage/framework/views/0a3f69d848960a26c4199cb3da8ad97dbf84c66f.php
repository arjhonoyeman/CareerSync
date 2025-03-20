<?php $__env->startSection('title', __('Update template')); ?>

<?php $__env->startSection('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo app('translator')->get('Update template'); ?></h1>
    <div class="p-1 ">
                <a href="<?php echo e(route('settings.resumecvtemplate.builder', $template)); ?>"><span  class="btn btn-primary"><?php echo app('translator')->get('Builder'); ?></span></a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <form role="form" method="post" action="<?php echo e(route('settings.resumecvtemplate.update', $template->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Name'); ?></label>
                                <input type="text" name="name" value="<?php echo e($template->name); ?>" class="form-control" placeholder="<?php echo app('translator')->get('Name'); ?>">
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Categories'); ?></label>
                                 <select name="category_id" class="form-control">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                         <?php if($item->id == $template->category_id): ?>
                                            selected="selected"
                                        <?php endif; ?>>
                                        <?php echo e($item->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Thumb'); ?> (750x750)</label>
                                 <input name="thumb" type="file"><br>
                                 <img src="<?php echo e(URL::to('/')); ?>/storage/thumb_templates/<?php echo e($template->thumb); ?>" data-value="" class="img-thumbnail" style="max-width: 100px; max-height: 100px;" />
                                <input type="hidden" name="hidden_image" value="<?php echo e($template->thumb); ?>" />
                            </div>
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('HTML content'); ?></label>
                                <textarea rows="4" name="content" class="form-control"><?php echo e($template->content); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('Style content'); ?></label>
                                <textarea rows="4" name="style" class="form-control"><?php echo e($template->style); ?></textarea>
                            </div>

                        </div>
                        
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Active'); ?></div>
                                <label class="custom-switch">
                                    <?php if($template->active): ?>
                                        <input type="checkbox" name="active" value="1" class="custom-switch-input" checked>
                                    <?php else: ?> 
                                        <input type="checkbox" name="active" value="1" class="custom-switch-input" >
                                    <?php endif; ?>
                                    
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Active template'); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-label"><?php echo app('translator')->get('Premium'); ?></div>
                                <label class="custom-switch">
                                    <?php if($template->is_premium): ?>
                                        <input type="checkbox" name="is_premium"  value="1" class="custom-switch-input" checked>
                                    <?php else: ?> 
                                        <input type="checkbox" name="is_premium" class="custom-switch-input" >
                                    <?php endif; ?>
                                <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description"><?php echo app('translator')->get('Premium template'); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <a href="<?php echo e(route('settings.resumecvtemplate.index')); ?>" class="btn btn-secondary"><?php echo app('translator')->get('Cancel'); ?></a>
                        <div class="ml-auto">
                            <button class="btn btn-primary" name="save_and_builder" type="submit" value="save_and_builder"><?php echo app('translator')->get('Save & Builder'); ?></button>
                            <button class="btn btn-success"><?php echo app('translator')->get('Save'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\Modules\ResumeCV\Providers/../Resources/views/resumecvtemplates/edit.blade.php ENDPATH**/ ?>