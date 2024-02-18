@if (!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard'))
@if (Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
<li class="dash-item dash-hasmenu">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext">{{ __('Receivable') }}</span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
     @if (Gate::check('manage customer') || Gate::check('manage proposal') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note'))
     <li class="dash-item {{ Request::route()->getName() == 'invoice.index' || Request::route()->getName() == 'invoice.create' || Request::route()->getName() == 'invoice.edit' || Request::route()->getName() == 'invoice.show' ? ' active' : '' }}">
      <a class="dash-link" href="{{ route('invoice.index') }}">{{ __('Invoice') }}</a>
    </li>
    <li class="dash-item {{ Request::route()->getName() == 'revenue.index' || Request::route()->getName() == 'revenue.create' || Request::route()->getName() == 'revenue.edit' ? ' active' : '' }}">
      <a class="dash-link" href="{{ route('revenue.index') }}">{{ __('Revenue') }}</a>
    </li>
    <li class="dash-item {{ Request::route()->getName() == 'credit.note' ? ' active' : '' }}">
      <a class="dash-link" href="{{ route('credit.note') }}">{{ __('Credit Note') }}</a>
    </li>
     @endif
    @if (Gate::check('income report') || Gate::check('expense report') || Gate::check('income vs expense report') || Gate::check('tax report') || Gate::check('loss & profit report') || Gate::check('invoice report') || Gate::check('bill report') || Gate::check('stock report') || Gate::check('invoice report') || Gate::check('manage transaction') || Gate::check('statement report'))
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#">{{ __('Reports') }}
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        @can('invoice report')
        <li class="dash-item {{ Request::route()->getName() == 'report.invoice.summary' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('report.invoice.summary') }}">{{ __('Invoice Summary') }}</a>
        </li>
        @endcan
      </ul>
    </li>
    @endif
  </ul>
</li>
@endif
@endif