<?php $__env->startSection('authlogin'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header">Dashboard</div>
                <div class="d-flex flex-row justify-content-center">
  <div class="p-2">
<a href="<?php echo e(url('/auth/authcreate')); ?>"><div class="btn btn-primary btn-lg  m-3">New Post</div></a>
  </div>
  <div class="p-2">
<a href="<?php echo e(url('/auth/authindex')); ?>"><div class="btn btn-primary btn-lg  m-3">Review Posts</div></a>
  </div>

</div>


<!--<a href="<?php echo e(url('/posts/delete')); ?>">Delete Posts</a>
<a href="<?php echo e(url('/posts/archives')); ?>">Archives</a>    HIDDEN FOR PRESENT-->

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