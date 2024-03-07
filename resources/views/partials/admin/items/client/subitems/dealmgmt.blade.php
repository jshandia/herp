@if (Gate::check('manage deal'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'deals' ? ' active' : '' }}">
  <a href="{{ route('deals.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-rocket"></i>
    </span>
    <span class="dash-mtext">{{ __('Deals') }}</span>
  </a>
</li>
@endif