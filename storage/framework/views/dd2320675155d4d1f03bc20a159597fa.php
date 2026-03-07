<!doctype html>
<html class="h-100" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="<?php echo e($metaDescription ?? 'A growing collection of ready to use components for the CSS framework Bootstrap 5'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/favicon-32x32.png')); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/favicon-16x16.png')); ?>">
  <meta name="HandheldFriendly" content="true">
  <title><?php echo e($title ?? 'Οικοδομική Γωνία'); ?></title>
  <link rel="stylesheet" href="<?php echo e(asset($themeCss ?? 'css/theme.css')); ?>">

  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('<?php echo e(asset('fonts/inter-v12-latin-300.woff2')); ?>') format('woff2'),
        url('<?php echo e(asset('fonts/inter-v12-latin-300.woff')); ?>') format('woff');
    }
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('<?php echo e(asset('fonts/inter-v12-latin-500.woff2')); ?>') format('woff2'),
        url('<?php echo e(asset('fonts/inter-v12-latin-500.woff')); ?>') format('woff');
    }
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('<?php echo e(asset('fonts/inter-v12-latin-700.woff2')); ?>') format('woff2'),
        url('<?php echo e(asset('fonts/inter-v12-latin-700.woff')); ?>') format('woff');
    }
  </style>
  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body data-bs-spy="scroll" data-bs-target="#navScroll" <?php if(isset($bodyClass)): ?> class="<?php echo e($bodyClass); ?>" <?php endif; ?>>

  <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php if (! empty(trim($__env->yieldContent('footer')))): ?>
    <?php echo $__env->yieldContent('footer'); ?>
  <?php else: ?>
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php endif; ?>

  <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/aos.js')); ?>"></script>
  <script>
    AOS.init({ duration: 800 });
  </script>
  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    if (header) {
      const header_height = header.offsetHeight;
      const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
      const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");
      window.addEventListener('scroll', function () {
        scrollpos = window.scrollY;
        if (scrollpos >= header_height) add_class_on_scroll();
        else remove_class_on_scroll();
      });
    }
  </script>
  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/layouts/app.blade.php ENDPATH**/ ?>