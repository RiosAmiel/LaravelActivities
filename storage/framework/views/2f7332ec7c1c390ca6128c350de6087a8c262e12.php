

<?php $__env->startSection('content'); ?>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/posts">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Title : <?php echo e($post->title); ?> <br>
                    Description : <?php echo e($post->description); ?> <br>
                    Created At : <?php echo e($post->created_at); ?> <br>
                    Image: 
                    <?php if($post->img): ?>
                    <img src="<?php echo e(URL::asset('/storage/img/'.$post->img)); ?>" alt=" <?php echo e($post->img); ?>" style="width:100px; height: 100px"/>
                    <?php else: ?>
                        No image available
                    <?php endif; ?>
                    <p>Comments Section:</p>
                    <?php if($comments): ?>
                    
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($comment->description); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <h4> Add Comment </h4>
                    <form method="POST" action="<?php echo e(route('comments.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" cols="30" rows="2"></textarea>
                            <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/show.blade.php ENDPATH**/ ?>