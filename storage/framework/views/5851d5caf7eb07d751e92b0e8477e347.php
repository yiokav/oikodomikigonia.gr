<?php $__env->startPush('styles'); ?>
<style>
  .ase-page { background: linear-gradient(180deg, #f8f9fa 0%, #fff 12rem); }
  .ase-hero { padding: 2.5rem 0 3rem; }
  .ase-hero h1 { color: #1a1a1a; letter-spacing: -0.02em; }
  .ase-hero .lead { color: #5c5c5c; max-width: 42rem; }
  .ase-section { padding: 2.5rem 0; }
  .ase-section:not(:last-child) { border-bottom: 1px solid rgba(0,0,0,.06); }
  .ase-category-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: #2d2d2d;
    margin-bottom: 1.25rem;
    padding-bottom: 0.5rem;
    letter-spacing: 0.01em;
  }
  .ase-product-card {
    height: 100%;
    background: #fff;
    border: 1px solid rgba(0,0,0,.08);
    border-radius: 10px;
    overflow: hidden;
    transition: transform .25s ease, box-shadow .25s ease;
    display: flex;
    flex-direction: column;
  }
  .ase-product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(0,0,0,.1);
    border-color: rgba(0,0,0,.1);
  }
  .ase-product-card .card-link { text-decoration: none; color: inherit; }
  .ase-product-card .card-link:hover { color: inherit; }
  .ase-product-card-img-wrap {
    aspect-ratio: 4/3;
    background: #f0f0f0;
    overflow: hidden;
    flex-shrink: 0;
  }
  .ase-product-card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .35s ease;
  }
  .ase-product-card:hover .ase-product-card-img-wrap img {
    transform: scale(1.03);
  }
  .ase-product-card .card-body {
    padding: 1.25rem 1.25rem 1rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }
  .ase-product-card-title {
    font-size: 1.05rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 0.35rem;
    line-height: 1.3;
  }
  .ase-product-card-desc {
    font-size: 0.875rem;
    color: #6b6b6b;
    line-height: 1.45;
    margin-bottom: 1rem;
    flex-grow: 1;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .ase-product-card .btn-ase {
    font-size: 0.8125rem;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    background: #1a1a1a;
    color: #fff;
    border: none;
    transition: background .2s ease, color .2s ease;
    align-self: flex-start;
  }
  .ase-product-card .btn-ase:hover {
    background: #333;
    color: #fff;
  }
  .ase-product-card .card-link:hover .ase-product-card-title { text-decoration: underline; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="ase-page">
  <div class="container">
    <header class="ase-hero">
      <h1 class="display-6 fw-bold">ASE Makine</h1>
      <p class="lead text-secondary mb-0">Επαγγελματικές αντλίες σοβά, κονιαμάτων, σκυροδέματος και εξοπλισμός για εργοτάξια. Κάθε προϊόν εμφανίζει εικόνα, περιγραφή, τεχνικά δεδομένα και εξοπλισμό από τον κατάλογο.</p>
    </header>

    <?php $__currentLoopData = $grouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catKey => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="ase-section" id="cat-<?php echo e($catKey); ?>">
      <h2 class="ase-category-title"><?php echo e($group['label']); ?></h2>
      <div class="row g-4">
        <?php $__currentLoopData = $group['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-lg-4">
          <article class="ase-product-card">
            <a href="<?php echo e(route('ase.show', $item['slug'])); ?>" class="card-link">
              <div class="ase-product-card-img-wrap">
                <?php if(!empty($item['image'])): ?>
                  <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['name']); ?>" loading="lazy">
                <?php else: ?>
                  <div class="w-100 h-100 d-flex align-items-center justify-content-center text-secondary small">χωρίς εικόνα</div>
                <?php endif; ?>
              </div>
              <div class="card-body">
                <h3 class="ase-product-card-title"><?php echo e($item['name']); ?></h3>
                <?php if(!empty($item['short'])): ?>
                  <p class="ase-product-card-desc"><?php echo e(Str::limit($item['short'], 110)); ?></p>
                <?php else: ?>
                  <p class="ase-product-card-desc">&nbsp;</p>
                <?php endif; ?>
              </div>
            </a>
            <div class="card-body pt-0">
              <a href="<?php echo e(route('ase.show', $item['slug'])); ?>" class="btn btn-ase">Λεπτομέρειες</a>
            </div>
          </article>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/ase/index.blade.php ENDPATH**/ ?>