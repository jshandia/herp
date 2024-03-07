<?php if(Gate::check('manage project task')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'calendar' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('task.calendar', ['all'])); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-calendar"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Task Calender')); ?></span>
  </a>
</li>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/taskcal.blade.php ENDPATH**/ ?>