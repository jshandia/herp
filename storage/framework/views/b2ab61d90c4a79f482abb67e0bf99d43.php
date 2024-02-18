
<?php if(!empty($userPlan) &&  $userPlan->pos == 1): ?>
    <?php if(Gate::check('manage warehouse')||Gate::check('manage purchase')||Gate::check('manage pos')||Gate::check('manage print settings')): ?>
        <li class="dash-item dash-hasmenu">
            <a href="#!" class="dash-link">
                <span class="dash-micon">
                    <i class="ti ti-layers-difference"></i>
                </span>
                <span class="dash-mtext">
                    <?php echo e(__('Procurement')); ?>

                </span>
                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage purchase')): ?>
                    <li class="dash-item">
                        <a class="dash-link" href="<?php echo e(route('purchase.index')); ?>"><?php echo e(__('Purchase')); ?></a>
                    </li>
                <?php endif; ?>
                <li class="dash-item dash-hasmenu">
                    <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        <li class="dash-item">
                            <a class="dash-link" href="<?php echo e(route('report.daily.purchase')); ?>"><?php echo e(__('Purchase')); ?></a>
                        </li>
                    </ul>
                </li>
                <li class="dash-item dash-hasmenu">
                    <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        <?php if(Gate::check('manage vender')): ?>
                            <li class="dash-item">
                                <a class="dash-link" href="<?php echo e(route('vender.index')); ?>"><?php echo e(__('Suppiler')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/procurement.blade.php ENDPATH**/ ?>