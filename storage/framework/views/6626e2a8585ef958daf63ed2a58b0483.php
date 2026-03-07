<!doctype html>
<html class="h-100" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="<?php echo e($metaDescription ?? ''); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/favicon-32x32.png')); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/favicon-16x16.png')); ?>">
  <title><?php echo e($title ?? 'Stride'); ?></title>
  <link rel="stylesheet" href="<?php echo e(asset($themeCss ?? 'css/theme.min.css')); ?>">
  <style>
    @font-face { font-family: 'Inter'; font-style: normal; font-weight: 300; font-display: swap;
      src: local(''), url('<?php echo e(asset('fonts/inter-v12-latin-300.woff2')); ?>') format('woff2'), url('<?php echo e(asset('fonts/inter-v12-latin-300.woff')); ?>') format('woff'); }
    @font-face { font-family: 'Inter'; font-style: normal; font-weight: 500; font-display: swap;
      src: local(''), url('<?php echo e(asset('fonts/inter-v12-latin-500.woff2')); ?>') format('woff2'), url('<?php echo e(asset('fonts/inter-v12-latin-500.woff')); ?>') format('woff'); }
    @font-face { font-family: 'Inter'; font-style: normal; font-weight: 700; font-display: swap;
      src: local(''), url('<?php echo e(asset('fonts/inter-v12-latin-700.woff2')); ?>') format('woff2'), url('<?php echo e(asset('fonts/inter-v12-latin-700.woff')); ?>') format('woff'); }
  </style>
</head>
<body class="d-flex h-100 w-100">
  <div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">
      <div class="col-12 <?php echo e(isset($withSideImage) && $withSideImage ? 'col-md-7 col-lg-6' : ''); ?> d-flex align-items-start flex-column px-vw-5">
        <header class="mb-auto py-vh-2 col-12">
          <a class="navbar-brand pe-4 fs-4" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo" class="logo" style="max-height: 32px;">
          </a>
        </header>
        <main class="mb-auto col-12">
          <?php echo $__env->yieldContent('content'); ?>
        </main>
      </div>
      <?php if(isset($withSideImage) && $withSideImage): ?>
        <div class="col-12 col-md-5 col-lg-6 bg-cover" style="background-image: url('<?php echo e(asset($sideImage ?? 'img/webp/colorful.webp')); ?>');"></div>
      <?php endif; ?>
    </div>
  </div>
  <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/layouts/minimal.blade.php ENDPATH**/ ?>