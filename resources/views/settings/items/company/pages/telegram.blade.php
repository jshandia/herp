<!--Telegram Settings-->
                    <div id="telegram-settings" class="card">
                        <div class="card-header">
                            <h5>{{ __('Telegram') }}</h5>
                            <small class="text-muted">{{ __('Edit your Telegram settings') }}</small>
                        </div>
                        {{ Form::open(['route' => 'telegram.settings', 'id' => 'telegram-setting', 'method' => 'post', 'class' => 'd-contents']) }}

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">{{ __('Telegram AccessToken') }}</label> <br>
                                    {{ Form::text('telegram_accestoken', isset($settings['telegram_accestoken']) ? $settings['telegram_accestoken'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Telegram AccessToken')]) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label ">{{ __('Telegram ChatID') }}</label> <br>
                                    {{ Form::text('telegram_chatid', isset($settings['telegram_chatid']) ? $settings['telegram_chatid'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Telegram ChatID')]) }}
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 mb-2">
                                <h5 class="small-title">{{ __('Module Settings') }}</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Lead') }}</span>
                                                {{ Form::checkbox('telegram_lead_notification', '1', isset($settings['telegram_lead_notification']) && $settings['telegram_lead_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_lead_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_lead_notification"></label>

                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Deal') }}</span>
                                                {{ Form::checkbox('telegram_deal_notification', '1', isset($settings['telegram_deal_notification']) && $settings['telegram_deal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_deal_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_deal_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('Lead to Deal Conversion') }}</span>
                                                {{ Form::checkbox('telegram_leadtodeal_notification', '1', isset($settings['telegram_leadtodeal_notification']) && $settings['telegram_leadtodeal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_leadtodeal_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_leadtodeal_notification"></label>

                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Contract') }}</span>
                                                {{ Form::checkbox('telegram_contract_notification', '1', isset($settings['telegram_contract_notification']) && $settings['telegram_contract_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_contract_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_contract_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Project') }}</span>
                                                {{ Form::checkbox('telegram_project_notification', '1', isset($settings['telegram_project_notification']) && $settings['telegram_project_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_project_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_project_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Task') }}</span>
                                                {{ Form::checkbox('telegram_task_notification', '1', isset($settings['telegram_task_notification']) && $settings['telegram_task_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_task_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_task_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('Task Stage Updated') }}</span>
                                                {{ Form::checkbox('telegram_taskmove_notification', '1', isset($settings['telegram_taskmove_notification']) && $settings['telegram_taskmove_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_taskmove_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_taskmove_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Task Comment') }}</span>
                                                {{ Form::checkbox('telegram_taskcomment_notification', '1', isset($settings['telegram_taskcomment_notification']) && $settings['telegram_taskcomment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_taskcomment_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_taskcomment_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Monthly Payslip') }}</span>
                                                {{ Form::checkbox('telegram_payslip_notification', '1', isset($settings['telegram_payslip_notification']) && $settings['telegram_payslip_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_payslip_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_payslip_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Award') }}</span>
                                                {{ Form::checkbox('telegram_award_notification', '1', isset($settings['telegram_award_notification']) && $settings['telegram_award_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_award_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_award_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Announcement') }}</span>
                                                {{ Form::checkbox('telegram_announcement_notification', '1', isset($settings['telegram_announcement_notification']) && $settings['telegram_announcement_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_announcement_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_announcement_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Holiday') }}</span>
                                                {{ Form::checkbox('telegram_holiday_notification', '1', isset($settings['telegram_holiday_notification']) && $settings['telegram_holiday_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_holiday_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_holiday_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Support Ticket') }}</span>
                                                {{ Form::checkbox('telegram_support_notification', '1', isset($settings['telegram_support_notification']) && $settings['telegram_support_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_support_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_support_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Event') }}</span>
                                                {{ Form::checkbox('telegram_event_notification', '1', isset($settings['telegram_event_notification']) && $settings['telegram_event_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_event_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_event_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Meeting') }}</span>
                                                {{ Form::checkbox('telegram_meeting_notification', '1', isset($settings['telegram_meeting_notification']) && $settings['telegram_meeting_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_meeting_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_meeting_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Company Policy') }}</span>
                                                {{ Form::checkbox('telegram_policy_notification', '1', isset($settings['telegram_policy_notification']) && $settings['telegram_policy_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_policy_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_policy_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Invoice') }}</span>
                                                {{ Form::checkbox('telegram_invoice_notification', '1', isset($settings['telegram_invoice_notification']) && $settings['telegram_invoice_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_invoice_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_invoice_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Revenue') }}</span>
                                                {{ Form::checkbox('telegram_revenue_notification', '1', isset($settings['telegram_revenue_notification']) && $settings['telegram_revenue_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_revenue_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_revenue_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Bill') }}</span>
                                                {{ Form::checkbox('telegram_bill_notification', '1', isset($settings['telegram_bill_notification']) && $settings['telegram_bill_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_bill_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_bill_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Invoice Payment') }}</span>
                                                {{ Form::checkbox('telegram_payment_notification', '1', isset($settings['telegram_payment_notification']) && $settings['telegram_payment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_payment_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_payment_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Budget') }}</span>
                                                {{ Form::checkbox('telegram_budget_notification', '1', isset($settings['telegram_budget_notification']) && $settings['telegram_budget_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'telegram_budget_notification']) }}
                                                <label class="form-check-label"
                                                    for="telegram_budget_notification"></label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="form-group">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                    value="{{ __('Save Changes') }}">
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
