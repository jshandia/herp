@if (Gate::check('manage system settings'))
<li class="dash-item dash-hasmenu {{ Request::route()->getName() == 'systems.index' ? ' active' : '' }}">
  <a href="{{ route('systems.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-settings"></i>
    </span>
    <span class="dash-mtext">{{ __('Settings') }}</span>
  </a>
</li>
@endif