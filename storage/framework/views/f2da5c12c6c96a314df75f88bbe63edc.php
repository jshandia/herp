<?php if(Gate::check('manage bug report')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'bugs-report' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('bugs.view', 'list')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-bug"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Bugs')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/bugreports.blade.php ENDPATH**/ ?>