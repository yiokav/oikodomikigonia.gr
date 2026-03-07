<?php $__env->startSection('content'); ?>
  <h1 class="display-1 fw-bold">Uuuups, something is broken...</h1>
  <p class="lead">The page you are looking for doesn't exist or has been moved.</p>
  <a href="<?php echo e(route('home')); ?>" class="link-fancy">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
    Go back to frontpage
  </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.minimal', ['title' => '404 - Page not found'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/errors/404.blade.php ENDPATH**/ ?>