<?php if(Gate::check('manage project')): ?>
<li class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'projects' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('projects.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-share"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Project')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/client/subitems/projectmgmt.blade.php ENDPATH**/ ?>