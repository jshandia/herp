@if (!empty($userPlan) &&  $userPlan->pos == 1)
    @if (Gate::check('manage warehouse') || Gate::check('manage purchase') || Gate::check('manage pos') || Gate::check('manage print settings') || Gate::check('manage product & service') || Gate::check('manage product & service') || Gate::check('manage chart of account') || Gate::check('manage journal entry') || Gate::check('balance sheet report') || Gate::check('ledger report') || Gate::check('trial balance report'))
    <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'warehouse' || Request::segment(1) == 'purchase' || Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::route()->getName() == 'pos.show' ? 'active dash-trigger' : '' }}">
        <a href="#!" class="dash-link ">
            <span class="dash-micon">
                <i class="ti ti-layers-difference"></i>
            </span>
            <span class="dash-mtext">{{ __('Logistic') }}</span>
            <span class="dash-arrow">
                <i data-feather="chevron-right"></i>
            </span>
        </a>
        <ul class="dash-submenu">
            <li class="dash-item {{ request()->is('reports-warehouse') ? 'active' : '' }}">
                <a class="dash-link" href="{{ route('report.warehouse') }}">{{ __('Overview') }}</a>
            </li>
            @can('manage warehouse')
            <li class="dash-item {{ Request::route()->getName() == 'warehouse-transfer.index' || Request::route()->getName() == 'warehouse-transfer.show' ? ' active' : '' }}">
                <a class="dash-link" href="{{ route('warehouse-transfer.index') }}">{{ __('Transfer') }}</a>
            </li>
            @endcan
            @if (Gate::check('manage product & service'))
            <li class="dash-item {{ Request::segment(1) == 'productstock' ? 'active' : '' }}">
                <a href="{{ route('productstock.index') }}" class="dash-link">
                    {{ __('Adjustment Stock') }}
                </a>
            </li>
            @endif
            <li class="dash-item dash-hasmenu">
                <a class="dash-link" href="#">{{ __('Reports') }}
                    <span class="dash-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="dash-submenu">
                    @can('stock report')
                    <li class="dash-item {{ Request::route()->getName() == 'report.product.stock.report' ? ' active' : '' }}">
                        <a href="{{ route('report.product.stock.report') }}" class="dash-link">{{ __('Product Stock') }}</a>
                    </li>
                    @endcan
                    @can('create barcode')
                    <li class="dash-item {{ Request::route()->getName() == 'pos.barcode' || Request::route()->getName() == 'pos.print' ? ' active' : '' }}">
                        <a class="dash-link" href="{{ route('pos.barcode') }}">{{ __('Barcode') }}</a>
                    </li>
                    @endcan
                </ul>
            </li>
            <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'productservice' || Request::route()->getName() == 'warehouse.index' || Request::route()->getName() == 'warehouse.show' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit'  ? 'active dash-trigger' : '' }}">
                <a class="dash-link" href="#">{{ __('Settings') }}
                    <span class="dash-arrow">
                        <i data-feather="chevron-right"></i>
                    </span>
                </a>
                <ul class="dash-submenu">
                    @if (Gate::check('manage product & service'))
                    <li class="dash-item {{ Request::segment(1) == 'productservice' ? 'active' : '' }}">
                        <a href="{{ route('productservice.index') }}" class="dash-link">
                            {{ __('Product & Services') }}
                        </a>
                    </li>
                    @endif
                    @can('manage warehouse')
                    <li class="dash-item {{ Request::route()->getName() == 'warehouse.index' || Request::route()->getName() == 'warehouse.show' ? ' active' : '' }}">
                        <a class="dash-link" href="{{ route('warehouse.index') }}">{{ __('Warehouse') }}</a>
                    </li>
                    @endcan
                    
                    <li class="dash-item {{ Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' ? 'active dash-trigger' : '' }}">
                        <a class="dash-link" href="{{ route('product-unit.index') }}">{{ __('Field') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    @endif
@endif