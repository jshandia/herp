@if (!empty($userPlan) &&  $userPlan->crm == 1)
                @if (Gate::check('manage lead') ||
                        Gate::check('manage deal') ||
                        Gate::check('manage form builder') ||
                        Gate::check('manage contract'))
                    <li
                        class="dash-item dash-hasmenu {{ Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'deals' || Request::segment(1) == 'leads' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' || Request::segment(1) == 'contract' ? ' active dash-trigger' : '' }}">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i
                                    class="ti ti-layers-difference"></i></span><span
                                class="dash-mtext">{{ __('CRM') }}</span><span class="dash-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul
                            class="dash-submenu {{ Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'leads' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' || Request::segment(1) == 'deals' || Request::segment(1) == 'pipelines' ? 'show' : '' }}">
                            <li class="dash-item {{ \Request::route()->getName() == 'crm.dashboard' ? ' active' : '' }}">
                                <a class="dash-link" href="{{ route('crm.dashboard') }}">{{ __(' Overview') }}</a>
                            </li>
                            @can('manage lead')
                                <li
                                    class="dash-item {{ Request::route()->getName() == 'leads.list' || Request::route()->getName() == 'leads.index' || Request::route()->getName() == 'leads.show' ? ' active' : '' }}">
                                    <a class="dash-link" href="{{ route('leads.index') }}">{{ __('Leads') }}</a>
                                </li>
                            @endcan
                            @can('manage deal')
                                <li
                                    class="dash-item {{ Request::route()->getName() == 'deals.list' || Request::route()->getName() == 'deals.index' || Request::route()->getName() == 'deals.show' ? ' active' : '' }}">
                                    <a class="dash-link" href="{{ route('deals.index') }}">{{ __('Deals') }}</a>
                                </li>
                            @endcan
                            @can('manage form builder')
                                <li
                                    class="dash-item {{ Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' ? 'active open' : '' }}">
                                    <a class="dash-link"
                                        href="{{ route('form_builder.index') }}">{{ __('Form Builder') }}</a>
                                </li>
                            @endcan
                            @can('manage contract')
                                <li
                                    class="dash-item  {{ Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : '' }}">
                                    <a class="dash-link"
                                        href="{{ route('contract.index') }}">{{ __('Contract') }}</a>
                                </li>
                    @endif
                    <!--crm report-->
                    <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'active dash-trigger' : '' }}"
                        href="#crm-report" data-toggle="collapse" role="button"
                        aria-expanded="{{ Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'true' : 'false' }}">
                        <a class="dash-link" href="#">{{ __('Reports') }}<span
                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                            <li
                                class="dash-item {{ request()->is('reports-lead') ? 'active' : '' }}">
                                <a class="dash-link"
                                    href="{{ route('report.lead') }}">{{ __('Lead') }}</a>
                            </li>
                            <li
                                class="dash-item {{ request()->is('reports-deal') ? 'active' : '' }}">
                                <a class="dash-link"
                                    href="{{ route('report.deal') }}">{{ __('Deal') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!--end crm report-->
                    @if (Gate::check('manage lead stage') ||
                            Gate::check('manage pipeline') ||
                            Gate::check('manage source') ||
                            Gate::check('manage label') ||
                            Gate::check('manage stage'))
                        <li
                            class="dash-item  {{ Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' ? 'active dash-trigger' : '' }}">
                            <a class="dash-link"
                                href="{{ route('pipelines.index') }}   ">{{ __('CRM System Setup') }}</a>

                        </li>
                    @endif
            </ul>
            </li>
        @endif
        @endif