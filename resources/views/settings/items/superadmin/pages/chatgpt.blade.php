{{-- chat gpt settings --}}
                    <div id="chat-gpt-settings" class="card">
                        <div class="card-header">
                            <h5>{{ __('Chat GPT') }}</h5>
                        </div>
                        {{Form::model($settings,array('route'=>'chatgpt.settings','method'=>'post'))}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        {{ Form::text('chat_gpt_key',isset($settings['chat_gpt_key'])?$settings['chat_gpt_key']:'', ['class' => 'form-control', 'placeholder' => __('Enter Chat GPT API Key')]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="{{ __('Save Changes') }}">
                            </div>
                        {{ Form::close() }}
                    </div>