<!--Email Notification Settings-->
                    <div id="email-notification-settings" class="card">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h5>{{ __('Email Notification') }}</h5>
                                <small class="text-muted">{{ __('Edit email notification settings') }}</small>
                            </div>
                            {{ Form::model($setting, ['route' => ['status.email.language'], 'method' => 'post']) }}
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($EmailTemplates as $EmailTemplate)
                                        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                            <div class="list-group">
                                                <div class="list-group-item form-switch form-switch-right">
                                                    <label class="form-label"
                                                        style="margin-left:5%;">{{ $EmailTemplate->name }}</label>
                                                    {{--                                                    <input class="form-check-input email-template-checkbox" --}}
                                                    {{--                                                           id="email_tempalte_{{!empty($EmailTemplate->template)?$EmailTemplate->template->id:''}}" type="checkbox" --}}
                                                    {{--                                                           @if (!empty($EmailTemplate->template) ? $EmailTemplate->template->is_active : 0 == 1) checked="checked" @endif --}}
                                                    {{--                                                           type="checkbox" --}}
                                                    {{--                                                           value="{{!empty($EmailTemplate->template)?$EmailTemplate->template->is_active:1}}" --}}
                                                    {{--                                                           data-url="{{route('status.email.language',[!empty($EmailTemplate->template)?$EmailTemplate->template->id:''])}}" /> --}}
                                                    {{--                                                    <label class="form-check-label" for="email_tempalte_{{!empty($EmailTemplate->template)?$EmailTemplate->template->id:''}}"></label> --}}

                                                    <input class="form-check-input" name='{{ $EmailTemplate->id }}'
                                                        id="email_tempalte_{{ $EmailTemplate->template->id }}"
                                                        type="checkbox"
                                                        @if ($EmailTemplate->template->is_active == 1) checked="checked" @endif
                                                        type="checkbox" value="1"
                                                        data-url="{{ route('status.email.language', [$EmailTemplate->template->id]) }}" />
                                                    <label class="form-check-label"
                                                        for="email_tempalte_{{ $EmailTemplate->template->id }}"></label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <div class="form-group">
                                    <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                        value="{{ __('Save Changes') }}">
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>