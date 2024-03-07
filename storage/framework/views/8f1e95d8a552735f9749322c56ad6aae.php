<?php if(\Auth::user()->type == 'super admin'): ?>
<li class="dash-item dash-hasmenu <?php echo e(request()->is('plan_request*') ? 'active' : ''); ?>">
  <a href="<?php echo e(route('plan_request.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-arrow-up-right-circle"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Plan Request')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/planreq.blade.php ENDPATH**/ ?>