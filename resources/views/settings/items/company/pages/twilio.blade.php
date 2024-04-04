<!--Twilio Settings-->
                    <div id="twilio-settings" class="card">
                        <div class="card-header">
                            <h5>{{ __('Twilio') }}</h5>
                            <small class="text-muted">{{ __('Edit your Twilio settings') }}</small>
                        </div>
                        {{ Form::model($setting, ['route' => 'twilio.setting', 'method' => 'post']) }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('twilio_sid', __('Twilio SID '), ['class' => 'form-label']) }}
                                        {{ Form::text('twilio_sid', isset($setting['twilio_sid']) ? $setting['twilio_sid'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio SID'), 'required' => 'required']) }}
                                        @error('twilio_sid')
                                            <span class="invalid-twilio_sid" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('twilio_token', __('Twilio Token'), ['class' => 'form-label']) }}
                                        {{ Form::text('twilio_token', isset($setting['twilio_token']) ? $setting['twilio_token'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio Token'), 'required' => 'required']) }}
                                        @error('twilio_token')
                                            <span class="invalid-twilio_token" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('twilio_from', __('Twilio From'), ['class' => 'form-label']) }}
                                        {{ Form::text('twilio_from', isset($setting['twilio_from']) ? $setting['twilio_from'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio From'), 'required' => 'required']) }}
                                        @error('twilio_from')
                                            <span class="invalid-twilio_from" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4 mb-2">
                                    <h5 class="small-title">{{ __('Module Settings') }}</h5>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Customer') }}</span>
                                                {{ Form::checkbox('twilio_customer_notification', '1', isset($setting['twilio_customer_notification']) && $setting['twilio_customer_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_customer_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_customer_notification"></label>
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Vendor') }}</span>
                                                {{ Form::checkbox('twilio_vender_notification', '1', isset($setting['twilio_vender_notification']) && $setting['twilio_vender_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_vender_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_vender_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Invoice') }}</span>
                                                {{ Form::checkbox('twilio_invoice_notification', '1', isset($setting['twilio_invoice_notification']) && $setting['twilio_invoice_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_invoice_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_invoice_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Revenue') }}</span>
                                                {{ Form::checkbox('twilio_revenue_notification', '1', isset($setting['twilio_revenue_notification']) && $setting['twilio_revenue_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_revenue_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_revenue_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Bill') }}</span>
                                                {{ Form::checkbox('twilio_bill_notification', '1', isset($setting['twilio_bill_notification']) && $setting['twilio_bill_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_bill_notification']) }}
                                                <label class="form-check-label" for="twilio_bill_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Proposal') }}</span>
                                                {{ Form::checkbox('twilio_proposal_notification', '1', isset($setting['twilio_proposal_notification']) && $setting['twilio_proposal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_proposal_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_proposal_notification"></label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('New Payment') }}</span>
                                                {{ Form::checkbox('twilio_payment_notification', '1', isset($setting['twilio_payment_notification']) && $setting['twilio_payment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_payment_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_payment_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span>{{ __('Invoice Reminder') }}</span>
                                                {{ Form::checkbox('twilio_reminder_notification', '1', isset($setting['twilio_reminder_notification']) && $setting['twilio_reminder_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_reminder_notification']) }}
                                                <label class="form-check-label"
                                                    for="twilio_reminder_notification"></label>
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