@if (!empty($userPlan) &&  $userPlan->pos == 1)
            @if (Gate::check('manage warehouse') ||
                    Gate::check('manage purchase') ||
                    Gate::check('manage pos') ||
                    Gate::check('manage print settings'))
                <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'warehouse' || Request::segment(1) == 'purchase' || Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' || Request::route()->getName() == 'pos.show' ? ' active dash-trigger' : '' }}">
                    <a href="#!" class="dash-link">
                        <span class="dash-micon">
                            <i class="ti ti-layers-difference"></i>
                        </span>
                        <span class="dash-mtext">
                            {{ __('POS') }}
                        </span>
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    </a>
                    <ul
                        class="dash-submenu {{ Request::segment(1) == 'warehouse' ||
                        Request::segment(1) == 'purchase' ||
                        Request::route()->getName() == 'pos.barcode' ||
                        Request::route()->getName() == 'pos.print' ||
                        Request::route()->getName() == 'pos.show'
                            ? 'show'
                            : '' }}">
                            <li
                                                class="dash-item {{ \Request::route()->getName() == 'pos.dashboard' ? ' active' : '' }}">
                                                <a class="dash-link"
                                                    href="{{ route('pos.dashboard') }}">{{ __(' Overview') }}</a>
                                            </li>
                        
                        
                        @can('manage pos')
                            <li class="dash-item {{ Request::route()->getName() == 'pos.index' ? ' active' : '' }}">
                                <a class="dash-link" href="{{ route('pos.index') }}">{{ __(' Add POS') }}</a>
                            </li>
                            <li
                                class="dash-item {{ Request::route()->getName() == 'pos.report' || Request::route()->getName() == 'pos.show' ? ' active' : '' }}">
                                <a class="dash-link" href="{{ route('pos.report') }}">{{ __('POS') }}</a>
                            </li>
                        @endcan
                        @can('create barcode')
                            <li
                                class="dash-item {{ Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' ? ' active' : '' }}">
                                <a class="dash-link" href="{{ route('pos.barcode') }}">{{ __('Print Barcode') }}</a>
                            </li>
                        @endcan
                        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'reports-warehouse' || Request::segment(1) == 'reports-daily-purchase' || Request::segment(1) == 'reports-monthly-purchase' || Request::segment(1) == 'reports-daily-pos' || Request::segment(1) == 'reports-monthly-pos' || Request::segment(1) == 'reports-pos-vs-purchase' ? 'active dash-trigger' : '' }}" href="#crm-report" data-toggle="collapse" role="button" aria-expanded="{{ Request::segment(1) == 'reports-warehouse' || Request::segment(1) == 'reports-daily-purchase' || Request::segment(1) == 'reports-monthly-purchase' || Request::segment(1) == 'reports-daily-pos' || Request::segment(1) == 'reports-monthly-pos' || Request::segment(1) == 'reports-pos-vs-purchase' ? 'true' : 'false' }}">
                            <a class="dash-link" href="#">{{ __('Reports') }}
                                <span class="dash-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dash-submenu">
                                
                                
                                <li
                                    class="dash-item {{ request()->is('reports-daily-pos') || request()->is('reports-monthly-pos') ? 'active' : '' }}">
                                    <a class="dash-link"
                                        href="{{ route('report.daily.pos') }}">{{ __('POS Daily/Monthly Report') }}</a>
                                </li>
                                <li
                                    class="dash-item {{ request()->is('reports-pos-vs-purchase') ? 'active' : '' }}">
                                    <a class="dash-link"
                                        href="{{ route('report.pos.vs.purchase') }}">{{ __('Pos VS Purchase Report') }}</a>
                                </li>
                            </ul>
                        </li>
                        @can('manage pos')
                            <li
                                class="dash-item {{ Request::route()->getName() == 'pos-print-setting' ? ' active' : '' }}">
                                <a class="dash-link"
                                    href="{{ route('pos.print.setting') }}">{{ __('Print Settings') }}</a>
                            </li>
                        @endcan
                        
                    </ul>
                </li>
            @endif
        @endif