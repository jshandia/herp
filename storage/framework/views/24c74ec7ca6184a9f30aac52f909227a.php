<?php if(!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard')): ?>
  <?php if(Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report')): ?>
    <li class="dash-item dash-hasmenu">
      <a href="#!" class="dash-link ">
        <span class="dash-micon">
          <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext"><?php echo e(__('Payable')); ?></span>
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
          <?php if(Gate::check('manage vender') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note')): ?>
          <li
              class="dash-item <?php echo e(Request::route()->getName() == 'bill.index' || Request::route()->getName() == 'bill.create' || Request::route()->getName() == 'bill.edit' || Request::route()->getName() == 'bill.show' ? ' active' : ''); ?>">
              <a class="dash-link"
                  href="<?php echo e(route('bill.index')); ?>"><?php echo e(__('Bill')); ?></a>
          </li>
          <li
              class="dash-item <?php echo e(Request::route()->getName() == 'expense.index' || Request::route()->getName() == 'expense.create' || Request::route()->getName() == 'expense.edit' || Request::route()->getName() == 'expense.show' ? ' active' : ''); ?>">
              <a class="dash-link"
                  href="<?php echo e(route('expense.index')); ?>"><?php echo e(__('Expense')); ?></a>
          </li>
          <li
              class="dash-item <?php echo e(Request::route()->getName() == 'payment.index' || Request::route()->getName() == 'payment.create' || Request::route()->getName() == 'payment.edit' ? ' active' : ''); ?>">
              <a class="dash-link"
                  href="<?php echo e(route('payment.index')); ?>"><?php echo e(__('Payment')); ?></a>
          </li>
          <li
              class="dash-item  <?php echo e(Request::route()->getName() == 'debit.note' ? ' active' : ''); ?>">
              <a class="dash-link"
                  href="<?php echo e(route('debit.note')); ?>"><?php echo e(__('Debit Note')); ?></a>
          </li>
          <?php endif; ?>
          <?php if(Gate::check('income report') || Gate::check('expense report') || Gate::check('income vs expense report') || Gate::check('tax report') || Gate::check('loss & profit report') || Gate::check('invoice report') || Gate::check('bill report') || Gate::check('stock report') || Gate::check('invoice report') || Gate::check('manage transaction') || Gate::check('statement report')): ?>
          <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'report' || Request::segment(1) == 'reports-monthly-cashflow' || Request::segment(1) == 'reports-quarterly-cashflow' ? 'active dash-trigger ' : ''); ?>">
            <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

              <span class="dash-arrow">
                <i data-feather="chevron-right"></i>
              </span>
            </a>
            <ul class="dash-submenu">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bill report')): ?>
              <li class="dash-item <?php echo e(Request::route()->getName() == 'report.bill.summary' ? ' active' : ''); ?>">
                <a class="dash-link" href="<?php echo e(route('report.bill.summary')); ?>"><?php echo e(__('Bill Summary')); ?></a>
              </li>
              <?php endif; ?>
            </ul>
            
          </li>
          <?php endif; ?>
      </ul>
    </li>
  <?php endif; ?>
<?php endif; ?>

<!--
  

--><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/submenus/payable.blade.php ENDPATH**/ ?>