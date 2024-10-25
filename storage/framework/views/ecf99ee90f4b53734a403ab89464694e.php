
<?php $__env->startPush('title'); ?>
    <title> home</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
    <h1 class="'text-center">
         Home page
    </h1>
<?php $__env->stopSection(); ?>

<!--<a href="/">Welcome page</a>
<a href="/about/abc">About page</a> -->
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/home.blade.php ENDPATH**/ ?>