@if (!empty($userPlan) &&  $userPlan->account == 1 && Gate::check('show account dashboard'))
@if (Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage customer') || Gate::check('manage vender') || Gate::check('manage proposal') || Gate::check('manage bank account') || Gate::check('manage bank transfer') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note') || Gate::check('manage bill') || Gate::check('manage payment') || Gate::check('manage debit note') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
<li class="dash-item dash-hasmenu">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext">{{ __('Sales') }}</span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
    @if (Gate::check('manage proposal'))
    <li class="dash-item {{ Request::segment(1) == 'proposal' ? 'active' : '' }}">
      <a class="dash-link" href="{{ route('proposal.index') }}">{{ __('Estimate') }}</a>
    </li>
    @endif
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#">{{ __('Reports') }}
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <li class="dash-item {{ Request::route()->getName() == 'report.sales' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('report.sales') }}">{{ __('Sales Report') }}</a>
        </li>
      </ul>
    </li>
    @if (Gate::check('manage customer') || Gate::check('manage proposal') || Gate::check('manage invoice') || Gate::check('manage revenue') || Gate::check('manage credit note'))
    <li class="dash-item dash-hasmenu">
      <a class="dash-link" href="#">{{ __('Settings') }}
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        @if (Gate::check('manage customer'))
          <li class="dash-item {{ Request::segment(1) == 'customer' ? 'active' : '' }}">
            <a class="dash-link" href="{{ route('customer.index') }}">{{ __('Customer') }}</a>
          </li>
          @endif
      </ul>
    </li>
    @endif
  </ul>
</li>
@endif
@endif