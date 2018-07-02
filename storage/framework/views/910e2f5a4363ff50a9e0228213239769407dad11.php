
<?php $__env->startSection('categoryOne'); ?>
<ul>
<?php $__currentLoopData = $cateOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php $__env->stopSection(); ?>
<?php $__currentLoopData = $cateOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->startSection('categoryTwo'); ?>
<ul>
<?php $__currentLoopData = $cateTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('categoryThree'); ?>
<ul>
<?php $__currentLoopData = $cateThree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('categoryFour'); ?>
<ul>
<?php $__currentLoopData = $cateFour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('categoryFive'); ?>
<ul>
<?php $__currentLoopData = $cateFive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php $__env->stopSection(); ?>
