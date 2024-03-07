<?php if(Gate::check('manage order')): ?>
<li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'orders' ? 'active' : ''); ?>">
  <a href="<?php echo e(route('order.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-shopping-cart-plus"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Order')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/ordermgmt.blade.php ENDPATH**/ ?>