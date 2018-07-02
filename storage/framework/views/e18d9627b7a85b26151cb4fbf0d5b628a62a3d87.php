<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
<a href="<?php echo e(url('/posts/create')); ?>">New Post</a>
<a href="<?php echo e(url('/auth/authwelcome')); ?>">Review Posts</a>
<a href="<?php echo e(url('/posts/delete')); ?>">Delete Posts</a>
<a href="<?php echo e(url('/posts/archives')); ?>">Archives</a>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>