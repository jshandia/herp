@if (!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard'))
  @if (Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report') || Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer'))
    <li class="dash-item dash-hasmenu">
      <a href="#!" class="dash-link ">
        <span class="dash-micon">
          <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext">{{ __('Payable') }}</span>
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
          @if (Gate::check('manage vender') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note'))
          <li
              class="dash-item {{ Request::route()->getName() == 'bill.index' || Request::route()->getName() == 'bill.create' || Request::route()->getName() == 'bill.edit' || Request::route()->getName() == 'bill.show' ? ' active' : '' }}">
              <a class="dash-link"
                  href="{{ route('bill.index') }}">{{ __('Bill') }}</a>
          </li>
          <li
              class="dash-item {{ Request::route()->getName() == 'expense.index' || Request::route()->getName() == 'expense.create' || Request::route()->getName() == 'expense.edit' || Request::route()->getName() == 'expense.show' ? ' active' : '' }}">
              <a class="dash-link"
                  href="{{ route('expense.index') }}">{{ __('Expense') }}</a>
          </li>
          <li
              class="dash-item {{ Request::route()->getName() == 'payment.index' || Request::route()->getName() == 'payment.create' || Request::route()->getName() == 'payment.edit' ? ' active' : '' }}">
              <a class="dash-link"
                  href="{{ route('payment.index') }}">{{ __('Payment') }}</a>
          </li>
          <li
              class="dash-item  {{ Request::route()->getName() == 'debit.note' ? ' active' : '' }}">
              <a class="dash-link"
                  href="{{ route('debit.note') }}">{{ __('Debit Note') }}</a>
          </li>
          @endif
          @if (Gate::check('income report') || Gate::check('expense report') || Gate::check('income vs expense report') || Gate::check('tax report') || Gate::check('loss & profit report') || Gate::check('invoice report') || Gate::check('bill report') || Gate::check('stock report') || Gate::check('invoice report') || Gate::check('manage transaction') || Gate::check('statement report') || Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer'))
          <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'report' || Request::segment(1) == 'reports-monthly-cashflow' || Request::segment(1) == 'reports-quarterly-cashflow' ? 'active dash-trigger ' : '' }}">
            <a class="dash-link" href="#">{{ __('Reports') }}
              <span class="dash-arrow">
                <i data-feather="chevron-right"></i>
              </span>
            </a>
            <ul class="dash-submenu">
              @can('bill report')
              <li class="dash-item {{ Request::route()->getName() == 'report.bill.summary' ? ' active' : '' }}">
                <a class="dash-link" href="{{ route('report.bill.summary') }}">{{ __('Bill Summary') }}</a>
              </li>
              @endcan
              @if(Gate::check('manage constant tax') || Gate::check('manage constant category') || Gate::check('manage constant unit') || Gate::check('manage constant payment method') || Gate::check('manage constant custom field') || Gate::check('manage print settings') || Gate::check('manage bank account') || Gate::check('manage bank transfer'))
              <li class="dash-item {{ Request::route()->getName() == 'payable-print-setting' ? ' active' : '' }}">
                <a class="dash-link" href="{{ route('payable.print.setting') }}">{{ __('Print') }}</a>
              </li>
              @endif
            </ul>
            
          </li>
          @endif
      </ul>
    </li>
  @endif
@endif

<!--
  

-->