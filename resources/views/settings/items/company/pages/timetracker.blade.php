<!--Time-Tracker Settings-->
                    <div id="tracker-settings" class="card">
                        <div class="card-header">
                            <h5>{{ __('Time Tracker') }}</h5>
                            <small class="text-muted">{{ __('Edit your Time Tracker settings') }}</small>
                        </div>
                        {{ Form::model($setting, ['route' => 'tracker.settings', 'method' => 'post']) }}
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{{ __('Application URL') }}</label> <br>
                                    <small>{{ __('Application URL to log into the app.') }}</small>
                                    {{ Form::text('apps_url', URL::to('/'), ['class' => 'form-control', 'placeholder' => __('Application URL'), 'readonly' => 'true']) }}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">{{ __('Tracking Interval') }}</label> <br>
                                    <small>{{ __('Image Screenshot Take Interval time ( 1 = 1 min)') }}</small>
                                    {{ Form::number('interval_time', isset($setting['interval_time']) ? $setting['interval_time'] : '10', ['class' => 'form-control', 'placeholder' => __('Enter Tracking Interval Time')]) }}
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
