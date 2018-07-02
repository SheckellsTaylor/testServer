<?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($post->category == 1): ?>
<div class="d-flex flex-collumn">

<div class="p-2">
  <p><?php echo e($post->category); ?></p>
      <a href="/auth/<?php echo e($post->id); ?>">
      <div class="card" style="width: 15rem;">

        <img class="card-img-top" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> <?php echo e($post->title); ?></h5></p>
        </div>
      </div>
      </a>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($post->category == 2): ?>
<div class="d-flex flex-collumn">

<div class="p-2">
  <p><?php echo e($post->category); ?></p>
      <a href="/auth/<?php echo e($post->id); ?>">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> <?php echo e($post->title); ?></h5></p>
        </div>
      </div>
      </a>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($post->category == 3): ?>
<div class="d-flex flex-collumn">

<div class="p-2">
  <p><?php echo e($post->category); ?></p>
      <a href="/auth/<?php echo e($post->id); ?>">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> <?php echo e($post->title); ?></h5></p>
        </div>
      </div>
      </a>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($post->category == 4): ?>
<div class="d-flex flex-collumn">

<div class="p-2">
  <p><?php echo e($post->category); ?></p>
      <a href="/auth/<?php echo e($post->id); ?>">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> <?php echo e($post->title); ?></h5></p>
        </div>
      </div>
      </a>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $postsl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($post->category == 5): ?>
<div class="d-flex flex-collumn">

<div class="p-2">
  <p><?php echo e($post->category); ?></p>
      <a href="/auth/<?php echo e($post->id); ?>">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> <?php echo e($post->title); ?></h5></p>
        </div>
      </div>
      </a>
</div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
