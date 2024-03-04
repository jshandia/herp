<?php if(\Auth::user()->type != 'super admin'): ?>
<li class="dash-item dash-hasmenu">
    <a href="#!" class="dash-link ">
        <span class="dash-micon">
            <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext"><?php echo e(__('Others')); ?></span>
        <span class="dash-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="dash-submenu">
        <li class="dash-item">
            <a href="<?php echo e(route('support.index')); ?>" class="dash-link">
                <span class="dash-mtext"><?php echo e(__('Support')); ?></span>
            </a>
        </li>
        <li class="dash-item">
            <a href="<?php echo e(route('zoom-meeting.index')); ?>" class="dash-link">
                <span class="dash-mtext"><?php echo e(__('Zoom Meeting')); ?></span>
            </a>
        </li>
        <li class="dash-item">
            <a href="<?php echo e(url('chats')); ?>" class="dash-link">
                <span class="dash-mtext"><?php echo e(__('Messenger')); ?></span>
            </a>
        </li>
    </ul>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/others.blade.php ENDPATH**/ ?>