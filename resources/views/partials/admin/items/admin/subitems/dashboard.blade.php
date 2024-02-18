@if (Gate::check('show hrm dashboard') || Gate::check('show project dashboard') || Gate::check('show account dashboard') || Gate::check('show crm dashboard') || Gate::check('show pos dashboard'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == null ? 'active dash-trigger' : '' }}">
  <a href="{{route('home')}}" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-home"></i>
    </span>
    <span class="dash-mtext">{{ __('Dashboard') }}</span></a>
  </li>
@endif