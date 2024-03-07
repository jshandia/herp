<?php if(Gate::check('manage project task')): ?>
<li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'taskboard' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('taskBoard.view', 'list')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-list-check"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Tasks')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/taskmgmt.blade.php ENDPATH**/ ?>