@if (Gate::check('manage project'))
<li class="dash-item  {{ Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : '' }}">
  <a class="dash-link" href="{{ route('project_report.index') }}">
    <span class="dash-micon">
      <i class="ti ti-chart-line"></i>
    </span>
    <span class="dash-mtext">{{ __('Project Report') }}</span>
  </a>
</li>
@endif