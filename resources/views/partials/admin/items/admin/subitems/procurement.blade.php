
@if (!empty($userPlan) &&  $userPlan->pos == 1)
    @if (Gate::check('manage warehouse')||Gate::check('manage purchase')||Gate::check('manage pos')||Gate::check('manage print settings'))
        <li class="dash-item dash-hasmenu">
            <a href="#!" class="dash-link">
                <span class="dash-micon">
                    <i class="ti ti-layers-difference"></i>
                </span>
                <span class="dash-mtext">
                    {{ __('Procurement') }}
                </span>
                <span class="dash-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="dash-submenu">
                @can('manage purchase')
                    <li class="dash-item">
                        <a class="dash-link" href="{{ route('purchase.index') }}">{{ __('Purchase') }}</a>
                    </li>
                @endcan
                <li class="dash-item dash-hasmenu">
                    <a class="dash-link" href="#">{{ __('Reports') }}
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        <li class="dash-item">
                            <a class="dash-link" href="{{ route('report.daily.purchase') }}">{{ __('Purchase') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="dash-item dash-hasmenu">
                    <a class="dash-link" href="#">{{ __('Settings') }}
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dash-submenu">
                        
                        @if (Gate::check('manage vender'))
                            <li class="dash-item">
                                <a class="dash-link" href="{{ route('vender.index') }}">{{ __('Suppiler') }}</a>
                            </li>
                        @endif
                        @can('manage pos')
                        <li class="dash-item {{ Request::route()->getName() == 'purchase-print-setting' ? ' active' : '' }}">
                            <a class="dash-link" href="{{ route('purchase.print.setting') }}">{{ __('Print') }}</a>
                        </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </li>
    @endif
@endif
