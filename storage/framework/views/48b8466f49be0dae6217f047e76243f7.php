<?php if(Gate::check('manage project')): ?>
<li class="dash-item  <?php echo e(Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : ''); ?>">
  <a class="dash-link" href="<?php echo e(route('project_report.index')); ?>">
    <span class="dash-micon">
      <i class="ti ti-chart-line"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Project Report')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/projectreport.blade.php ENDPATH**/ ?>