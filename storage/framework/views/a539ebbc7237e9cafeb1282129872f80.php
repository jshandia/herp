<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit' ? ' active' : ''); ?>">
  <a href="<?php echo e(route('users.index')); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-users"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('User')); ?></span>
  </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/usermgmt.blade.php ENDPATH**/ ?>