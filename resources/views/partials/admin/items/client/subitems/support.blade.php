<li class="dash-item dash-hasmenu">
  <a href="{{ route('support.index') }}" class="dash-link {{ Request::segment(1) == 'support' ? 'active' : '' }}">
    <span class="dash-micon">
      <i class="ti ti-headphones"></i>
    </span>
    <span class="dash-mtext">{{ __('Support') }}</span>
  </a>
</li>