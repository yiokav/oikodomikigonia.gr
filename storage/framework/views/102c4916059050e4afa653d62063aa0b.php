<nav id="navScroll" class="navbar navbar-expand-lg navbar-light <?php echo e($navFixed ?? ''); ?>" tabindex="0">
  <div class="container">
    <a class="navbar-brand pe-4 fs-4" href="<?php echo e(route('home')); ?>">
      <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>#services">Προϊόντα</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('ase.index')); ?>">ASE Makine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>#aboutus">Ποιοι είμαστε</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>#contact">Επικοινωνία</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('home')); ?>#reviews">Κριτικές</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/partials/nav.blade.php ENDPATH**/ ?>