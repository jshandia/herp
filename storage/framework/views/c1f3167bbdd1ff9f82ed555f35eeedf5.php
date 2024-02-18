<?php if(!empty($userPlan) &&  $userPlan->pos == 1): ?>
            <?php if(Gate::check('manage warehouse') ||
                    Gate::check('manage purchase') ||
                    Gate::check('manage pos') ||
                    Gate::check('manage print settings')): ?>
                <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'warehouse' || Request::segment(1) == 'purchase' || Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' || Request::route()->getName() == 'pos.show' ? ' active dash-trigger' : ''); ?>">
                    <a href="#!" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-layers-difference"></i>
                        </span>
                        <span class="dash-mtext">
                            <?php echo e(__('POS')); ?>

                        </span>
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul
                        class="dash-submenu <?php echo e(Request::segment(1) == 'warehouse' ||
                        Request::segment(1) == 'purchase' ||
                        Request::route()->getName() == 'pos.barcode' ||
                        Request::route()->getName() == 'pos.print' ||
                        Request::route()->getName() == 'pos.show'
                            ? 'show'
                            : ''); ?>">
                            <li
                                                class="dash-item <?php echo e(\Request::route()->getName() == 'pos.dashboard' ? ' active' : ''); ?>">
                                                <a class="dash-link"
                                                    href="<?php echo e(route('pos.dashboard')); ?>"><?php echo e(__(' Overview')); ?></a>
                                            </li>
                        
                        
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage pos')): ?>
                            <li class="dash-item <?php echo e(Request::route()->getName() == 'pos.index' ? ' active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('pos.index')); ?>"><?php echo e(__(' Add POS')); ?></a>
                            </li>
                            <li
                                class="dash-item <?php echo e(Request::route()->getName() == 'pos.report' || Request::route()->getName() == 'pos.show' ? ' active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('pos.report')); ?>"><?php echo e(__('POS')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create barcode')): ?>
                            <li
                                class="dash-item <?php echo e(Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' ? ' active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('pos.barcode')); ?>"><?php echo e(__('Print Barcode')); ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'reports-warehouse' || Request::segment(1) == 'reports-daily-purchase' || Request::segment(1) == 'reports-monthly-purchase' || Request::segment(1) == 'reports-daily-pos' || Request::segment(1) == 'reports-monthly-pos' || Request::segment(1) == 'reports-pos-vs-purchase' ? 'active dash-trigger' : ''); ?>" href="#crm-report" data-toggle="collapse" role="button" aria-expanded="<?php echo e(Request::segment(1) == 'reports-warehouse' || Request::segment(1) == 'reports-daily-purchase' || Request::segment(1) == 'reports-monthly-purchase' || Request::segment(1) == 'reports-daily-pos' || Request::segment(1) == 'reports-monthly-pos' || Request::segment(1) == 'reports-pos-vs-purchase' ? 'true' : 'false'); ?>">
                            <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

                                <span class="dash-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dash-submenu">
                                
                                
                                <li
                                    class="dash-item <?php echo e(request()->is('reports-daily-pos') || request()->is('reports-monthly-pos') ? 'active' : ''); ?>">
                                    <a class="dash-link"
                                        href="<?php echo e(route('report.daily.pos')); ?>"><?php echo e(__('POS Daily/Monthly Report')); ?></a>
                                </li>
                                <li
                                    class="dash-item <?php echo e(request()->is('reports-pos-vs-purchase') ? 'active' : ''); ?>">
                                    <a class="dash-link"
                                        href="<?php echo e(route('report.pos.vs.purchase')); ?>"><?php echo e(__('Pos VS Purchase Report')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage pos')): ?>
                            <li
                                class="dash-item <?php echo e(Request::route()->getName() == 'pos-print-setting' ? ' active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('pos.print.setting')); ?>"><?php echo e(__('Print Settings')); ?></a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/pos.blade.php ENDPATH**/ ?>