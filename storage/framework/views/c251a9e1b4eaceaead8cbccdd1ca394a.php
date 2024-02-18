<?php if(!empty($userPlan) &&  $userPlan->crm == 1): ?>
                <?php if(Gate::check('manage lead') ||
                        Gate::check('manage deal') ||
                        Gate::check('manage form builder') ||
                        Gate::check('manage contract')): ?>
                    <li
                        class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'deals' || Request::segment(1) == 'leads' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' || Request::segment(1) == 'contract' ? ' active dash-trigger' : ''); ?>">
                        <a href="#!" class="dash-link"><span class="dash-micon"><i
                                    class="ti ti-layers-difference"></i></span><span
                                class="dash-mtext"><?php echo e(__('CRM')); ?></span><span class="dash-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul
                            class="dash-submenu <?php echo e(Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'leads' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' || Request::segment(1) == 'deals' || Request::segment(1) == 'pipelines' ? 'show' : ''); ?>">
                            <li class="dash-item <?php echo e(\Request::route()->getName() == 'crm.dashboard' ? ' active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('crm.dashboard')); ?>"><?php echo e(__(' Overview')); ?></a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage lead')): ?>
                                <li
                                    class="dash-item <?php echo e(Request::route()->getName() == 'leads.list' || Request::route()->getName() == 'leads.index' || Request::route()->getName() == 'leads.show' ? ' active' : ''); ?>">
                                    <a class="dash-link" href="<?php echo e(route('leads.index')); ?>"><?php echo e(__('Leads')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage deal')): ?>
                                <li
                                    class="dash-item <?php echo e(Request::route()->getName() == 'deals.list' || Request::route()->getName() == 'deals.index' || Request::route()->getName() == 'deals.show' ? ' active' : ''); ?>">
                                    <a class="dash-link" href="<?php echo e(route('deals.index')); ?>"><?php echo e(__('Deals')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage form builder')): ?>
                                <li
                                    class="dash-item <?php echo e(Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' ? 'active open' : ''); ?>">
                                    <a class="dash-link"
                                        href="<?php echo e(route('form_builder.index')); ?>"><?php echo e(__('Form Builder')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage contract')): ?>
                                <li
                                    class="dash-item  <?php echo e(Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : ''); ?>">
                                    <a class="dash-link"
                                        href="<?php echo e(route('contract.index')); ?>"><?php echo e(__('Contract')); ?></a>
                                </li>
                    <?php endif; ?>
                    <!--crm report-->
                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'active dash-trigger' : ''); ?>"
                        href="#crm-report" data-toggle="collapse" role="button"
                        aria-expanded="<?php echo e(Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'true' : 'false'); ?>">
                        <a class="dash-link" href="#"><?php echo e(__('Reports')); ?><span
                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="dash-submenu">
                            <li
                                class="dash-item <?php echo e(request()->is('reports-lead') ? 'active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('report.lead')); ?>"><?php echo e(__('Lead')); ?></a>
                            </li>
                            <li
                                class="dash-item <?php echo e(request()->is('reports-deal') ? 'active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('report.deal')); ?>"><?php echo e(__('Deal')); ?></a>
                            </li>
                        </ul>
                    </li>
                    <!--end crm report-->
                    <?php if(Gate::check('manage lead stage') ||
                            Gate::check('manage pipeline') ||
                            Gate::check('manage source') ||
                            Gate::check('manage label') ||
                            Gate::check('manage stage')): ?>
                        <li
                            class="dash-item  <?php echo e(Request::segment(1) == 'stages' || Request::segment(1) == 'labels' || Request::segment(1) == 'sources' || Request::segment(1) == 'lead_stages' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'product-category' || Request::segment(1) == 'product-unit' || Request::segment(1) == 'payment-method' || Request::segment(1) == 'custom-field' || Request::segment(1) == 'chart-of-account-type' ? 'active dash-trigger' : ''); ?>">
                            <a class="dash-link"
                                href="<?php echo e(route('pipelines.index')); ?>   "><?php echo e(__('CRM System Setup')); ?></a>

                        </li>
                    <?php endif; ?>
            </ul>
            </li>
        <?php endif; ?>
        <?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/submenus/crm.blade.php ENDPATH**/ ?>