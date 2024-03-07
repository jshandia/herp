<?php if(Gate::check('manage plan')): ?>
<li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'plans' ? 'active' : ''); ?>">
  <a href="<?php echo e(route('plans.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-trophy"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Plan')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/plan.blade.php ENDPATH**/ ?>