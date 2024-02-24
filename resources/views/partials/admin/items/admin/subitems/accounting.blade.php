@if (!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard'))
@if (Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
<li class="dash-item dash-hasmenu {{ Request::route()->getName() == 'print-setting' || Request::segment(1) == 'bank-account' || Request::segment(1) == 'bank-transfer' || Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' || (Request::segment(1) == 'transaction' &&     Request::segment(2) != 'ledger' &&     Request::segment(2) != 'balance-sheet' &&     Request::segment(2) != 'trial-balance') || Request::segment(1) == 'goal' || Request::segment(1) == 'budget' || Request::segment(1) == 'chart-of-account' || Request::segment(1) == 'journal-entry' || Request::segment(2) == 'ledger' || Request::segment(2) == 'balance-sheet' || Request::segment(2) == 'trial-balance' || Request::segment(2) == 'profit-loss' ? ' active dash-trigger' : '' }}">
    <a href="#!" class="dash-link">
        <span class="dash-micon">
            <i class="ti ti-box"></i>
        </span>
        <span class="dash-mtext">{{ __('Accounting') }}</span>
        <span class="dash-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="dash-submenu">
        @can('show account dashboard')
        <li class="dash-item {{ Request::segment(1) == null || Request::segment(1) == 'account-dashboard' ? ' active' : '' }}">
            <a class="dash-link" href="{{ route('dashboard') }}">{{ __(' Overview') }}</a>
        </li>
        @endcan
        @if (Gate::check('manage bank account') || Gate::check('manage bank transfer'))
        <li class="dash-item {{ Request::route()->getName() == 'bank-transfer.index' || Request::route()->getName() == 'bank-transfer.create' || Request::route()->getName() == 'bank-transfer.edit' ? ' active' : '' }}">
            <a class="dash-link" href="{{ route('bank-transfer.index') }}">{{ __('Transfer') }}</a>
        </li>
        @endif
        @if (Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
        <li class="dash-item {{ Request::route()->getName() == 'journal-entry.edit' || Request::route()->getName() == 'journal-entry.create' || Request::route()->getName() == 'journal-entry.index' || Request::route()->getName() == 'journal-entry.show' ? ' active' : '' }}">
            <a class="dash-link" href="{{ route('journal-entry.index') }}">{{ __('Journal Account') }}</a>
        </li>
        @endif
        @if (\Auth::user()->type == 'company')
        <li class="dash-item {{ Request::segment(1) == 'budget' ? 'active' : '' }}">
            <a class="dash-link" href="{{ route('budget.index') }}">{{ __('Budget Planner') }}</a>
        </li>
        @endif
        @if (Gate::check('manage goal'))
        <li class="dash-item {{ Request::segment(1) == 'goal' ? 'active' : '' }}">
            <a class="dash-link" href="{{ route('goal.index') }}">{{ __('Financial Goal') }}</a>
        </li>
        @endif
        @if (Gate::check('income report') || Gate::check('expense report') || Gate::check('income vs expense report') || Gate::check('tax report') || Gate::check('loss & profit report') || Gate::check('invoice report') || Gate::check('bill report') || Gate::check('stock report') || Gate::check('invoice report') || Gate::check('manage transaction') || Gate::check('statement report') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'report' || Request::segment(1) == 'chart-of-account' || Request::segment(1) == 'reports-monthly-cashflow' || Request::segment(1) == 'reports-quarterly-cashflow' || Request::segment(2) == 'profit-loss' || Request::segment(2) == 'ledger' || Request::segment(2) == 'balance-sheet' || Request::segment(2) == 'trial-balance' ? 'active dash-trigger ' : '' }}">
            <a class="dash-link" href="#">{{ __('Reports') }}
                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                @if(Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
                <li class="dash-item dash-hasmenu {{ Request::segment(2) == 'profit-loss' || Request::segment(2) == 'ledger' || Request::segment(2) == 'balance-sheet' || Request::segment(2) == 'trial-balance' ? 'active dash-trigger' : '' }}">
                    <a class="dash-link" href="#">{{ __('Double Entry') }}
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        <li class="dash-item {{ Request::route()->getName() == 'report.ledger' ? ' active' : '' }}">
                            <a class="dash-link" href="{{ route('report.ledger', 0) }}">{{ __('Ledger Summary') }}</a>
                        </li>
                        <li class="dash-item {{ Request::route()->getName() == 'report.balance.sheet' ? ' active' : '' }}">
                            <a class="dash-link" href="{{ route('report.balance.sheet') }}">{{ __('Balance Sheet') }}</a>
                        </li>
                        <li class="dash-item {{ Request::route()->getName() == 'report.profit.loss' ? ' active' : '' }}">
                            <a class="dash-link" href="{{ route('report.profit.loss') }}">{{ __('Profit & Loss') }}</a>
                        </li>
                        <li class="dash-item {{ Request::route()->getName() == 'trial.balance' ? ' active' : '' }}">
                            <a class="dash-link" href="{{ route('trial.balance') }}">{{ __('Trial Balance') }}</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="dash-item {{ Request::route()->getName() == 'chart-of-account.index' || Request::route()->getName() == 'chart-of-account.show' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('chart-of-account.index') }}">{{ __('Chart of Accounts') }}</a>
                </li>
                @can('statement report')
                <li class="dash-item {{ Request::route()->getName() == 'report.account.statement' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.account.statement') }}">{{ __('Account Statement') }}</a>
                </li>
                @endcan
                <li class="dash-item {{ Request::route()->getName() == 'report.receivables' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.receivables') }}">{{ __('Receivables') }}</a>
                </li>
                <li class="dash-item {{ Request::route()->getName() == 'report.payables' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.payables') }}">{{ __('Payables') }}</a>
                </li>
                @can('stock report')
                <li class="dash-item {{ Request::route()->getName() == 'report.product.stock.report' ? ' active' : '' }}">
                    <a href="{{ route('report.product.stock.report') }}" class="dash-link">{{ __('Product Stock') }}</a>
                </li>
                @endcan
                @can('loss & profit report')
                <li class="dash-item {{ request()->is('reports-monthly-cashflow') || request()->is('reports-quarterly-cashflow') ? 'active' : '' }}">
                    <a class="dash-link" href="{{ route('report.monthly.cashflow') }}">{{ __('Cash Flow') }}</a>
                </li>
                @endcan
                @can('manage transaction')
                <li class="dash-item {{ Request::route()->getName() == 'transaction.index' || Request::route()->getName() == 'transfer.create' || Request::route()->getName() == 'transaction.edit' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('transaction.index') }}">{{ __('Transaction') }}</a>
                </li>
                @endcan
                @can('income report')
                <li class="dash-item {{ Request::route()->getName() == 'report.income.summary' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.income.summary') }}">{{ __('Income Summary') }}</a>
                </li>
                @endcan
                @can('expense report')
                <li class="dash-item {{ Request::route()->getName() == 'report.expense.summary' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.expense.summary') }}">{{ __('Expense Summary') }}</a>
                </li>
                @endcan
                @can('income vs expense report')
                <li class="dash-item {{ Request::route()->getName() == 'report.income.vs.expense.summary' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.income.vs.expense.summary') }}">{{ __('Income VS Expense') }}</a>
                </li>
                @endcan
                @can('tax report')
                <li class="dash-item {{ Request::route()->getName() == 'report.tax.summary' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('report.tax.summary') }}">{{ __('Tax Summary') }}</a>
                </li>
                @endcan
            </ul>
        </li>
        @endif
        @if (Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer'))
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'bank-account' || Request::segment(1) == 'bank-transfer' || Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' || Request::route()->getName() == 'print-setting'  ? 'active dash-trigger' : '' }}">
            <a class="dash-link" href="#">{{ __('Settings') }}
                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                <li class="dash-item {{ Request::route()->getName() == 'bank-account.index' || Request::route()->getName() == 'bank-account.create' || Request::route()->getName() == 'bank-account.edit' ? ' active' : '' }}">
                    <a class="dash-link" href="{{ route('bank-account.index') }}">{{ __('Bank') }}</a>
                </li>
                <li class="dash-item {{ Request::segment(1) == 'taxes' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' ? 'active dash-trigger' : '' }}">
                    <a class="dash-link" href="{{ route('taxes.index') }}">{{ __('Field') }}</a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
</li>
@endif
@endif