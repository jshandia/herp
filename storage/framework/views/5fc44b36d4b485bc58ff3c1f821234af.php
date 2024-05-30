<?php if(\Auth::user()->type == 'company' || \Auth::user()->type == 'HR' && (Gate::check('manage user') || Gate::check('manage role') || Gate::check('manage client'))): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'clients' || Request::segment(1) == 'userlogs' ? ' active dash-trigger' : ''); ?>">
    <a href="#!" class="dash-link ">
        <span class="dash-micon">
            <i class="ti ti-users"></i>
        </span>
        <span class="dash-mtext"><?php echo e(__('User Management')); ?></span>
        <span class="dash-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="dash-submenu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit' ? ' active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('users.index')); ?>"><?php echo e(__('User')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage role')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'roles.index' || Request::route()->getName() == 'roles.create' || Request::route()->getName() == 'roles.edit' ? ' active' : ''); ?> ">
            <a class="dash-link" href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Role')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage client')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'clients.index' || Request::segment(1) == 'clients' || Request::route()->getName() == 'clients.edit' ? ' active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('clients.index')); ?>"><?php echo e(__('Client')); ?></a>
        </li>
        <?php endif; ?>
        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage user')): ?> 
        <li class="dash-item dash-hasmenu">
            <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <li class="dash-item <?php echo e((Request::route()->getName() == 'user.userlog' || Request::segment(1) == 'userlogs') ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('user.userlog')); ?>"><?php echo e(__('Logs History')); ?></a> 
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage account permissions')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'permissions.index' || Request::segment(1) == 'permissions' || Request::route()->getName() == 'permissions.edit' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('permissions.index')); ?>"><?php echo e(__('Permissions')); ?></a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?> 
    </ul>
</li>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/usermgmt.blade.php ENDPATH**/ ?>