<?php if(!empty($userPlan) &&  $userPlan->pos == 1): ?>
    <?php if(Gate::check('manage warehouse') || Gate::check('manage purchase') || Gate::check('manage pos') || Gate::check('manage print settings') || Gate::check('manage product & service') || Gate::check('manage product & service')): ?>
    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'warehouse' || Request::segment(1) == 'purchase' || Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::route()->getName() == 'pos.show' ? 'active dash-trigger' : ''); ?>">
        <a href="#!" class="dash-link ">
            <span class="dash-micon">
                <i class="ti ti-layers-difference"></i>
            </span>
            <span class="dash-mtext"><?php echo e(__('Logistic')); ?></span>
            <span class="dash-arrow">
                <i data-feather="chevron-right"></i>
            </span>
        </a>
        <ul class="dash-submenu">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage warehouse')): ?>
            <li class="dash-item <?php echo e(Request::route()->getName() == 'warehouse-transfer.index' || Request::route()->getName() == 'warehouse-transfer.show' ? ' active' : ''); ?>">
                <a class="dash-link" href="<?php echo e(route('warehouse-transfer.index')); ?>"><?php echo e(__('Transfer')); ?></a>
            </li>
            <?php endif; ?>
            <li class="dash-item dash-hasmenu">
                <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

                    <span class="dash-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="dash-submenu">
                    <?php if(Gate::check('manage product & service')): ?>
                    <li class="dash-item <?php echo e(Request::segment(1) == 'productstock' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('productstock.index')); ?>" class="dash-link">
                            <?php echo e(__('Product Stock')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="dash-item <?php echo e(request()->is('reports-warehouse') ? 'active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('report.warehouse')); ?>"><?php echo e(__('Warehouse')); ?></a>
                    </li>
                </ul>
            </li>
            <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'productservice' || Request::route()->getName() == 'warehouse.index' || Request::route()->getName() == 'warehouse.show' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit'  ? 'active dash-trigger' : ''); ?>">
                <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

                    <span class="dash-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="dash-submenu">
                    <?php if(Gate::check('manage product & service')): ?>
                    <li class="dash-item <?php echo e(Request::segment(1) == 'productservice' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('productservice.index')); ?>" class="dash-link">
                            <?php echo e(__('Product & Services')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage warehouse')): ?>
                    <li class="dash-item <?php echo e(Request::route()->getName() == 'warehouse.index' || Request::route()->getName() == 'warehouse.show' ? ' active' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('warehouse.index')); ?>"><?php echo e(__('Warehouse')); ?></a>
                    </li>
                    <?php endif; ?>
                    <li class="dash-item <?php echo e(Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' ? 'active dash-trigger' : ''); ?>">
                        <a class="dash-link" href="<?php echo e(route('product-unit.index')); ?>"><?php echo e(__('Field')); ?></a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/logistic.blade.php ENDPATH**/ ?>