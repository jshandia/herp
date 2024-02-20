<?php if(!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard')): ?>
<?php if(Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report')): ?>
<li class="dash-item dash-hasmenu <?php echo e(Request::route()->getName() == 'print-setting' || Request::segment(1) == 'vender' || Request::segment(1) == 'bank-account' || Request::segment(1) == 'bank-transfer' || Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' || (Request::segment(1) == 'transaction' &&     Request::segment(2) != 'ledger' &&     Request::segment(2) != 'balance-sheet' &&     Request::segment(2) != 'trial-balance') || Request::segment(1) == 'goal' || Request::segment(1) == 'budget' || Request::segment(1) == 'chart-of-account' || Request::segment(1) == 'journal-entry' || Request::segment(2) == 'ledger' || Request::segment(2) == 'balance-sheet' || Request::segment(2) == 'trial-balance' || Request::segment(2) == 'profit-loss' ? ' active dash-trigger' : ''); ?>">
    <a href="#!" class="dash-link">
        <span class="dash-micon">
            <i class="ti ti-box"></i>
        </span>
        <span class="dash-mtext"><?php echo e(__('Accounting')); ?></span>
        <span class="dash-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="dash-submenu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show account dashboard')): ?>
        <li class="dash-item <?php echo e(Request::segment(1) == null || Request::segment(1) == 'account-dashboard' ? ' active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__(' Overview')); ?></a>
        </li>
        <?php endif; ?>
        <?php if(Gate::check('manage bank account') || Gate::check('manage bank transfer')): ?>
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'bank-account' || Request::segment(1) == 'bank-transfer' ? 'active dash-trigger' : ''); ?>">
            <a class="dash-link" href="#"><?php echo e(__('Banking')); ?>

                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <li class="dash-item <?php echo e(Request::route()->getName() == 'bank-account.index' || Request::route()->getName() == 'bank-account.create' || Request::route()->getName() == 'bank-account.edit' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('bank-account.index')); ?>"><?php echo e(__('Account')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'bank-transfer.index' || Request::route()->getName() == 'bank-transfer.create' || Request::route()->getName() == 'bank-transfer.edit' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('bank-transfer.index')); ?>"><?php echo e(__('Transfer')); ?></a>
                </li>
            </ul>
        </li>
        <?php endif; ?>
        <?php if(Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report')): ?>
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'chart-of-account' || Request::segment(1) == 'journal-entry' || Request::segment(2) == 'profit-loss' || Request::segment(2) == 'ledger' || Request::segment(2) == 'balance-sheet' || Request::segment(2) == 'trial-balance' ? 'active dash-trigger' : ''); ?>">
            <a class="dash-link" href="#"><?php echo e(__('Double Entry')); ?>

                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <li class="dash-item <?php echo e(Request::route()->getName() == 'chart-of-account.index' || Request::route()->getName() == 'chart-of-account.show' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('chart-of-account.index')); ?>"><?php echo e(__('Chart of Accounts')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'journal-entry.edit' || Request::route()->getName() == 'journal-entry.create' || Request::route()->getName() == 'journal-entry.index' || Request::route()->getName() == 'journal-entry.show' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('journal-entry.index')); ?>"><?php echo e(__('Journal Account')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.ledger' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.ledger', 0)); ?>"><?php echo e(__('Ledger Summary')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.balance.sheet' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.balance.sheet')); ?>"><?php echo e(__('Balance Sheet')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.profit.loss' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.profit.loss')); ?>"><?php echo e(__('Profit & Loss')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'trial.balance' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('trial.balance')); ?>"><?php echo e(__('Trial Balance')); ?></a>
                </li>
            </ul>
        </li>
        <?php endif; ?>
        <?php if(\Auth::user()->type == 'company'): ?>
        <li class="dash-item <?php echo e(Request::segment(1) == 'budget' ? 'active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('budget.index')); ?>"><?php echo e(__('Budget Planner')); ?></a>
        </li>
        <?php endif; ?>
        <?php if(Gate::check('manage goal')): ?>
        <li class="dash-item <?php echo e(Request::segment(1) == 'goal' ? 'active' : ''); ?>">
            <a class="dash-link" href="<?php echo e(route('goal.index')); ?>"><?php echo e(__('Financial Goal')); ?></a>
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('statement report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.account.statement' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.account.statement')); ?>"><?php echo e(__('Account Statement')); ?></a>
                </li>
                <?php endif; ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.receivables' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.receivables')); ?>"><?php echo e(__('Receivables')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.payables' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.payables')); ?>"><?php echo e(__('Payables')); ?></a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stock report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.product.stock.report' ? ' active' : ''); ?>">
                    <a href="<?php echo e(route('report.product.stock.report')); ?>" class="dash-link"><?php echo e(__('Product Stock')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('loss & profit report')): ?>
                <li class="dash-item <?php echo e(request()->is('reports-monthly-cashflow') || request()->is('reports-quarterly-cashflow') ? 'active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.monthly.cashflow')); ?>"><?php echo e(__('Cash Flow')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage transaction')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'transaction.index' || Request::route()->getName() == 'transfer.create' || Request::route()->getName() == 'transaction.edit' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('transaction.index')); ?>"><?php echo e(__('Transaction')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.income.summary' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.income.summary')); ?>"><?php echo e(__('Income Summary')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.expense.summary' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.expense.summary')); ?>"><?php echo e(__('Expense Summary')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income vs expense report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.income.vs.expense.summary' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.income.vs.expense.summary')); ?>"><?php echo e(__('Income VS Expense')); ?></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tax report')): ?>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'report.tax.summary' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('report.tax.summary')); ?>"><?php echo e(__('Tax Summary')); ?></a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <?php if(Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings')): ?>
        <li class="dash-item dash-hasmenu">
            <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <li class="dash-item <?php echo e(Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' ? 'active dash-trigger' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('taxes.index')); ?>"><?php echo e(__('Field')); ?></a>
                </li>
                <li class="dash-item <?php echo e(Request::route()->getName() == 'print-setting' ? ' active' : ''); ?>">
                    <a class="dash-link" href="<?php echo e(route('print.setting')); ?>"><?php echo e(__('Print')); ?></a>
                </li>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/accounting.blade.php ENDPATH**/ ?>