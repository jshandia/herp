@if (Gate::check('manage project'))
<li class="dash-item dash-hasmenu  {{ Request::segment(1) == 'projects' ? ' active' : '' }}">
  <a href="{{ route('projects.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-share"></i>
    </span>
    <span class="dash-mtext">{{ __('Project') }}</span>
  </a>
</li>
@endif