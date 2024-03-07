<?php if(Gate::check('manage deal')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'deals' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('deals.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-rocket"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Deals')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/dealmgmt.blade.php ENDPATH**/ ?>