<?php if(isset($data['pagewebsites'])): ?>
	<?php $__currentLoopData = $data['pagewebsites']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><a href="<?php echo e(route('pagewebsite', $p->slug)); ?>"><?php echo e($p->title); ?></a></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Modules\PagesWebsite\Providers/../Resources/views/moduletemplates/module-bottom-skins.blade.php ENDPATH**/ ?>