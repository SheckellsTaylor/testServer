<?php $__env->startSection('metaauth'); ?>
<?php echo e($post->metaauth); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('category'); ?>
<?php echo e($post->category); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('metades'); ?>
<?php echo e($post->metades); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('metakey'); ?>
<?php echo e($post->metakey); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
<!--<div class="col"></div>-->
  <div class="col-6 align-middle text-center mt-5 pt-5">
  <div class="container ml-3 mr-5 pl-5 pr-5">

<p class="text break ">   <h1 class="display-4 break"> <?php echo e(nl2br(e($post->title))); ?>    </h1></p>

  </div>

  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('headOne'); ?>
<p class="text break "><h2>
<?php echo e(nl2br(e($post->headingOne))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyOne'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->body))); ?>


</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('headTwo'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingTwo))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyTwo'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodyTwo))); ?>

</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('headThree'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingThree))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyThree'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodyThree))); ?>

</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headFour'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingFour))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyFour'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodyFour))); ?>

</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headFive'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingFive))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyFive'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodyFive))); ?>

</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('headSix'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingSix))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodySix'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodySix))); ?>

</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('headSeven'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headSeven))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodySeven'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodySeven))); ?>

</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('headEight'); ?>
<p class="text break">
  <h2>
<?php echo e(nl2br(e($post->headingEight))); ?>

</h2>
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyEight'); ?>
<p class="text break">
<?php echo e(nl2br(e($post->bodyEight))); ?>

</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('image'); ?>
<div class="row posthold">
  <div class="text-left">
<div class="imspace">
  <img class="img-fluid float-right w-50 m-3" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">

</div>
<?php $__env->stopSection(); ?>
<!--img-fluid w-100" style="height:40vh;-->
<?php $__env->startSection('video'); ?>
<figure id="videoContainer">
  <video id="video" controls preload="metadata" poster="<?php echo e(asset('/storage/' . $post->image)); ?>">
    <source src="<?php echo e(asset('/storage/' . $post->video)); ?>" type="video/mp4">
  </video>
  <figcaption>&copy; Smarter Lifestyle Network | <a href="link">Link here</a></figcaption>
</figure>
<ul id="video-controls" class="controls">
    <li><button id="playpause" type="button">Play/Pause</button></li>
    <li class="progress">
      <progress id="progress" value="0" min="0">
        <span> id="progress-bar"></span>
      </progress>
    </li>
    <li><button id="mute" type="button">Mute/Unmute</button></li>
    <li><button id="volinc" type="button">Vol+</button></li>
    <li><button id="voldec" type="button">Vol -</button></li>
    <li><button id="fs" type="button">Fullscreen</button></li>
</ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('spacer'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.enter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>