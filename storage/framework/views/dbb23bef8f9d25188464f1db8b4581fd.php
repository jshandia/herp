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
</li>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/submenus/sales.blade.php ENDPATH**/ ?>