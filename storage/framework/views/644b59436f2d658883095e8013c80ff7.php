<?php if(Gate::check('manage timesheet')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'timesheet-list' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('timesheet.list')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-clock"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Timesheet')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/timesheet.blade.php ENDPATH**/ ?>