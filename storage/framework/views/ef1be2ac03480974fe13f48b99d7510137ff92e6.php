<?php $__env->startSection('advertisment'); ?>
<div class="container">
  <div class="row">
    <div class="col backdr">
    </div>

    <div class="col backdr">

<img class="img-fluid"  src="<?php echo e(asset('storage/adver.jpg')); ?>" width="100%" alt="Smarter LifeStyle Network Logo">
 </div>

<div class="col backdr">
</div>


</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('side'); ?>
  <?php echo $__env->make('child', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('top'); ?>
  <?php echo $__env->make('homeTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('placeCover'); ?>
  <div class="col-9 ml-4" id="contBaseSlider">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('categoryOne'); ?>

   <div class="row" id="cateOnel">
     <div class="row"></div><div class="labs">
    <!--   <img  style=" height:105px;" src="<?php echo e(asset('storage/b.png')); ?>" alt="Card image cap">
-->
Automobile
      </div>
  <div class="d-flex flex-collumn strapbox cateol"  >
    <p>
      <span class="arrowBox">
      <i class="left" id="goToPrevSlide"></i><div class="bordMeL"></div>
    </span>
    </p>

<ul id="lightSlider">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->category == 1): ?>

<li class="zoom">

  <div class="d-flex flex-collumn">


  <div class="w-50" id="pos">

<!-- I Need to combine these two video tags to make a working code --->
<span id="widen">

        <div class="card text-center" style="width:20vw;">
          <div id="widenIt">
          <figure id="videoContainer">
            <video id="video" controls preload="metadata" poster="<?php echo e(asset('/storage/' . $post->image)); ?>">
              <source src="<?php echo e(asset('/storage/' . $post->video)); ?>" type="video/mp4">
            </video>
          </figure>
        <!--  <ul id="video-controls" class="controls">
              <li><button id="playpause" type="button">
                <img  style="width:25px; height:25px;" src="<?php echo e(asset('storage/Asset2.png')); ?>" alt="Card image cap">

              </button></li>
              <li class="progress">
                <progress id="progress" value="0" min="0">
                  <span id="progress-bar"></span>
                </progress>
              </li>
              <li><button id="mute" type="button">
                <img  style="width:25px; height:25px;" src="<?php echo e(asset('storage/Asset6.png')); ?>" alt="Card image cap">

              </button></li>
              <li><button id="volinc" type="button">
                <img  style="width:25px; height:25px;" src="<?php echo e(asset('storage/Asset4.png')); ?>" alt="Card image cap">

              </button></li>
              <li><button id="voldec" type="button">
                <img  style="width:25px; height:25px;" src="<?php echo e(asset('storage/Asset5.png')); ?>" alt="Card image cap">

              </button></li>

          </ul>
-->









        </div>

</span>
        <div class="card-body p-1" style="height:100px;">
    <a href="/posts/<?php echo e($post->id); ?>">
            <p class="card-text">    <h5 class="card-title center"> <?php echo e($post->title); ?></h5></p>
            </a>
          </div>
        </div>

  </div>
  </div>
  <?php endif; ?>


</li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

<p><i class="right" id="goToNextSlide"></i><div class="bordMe"></div>&nbsp</p>
                        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('categoryTwo'); ?>
  <div class="row" id="cateTwo">
<div class="d-flex flex-collumn strapbox" id="">
  <p><i class="left" id="goToPrevSlide1"></i></p>
<ul id="lightSlider1">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->category == 2): ?>
<li class="zoom">
  <div class="d-flex flex-collumn">


  <div class="w-50" id="pos">

        <a href="/posts/<?php echo e($post->id); ?>">
        <div class="card text-center" style="width:20vw;">

          <img class="card-img-top img-fluid" style="height: 30vh;" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
          <div class="card-body">

            <p class="card-text">    <h5 class="card-title center"> <?php echo e($post->title); ?></h5></p>
          </div>
        </div>
        </a>
  </div>
  </div>
  <?php endif; ?>


</li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
    <p><i class="right" id="goToNextSlide1"></i></p>
      </div>
          </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('categoryThree'); ?>
<div class="row hidden" id="cateThree">
<div class="d-flex flex-collumn strapbox">
    <p><i class="left" id="goToPrevSlide2"></i></p>
<ul id="lightSlider2">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->category == 3): ?>
<li class="zoom">
  <div class="d-flex flex-collumn">


  <div class="w-50" id="pos">

        <a href="/posts/<?php echo e($post->id); ?>">
        <div class="card text-center" style="width:13vw;">

          <img class="card-img-top img-fluid" style="height: 20vh;" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
          <div class="card-body">

            <p class="card-text">    <h5 class="card-title center"> <?php echo e($post->title); ?></h5></p>
          </div>
        </div>
        </a>
  </div>
  </div>
  <?php endif; ?>


</li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
      <p><i class="right" id="goToNextSlide2"></i></p>
        </div>
                </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('categoryFour'); ?>

  <div class="row hidden" id="cateFour">
<div class="d-flex flex-collumn strapbox">
<p><i class="left" id="goToPrevSlide3"></i></p>
<ul id="lightSlider3">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->category == 4): ?>
<li class="zoom">

  <div class="d-flex flex-collumn">


  <div class="w-50" id="pos">

        <a href="/posts/<?php echo e($post->id); ?>">
        <div class="card text-center" style="width:13vw;">

          <img class="card-img-top img-fluid" style="height: 20vh;" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
          <div class="card-body">

            <p class="card-text">    <h5 class="card-title center"> <?php echo e($post->title); ?></h5></p>
          </div>
        </div>
        </a>
  </div>
  </div>
  <?php endif; ?>


</li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
  <p><i class="right" id="goToNextSlide3"></i></p>
    </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('categoryFive'); ?>
    <div class="row hidden" id="cateFive">
<div class="d-flex flex-collumn strapbox">
    <p><i class="left" id="goToPrevSlide4"></i></p>
<ul id="lightSlider4">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($post->category == 5): ?>
<li class="zoom">

  <div class="d-flex flex-collumn">


  <div class="w-50" id="pos">

        <a href="/posts/<?php echo e($post->id); ?>">
        <div class="card text-center" style="width:13vw;">

          <img class="card-img-top img-fluid" style="height: 20vh;" src="<?php echo e(asset('/storage/' . $post->image)); ?>" alt="Card image cap">
          <div class="card-body">

            <p class="card-text">    <h5 class="card-title center"> <?php echo e($post->title); ?></h5></p>
          </div>
        </div>
        </a>
  </div>
  </div>
  <?php endif; ?>


</li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>
  <p><i class="right" id="goToNextSlide4"></i></p>
    </div>
      </div>
<?php $__env->stopSection(); ?>
