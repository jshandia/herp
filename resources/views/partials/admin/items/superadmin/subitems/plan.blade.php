@if (Gate::check('manage plan'))
<li class="dash-item dash-hasmenu  {{ Request::segment(1) == 'plans' ? 'active' : '' }}">
  <a href="{{ route('plans.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-trophy"></i>
    </span>
    <span class="dash-mtext">{{ __('Plan') }}</span>
  </a>
</li>
@endif