<?php if(Gate::check('manage coupon')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'coupons' ? 'active' : ''); ?>">
  <a href="<?php echo e(route('coupons.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-gift"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Coupon')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/couponmgmt.blade.php ENDPATH**/ ?>