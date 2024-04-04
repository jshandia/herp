<?php if(Gate::check('show hrm dashboard') || Gate::check('show project dashboard') || Gate::check('show account dashboard') || Gate::check('show crm dashboard') || Gate::check('show pos dashboard')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == null ? 'active dash-trigger' : ''); ?>">
  <a href="<?php echo e(route('home')); ?>" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-home"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Home')); ?></span></a>
  </li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/dashboard.blade.php ENDPATH**/ ?>