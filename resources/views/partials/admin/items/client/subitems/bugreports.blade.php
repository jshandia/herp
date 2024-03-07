@if (Gate::check('manage bug report'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'bugs-report' ? ' active' : '' }}">
  <a href="{{ route('bugs.view', 'list') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-bug"></i>
    </span>
    <span class="dash-mtext">{{ __('Bugs') }}</span>
  </a>
</li>
@endif