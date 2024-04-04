<!--Email Settings-->
<div id="email-settings" class="card">
  <div class="card-header">
    <h5>{{ __('Email') }}</h5>
  </div>
  <div class="card-body">
    {{ Form::open(['route' => 'email.settings', 'method' => 'post']) }}
    @csrf
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_driver', __('Mail Driver'), ['class' => 'form-label']) }}
          {{ Form::text('mail_driver', isset($settings['mail_driver']) ? $settings['mail_driver']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Driver')]) }}
          @error('mail_driver')
          <span class="invalid-mail_driver" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_host', __('Mail Host'), ['class' => 'form-label']) }}
          {{ Form::text('mail_host', isset($settings['mail_host']) ? $settings['mail_host']  :'', ['class' => 'form-control ', 'placeholder' => __('Enter Mail Host')]) }}
          @error('mail_host')
          <span class="invalid-mail_driver" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_port', __('Mail Port'), ['class' => 'form-label']) }}
          {{ Form::text('mail_port', isset($settings['mail_port']) ? $settings['mail_port']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Port')]) }}
          @error('mail_port')
          <span class="invalid-mail_port" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_username', __('Mail Username'), ['class' => 'form-label']) }}
          {{ Form::text('mail_username', isset($settings['mail_username']) ? $settings['mail_username']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Username')]) }}
          @error('mail_username')
          <span class="invalid-mail_username" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_password', __('Mail Password'), ['class' => 'form-label']) }}
          {{ Form::text('mail_password',isset($settings['mail_password']) ? $settings['mail_password']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Password')]) }}
          @error('mail_password')
          <span class="invalid-mail_password" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_encryption', __('Mail Encryption'), ['class' => 'form-label']) }}
          {{ Form::text('mail_encryption', isset($settings['mail_encryption']) ? $settings['mail_encryption']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Encryption')]) }}
          @error('mail_encryption')
          <span class="invalid-mail_encryption" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_from_address', __('Mail From Address'), ['class' => 'form-label']) }}
          {{ Form::text('mail_from_address', isset($settings['mail_from_address']) ? $settings['mail_from_address']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail From Address')]) }}
          @error('mail_from_address')
          <span class="invalid-mail_from_address" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          {{ Form::label('mail_from_name', __('Mail From Name'), ['class' => 'form-label']) }}
          {{ Form::text('mail_from_name', isset($settings['mail_from_name']) ? $settings['mail_from_name']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail From Name')]) }}
          @error('mail_from_name')
          <span class="invalid-mail_from_name" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card-footer d-flex justify-content-end">
        <div class="form-group me-2">
          <a href="#" data-url="{{ route('test.mail') }}" data-title="{{ __('Send Test Mail') }}" class="btn btn-primary send_email ">
            {{ __('Send Test Mail') }}
          </a>
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="{{__('Save Changes')}}">
        </div>
      </div>
    </div>
    {{ Form::close() }}
  </div>
</div>