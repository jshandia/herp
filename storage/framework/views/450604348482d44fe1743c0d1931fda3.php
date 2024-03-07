<?php if(Gate::check('manage system settings')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'systems.index' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('systems.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-settings"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Settings')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/systemsetup.blade.php ENDPATH**/ ?>