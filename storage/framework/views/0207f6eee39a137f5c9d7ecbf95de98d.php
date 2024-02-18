<?php if(\Auth::user()->type != 'super admin'): ?>
            <?php if(Gate::check('manage company plan') || Gate::check('manage order') || Gate::check('manage company settings')): ?>
                <li
                    class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'settings' ||
                    Request::segment(1) == 'plans' ||
                    Request::segment(1) == 'stripe' ||
                    Request::segment(1) == 'order'
                        ? ' active dash-trigger'
                        : ''); ?>">
                    <a href="#!" class="dash-link">
                        <span class="dash-micon"><i class="ti ti-settings"></i></span><span
                            class="dash-mtext"><?php echo e(__('Settings')); ?></span>
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="dash-submenu">
                        <?php if(\Auth::user()->type == 'company'): ?>
                            <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'notification-templates' ? ' active' : ''); ?>">
                                <a href="<?php echo e(route('notification-templates.index')); ?>"
                                    class="dash-link"><?php echo e(__('Notification Templates')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(Gate::check('manage company settings')): ?>
                            <li
                                class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'settings' ? ' active' : ''); ?>">
                                <a href="<?php echo e(route('settings')); ?>"
                                    class="dash-link"><?php echo e(__('System Settings')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(Gate::check('manage company plan')): ?>
                            <li
                                class="dash-item<?php echo e(Request::route()->getName() == 'plans.index' || Request::route()->getName() == 'stripe' ? ' active' : ''); ?>">
                                <a href="<?php echo e(route('plans.index')); ?>"
                                    class="dash-link"><?php echo e(__('Setup Subscription Plan')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Gate::check('manage order') && Auth::user()->type == 'company'): ?>
                            <li class="dash-item <?php echo e(Request::segment(1) == 'order' ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('order.index')); ?>" class="dash-link"><?php echo e(__('Order')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/systemsetup.blade.php ENDPATH**/ ?>