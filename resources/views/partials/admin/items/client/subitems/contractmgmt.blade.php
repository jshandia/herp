@if (Gate::check('manage contract'))
<li class="dash-item dash-hasmenu {{ Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : '' }}">
  <a href="{{ route('contract.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-rocket"></i>
    </span>
    <span class="dash-mtext">{{ __('Contract') }}</span>
  </a>
</li>
@endif