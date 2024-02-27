<?php if(!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard')): ?>
<?php if(Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report') || Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
<li class="dash-item dash-hasmenu">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Receivable')); ?></span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
     <?php if(Gate::check('manage customer') || Gate::check('manage proposal') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note')): ?>
     <li class="dash-item <?php echo e(Request::route()->getName() == 'invoice.index' || Request::route()->getName() == 'invoice.create' || Request::route()->getName() == 'invoice.edit' || Request::route()->getName() == 'invoice.show' ? ' active' : ''); ?>">
      <a class="dash-link" href="<?php echo e(route('invoice.index')); ?>"><?php echo e(__('Invoice')); ?></a>
    </li>
    <li class="dash-item <?php echo e(Request::route()->getName() == 'revenue.index' || Request::route()->getName() == 'revenue.create' || Request::route()->getName() == 'revenue.edit' ? ' active' : ''); ?>">
      <a class="dash-link" href="<?php echo e(route('revenue.index')); ?>"><?php echo e(__('Revenue')); ?></a>
    </li>
    <li class="dash-item <?php echo e(Request::route()->getName() == 'credit.note' ? ' active' : ''); ?>">
      <a class="dash-link" href="<?php echo e(route('credit.note')); ?>"><?php echo e(__('Credit Note')); ?></a>
    </li>
     <?php endif; ?>
    <?php if(Gate::check('income report') || Gate::check('expense report') || Gate::check('income vs expense report') || Gate::check('tax report') || Gate::check('loss & profit report') || Gate::check('invoice report') || Gate::check('bill report') || Gate::check('stock report') || Gate::check('invoice report') || Gate::check('manage transaction') || Gate::check('statement report') || Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoice report')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'report.invoice.summary' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('report.invoice.summary')); ?>"><?php echo e(__('Invoice Summary')); ?></a>
        </li>
        <?php endif; ?>
      </ul>
    </li>
    <?php if(Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <li class="dash-item <?php echo e(Request::route()->getName() == 'receivable-print-setting' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('receivable.print.setting')); ?>"><?php echo e(__('Print')); ?></a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
    <?php endif; ?>
  </ul>
</li>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/receivable.blade.php ENDPATH**/ ?>