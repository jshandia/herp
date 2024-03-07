@if (Gate::check('manage project task'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'calendar' ? ' active' : '' }}">
  <a href="{{ route('task.calendar', ['all']) }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-calendar"></i>
    </span>
    <span class="dash-mtext">{{ __('Task Calender') }}</span>
  </a>
</li>
@endif
