<?php echo $__env->make('layouts.main.header.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <?php echo $__env->yieldContent('stylesheets'); ?>

<?php echo $__env->make('layouts.main.header.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('layouts.main.footer.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <?php echo $__env->yieldContent('scripts'); ?>

<?php echo $__env->make('layouts.main.footer.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
