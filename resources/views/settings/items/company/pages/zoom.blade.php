<!--Zoom - Metting Settings-->
                    <div id="zoom-settings" class="card">
                        <div class="card-header">
                            <h5>{{ __('Zoom') }}</h5>
                            <small class="text-muted">{{ __('Edit your Zoom settings') }}</small>
                        </div>
                        {{ Form::model($setting, ['route' => 'zoom.settings', 'method' => 'post']) }}
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{{ __('Zoom Account ID') }}</label> <br>
                                    {{ Form::text('zoom_account_id', isset($setting['zoom_account_id']) ? $setting['zoom_account_id'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Zoom Accound Id')]) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{{ __('Zoom Client ID') }}</label> <br>
                                    {{ Form::text('zoom_client_id', isset($setting['zoom_client_id']) ? $setting['zoom_client_id'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Zoom Client Id')]) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{{ __('Zoom Client Secret Key') }}</label> <br>
                                    {{ Form::text('zoom_client_secret', isset($setting['zoom_client_secret']) ? $setting['zoom_client_secret'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Zoom Client Secret Key')]) }}
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