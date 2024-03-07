@if (Gate::check('manage coupon'))
<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'coupons' ? 'active' : '' }}">
  <a href="{{ route('coupons.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-gift"></i>
    </span>
    <span class="dash-mtext">{{ __('Coupon') }}</span>
  </a>
</li>
@endif