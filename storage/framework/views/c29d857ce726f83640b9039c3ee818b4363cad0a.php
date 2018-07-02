<!doctype>
<html>
<head>
  <title>Category 1</title>
</head>

<body>

<ul>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($category->category); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<a href="<?php echo e(url('/category/categoryOne/catOne')); ?>">Cat</a>
</body>
</html>
