@if (Gate::check('manage timesheet'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'timesheet-list' ? ' active' : '' }}">
  <a href="{{ route('timesheet.list') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-clock"></i>
    </span>
    <span class="dash-mtext">{{ __('Timesheet') }}</span>
  </a>
</li>
@endif