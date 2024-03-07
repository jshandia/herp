<?php if(Gate::check('manage contract')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : ''); ?>">
  <a href="<?php echo e(route('contract.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-rocket"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Contract')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/contractmgmt.blade.php ENDPATH**/ ?>