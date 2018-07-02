<?php $__env->startSection('content'); ?>
<div class="container">
<h1> <?php echo e($post->title); ?></h1>

<?php echo e($post->body); ?>

<br>

<?php echo e($post->metades); ?>

<?php echo e($post->metaauth); ?>

<?php echo e($post->metakey); ?>



<img src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="is there an image"/>
<video src="<?php echo e(asset('/storage/' . $post->video)); ?>" alt="is there an video"/>

<?php echo e($post->video); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>