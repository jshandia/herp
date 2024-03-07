@can('manage user')
<li class="dash-item dash-hasmenu {{ Request::route()->getName() == 'users.index' || Request::route()->getName() == 'users.create' || Request::route()->getName() == 'users.edit' ? ' active' : '' }}">
  <a href="{{ route('users.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-users"></i>
    </span>
    <span class="dash-mtext">{{ __('User') }}</span>
  </a>
</li>
@endcan