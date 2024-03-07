<?php if(Gate::check('manage client dashboard')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'dashboard' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('client.dashboard.view')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-home"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Dashboard')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/dashboard.blade.php ENDPATH**/ ?>