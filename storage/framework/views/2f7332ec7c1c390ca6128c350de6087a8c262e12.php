

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
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/show.blade.php ENDPATH**/ ?>