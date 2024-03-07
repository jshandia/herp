<?php if(\Auth::user()->type == 'super admin'): ?>
  <?php echo $__env->make('landingpage::menu.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/superadminlanding.blade.php ENDPATH**/ ?>