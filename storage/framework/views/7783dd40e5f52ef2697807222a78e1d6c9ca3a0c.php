

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <a class="btn button btn-primary" href="/posts/create">Create New</a>
            <br><br>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Title </th>
                                <th> Description </th>
                                <th> </th>
                                <th> Action </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($post->id); ?> </td>
                                <td> <?php echo e($post->title); ?> </td>
                                <td> <?php echo e($post->description); ?> </td>
                                <td> <a href="/posts/<?php echo e($post->id); ?>" class="btn btn-info"> View </a> </td>
                                <td> <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-warning"> Edit </a> </td>
                                <td> 
                                    <form method="POST" action=" <?php echo e(route('posts.destroy', $post->id)); ?>">
                                        <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/index.blade.php ENDPATH**/ ?>