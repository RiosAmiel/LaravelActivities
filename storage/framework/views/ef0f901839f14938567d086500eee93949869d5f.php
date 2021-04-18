

<?php $__env->startSection('content'); ?>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn button btn-info" href="/posts">Back</a> <br><br>
                  <div class="card">       
                    <div class="card-body">
                        <form method="POST" action=" <?php echo e(route('posts.update', $post->id)); ?> ">
                            <?php echo method_field('PATCH'); ?>
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Title')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>" required  autofocus>        
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
    
                                <div class="col-md-6">
                                    <textarea name="description" class="form-control" value="<?php echo e($post->description); ?>"><?php echo e($post->description); ?></textarea>
                                
                                </div>
                            </div>
                            
                               
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Submit')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/edit.blade.php ENDPATH**/ ?>