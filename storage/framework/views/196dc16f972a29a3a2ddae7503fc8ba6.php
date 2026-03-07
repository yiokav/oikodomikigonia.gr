<?php $__env->startSection('content'); ?>
<div class="py-vh-4 w-100 overflow-hidden bg-gray-100">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('ase.index')); ?>">ASE Makine</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e($product['name']); ?></li>
      </ol>
    </nav>

    <div class="row mb-5">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <?php if($product['image'] ?? null): ?>
          <img src="<?php echo e($product['image']); ?>" alt="<?php echo e($product['name']); ?>" class="img-fluid rounded">
        <?php else: ?>
          <div class="bg-dark text-light rounded d-flex align-items-center justify-content-center overflow-hidden" style="min-height: 320px;">
            <div class="text-center p-4">
              <span class="display-4 opacity-50">ASE</span>
              <p class="small mb-0 mt-2">Εικόνα προϊόντος από κατάλογο</p>
              <p class="small">Εκτελέστε: php artisan ase:extract-catalog-images</p>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-7">
        <h1 class="display-6 fw-bold"><?php echo e($product['name']); ?></h1>
        <?php if(!empty($product['category_label'])): ?>
          <p class="text-muted small mb-3"><?php echo e($product['category_label']); ?></p>
        <?php endif; ?>
        <?php if(!empty($product['description'])): ?>
          <div class="mb-4">
            <?php $__currentLoopData = $product['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $para): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <p class="mb-2"><?php echo e($para); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php if(!empty($product['specs'])): ?>
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Τεχνικά δεδομένα</h2>
      <div class="table-responsive">
        <table class="table table-bordered bg-white">
          <tbody>
            <?php $__currentLoopData = $product['specs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th class="bg-light text-nowrap" style="width: 40%;"><?php echo e($label); ?></th>
              <td><?php echo e($value); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <p class="small text-secondary mt-2">* Ανάλογα με την ταχύτητα του κινητήρα, την ποιότητα του κονιάματος, τη σύνθεση και την υφή, τον τύπο και την κατάσταση της αντλίας, διάμετρο σωλήνα, ύψος μεταφοράς.</p>
    </section>
    <?php endif; ?>

    <?php if(!empty($product['applications'])): ?>
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Πεδία εφαρμογής</h2>
      <p class="text-secondary small mb-3">Για όλα τα αντλήσιμα κονιάματα και εφαρμογές, όπως:</p>
      <ul class="list-unstyled row g-2">
        <?php $__currentLoopData = $product['applications']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="col-md-6 col-lg-4">
          <span class="text-primary me-2">•</span><?php echo e($item); ?>

        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </section>
    <?php endif; ?>

    <?php if(!empty($product['equipment'])): ?>
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Βασικός εξοπλισμός</h2>
      <ul class="list-group list-group-flush">
        <?php $__currentLoopData = $product['equipment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item ps-0 py-2 border-0"><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </section>
    <?php endif; ?>

    <?php if(empty($product['specs']) && empty($product['applications']) && empty($product['equipment']) && count($product['description'] ?? []) <= 1): ?>
    <p class="text-secondary">Για πλήρη τεχνικά χαρακτηριστικά, εξοπλισμό και πεδία εφαρμογής, επικοινωνήστε μαζί μας.</p>
    <?php endif; ?>

    <?php if($catalogPdf && file_exists(public_path('docs/' . $catalogPdf))): ?>
    <p class="mt-3 small">
      <a href="<?php echo e(asset('docs/' . $catalogPdf)); ?>" class="link-secondary" download>Λήψη πλήρους καταλόγου (PDF)</a>
    </p>
    <?php endif; ?>

    <div class="mt-5 pt-3 border-top">
      <a href="<?php echo e(route('ase.index')); ?>" class="btn btn-outline-secondary me-2">← Όλα τα προϊόντα ASE</a>
      <a href="<?php echo e(route('home')); ?>#contact" class="btn btn-warning">Επικοινωνία</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/ase/show.blade.php ENDPATH**/ ?>