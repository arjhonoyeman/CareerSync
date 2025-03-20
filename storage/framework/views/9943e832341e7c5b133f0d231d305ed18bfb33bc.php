<article class="post blog-layout blog-grid">
        <div class="thumb-image">
            <figure class="entry-thumb"><a class="blog-thumbnail" href="<?php echo e($blog->getPublishLink()); ?>" aria-hidden="true">
                    <div class="image-wrapper"><img width="388" height="250" src="<?php echo e($blog->getThumbLink()); ?>" class="img-fluid" alt=""></div>
                </a></figure>
        </div>
        <div class="inner-bottom">
            <div class="top-info">
                <div class="date">
                    <?php echo e(\Carbon\Carbon::parse($blog->created_at)->toFormattedDateString()); ?> 
                </div>
                <div class="list-categories"><a href="<?php echo e(route('blogs', ['category_id' => $blog->category->id])); ?>" class="categories-name"><?php echo e($blog->category->name); ?></a></div>
            </div>
            <h4 class="entry-title">
                <a href="<?php echo e($blog->getPublishLink()); ?>"><?php echo e($blog->title); ?></a>
            </h4>
            <div class="description"><?php echo e($blog->content_short); ?>.</div>
            <div class="readmore">
                <a class="btn-readmore" href="<?php echo e($blog->getPublishLink()); ?>"><?php echo app('translator')->get('Read More'); ?>...</a>
            </div>
        </div>
</article>

<?php /**PATH C:\xampp\htdocs\Modules\Themes\Providers/../Resources/views/default/includes/item_blog.blade.php ENDPATH**/ ?>