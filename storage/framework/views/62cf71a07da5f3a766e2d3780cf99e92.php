<?php if(!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard')): ?>
<?php if(Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report')): ?>
<li class="dash-item dash-hasmenu">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Sales')); ?></span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
    <li class="dash-item">
      <a class="dash-link" href="#"><?php echo e(__('Overview')); ?></a>
    </li>
    <?php if(Gate::check('manage proposal')): ?>
    <li class="dash-item <?php echo e(Request::segment(1) == 'proposal' ? 'active' : ''); ?>">
      <a class="dash-link" href="<?php echo e(route('proposal.index')); ?>"><?php echo e(__('Estimate')); ?></a>
    </li>
    <?php endif; ?>
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <li class="dash-item <?php echo e(Request::route()->getName() == 'report.sales' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('report.sales')); ?>"><?php echo e(__('Sales')); ?></a>
        </li>
      </ul>
    </li>
    <?php if(Gate::check('manage customer') || Gate::check('manage proposal') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <?php if(Gate::check('manage customer')): ?>
          <li class="dash-item <?php echo e(Request::segment(1) == 'customer' ? 'active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('customer.index')); ?>"><?php echo e(__('Customer')); ?></a>
          </li>
          <?php endif; ?>
          <?php if(Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
          <li class="dash-item <?php echo e(Request::route()->getName() == 'sales-print-setting' ? ' active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('sales.print.setting')); ?>"><?php echo e(__('Print')); ?></a>
          </li>
          <?php endif; ?>
      </ul>
    </li>
    <?php endif; ?>
  </ul>
</li>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/sales.blade.php ENDPATH**/ ?>