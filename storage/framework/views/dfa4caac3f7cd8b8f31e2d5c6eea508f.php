<?php if(\Auth::user()->type == 'company'): ?>
<li class="dash-item dash-hasmenu">
    <a href="<?php echo e(route('notification-templates.index')); ?>" class="dash-link ">
        <span class="dash-micon">
            <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext"><?php echo e(__('Notification template')); ?></span>
    </a>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/notificationtemplate.blade.php ENDPATH**/ ?>