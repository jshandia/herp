@if (\Auth::user()->type == 'super admin')
<li class="dash-item dash-hasmenu {{ request()->is('plan_request*') ? 'active' : '' }}">
  <a href="{{ route('plan_request.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-arrow-up-right-circle"></i>
    </span>
    <span class="dash-mtext">{{ __('Plan Request') }}</span>
  </a>
</li>
@endif