@if (Gate::check('manage project task'))
<li class="dash-item dash-hasmenu  {{ Request::segment(1) == 'taskboard' ? ' active' : '' }}">
  <a href="{{ route('taskBoard.view', 'list') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-list-check"></i>
    </span>
    <span class="dash-mtext">{{ __('Tasks') }}</span>
  </a>
</li>
@endif