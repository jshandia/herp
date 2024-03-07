<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'email_template' || Request::route()->getName() == 'manage.email.language' ? ' active dash-trigger' : 'collapsed'); ?>">
  <a href="<?php echo e(route('manage.email.language', [$emailTemplate->id, \Auth::user()->lang])); ?>" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-template"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Email Template')); ?></span>
  </a>
</li><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/superadmin/subitems/emailtemplate.blade.php ENDPATH**/ ?>