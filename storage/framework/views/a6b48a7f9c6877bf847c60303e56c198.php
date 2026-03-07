<?php $__env->startSection('content'); ?>
  <h1>Register a new account</h1>
  <form class="row" action="#" method="POST">
    <?php echo csrf_field(); ?>
    <div class="col-12">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3 form-check py-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="newsletter">
        <label class="form-check-label" for="exampleCheck1">If you really don´t want any newsletter <strong>check this box</strong>. Then you just agree to receive our marketing mails and product stuff. If you check this box <strong>we will not send out our newsletter</strong> to you at all...on mondays.</label>
      </div>
      <button type="submit" class="btn btn-primary btn-xl mb-4">Submit</button>
      <p class="small text-muted border-top py-2">By creating an account you agree to our <a href="<?php echo e(route('terms')); ?>">terms of service</a>.</p>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.minimal', ['title' => 'Register a new account', 'withSideImage' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/register.blade.php ENDPATH**/ ?>