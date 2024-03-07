@if (Gate::check('manage order'))
<li class="dash-item dash-hasmenu  {{ Request::segment(1) == 'orders' ? 'active' : '' }}">
  <a href="{{ route('order.index') }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-shopping-cart-plus"></i>
    </span>
    <span class="dash-mtext">{{ __('Order') }}</span>
  </a>
</li>
@endif