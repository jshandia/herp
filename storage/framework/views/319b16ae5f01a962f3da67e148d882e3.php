<!--Email Settings-->
<div id="email-settings" class="card">
  <div class="card-header">
    <h5><?php echo e(__('Email')); ?></h5>
  </div>
  <div class="card-body">
    <?php echo e(Form::open(['route' => 'email.settings', 'method' => 'post'])); ?>

    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_driver', __('Mail Driver'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_driver', isset($settings['mail_driver']) ? $settings['mail_driver']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Driver')])); ?>

          <?php $__errorArgs = ['mail_driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_driver" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_host', __('Mail Host'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_host', isset($settings['mail_host']) ? $settings['mail_host']  :'', ['class' => 'form-control ', 'placeholder' => __('Enter Mail Host')])); ?>

          <?php $__errorArgs = ['mail_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_driver" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_port', __('Mail Port'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_port', isset($settings['mail_port']) ? $settings['mail_port']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Port')])); ?>

          <?php $__errorArgs = ['mail_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_port" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_username', __('Mail Username'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_username', isset($settings['mail_username']) ? $settings['mail_username']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Username')])); ?>

          <?php $__errorArgs = ['mail_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_username" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_password', __('Mail Password'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_password',isset($settings['mail_password']) ? $settings['mail_password']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Password')])); ?>

          <?php $__errorArgs = ['mail_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_password" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_encryption', __('Mail Encryption'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_encryption', isset($settings['mail_encryption']) ? $settings['mail_encryption']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail Encryption')])); ?>

          <?php $__errorArgs = ['mail_encryption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_encryption" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_from_address', __('Mail From Address'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_from_address', isset($settings['mail_from_address']) ? $settings['mail_from_address']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail From Address')])); ?>

          <?php $__errorArgs = ['mail_from_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_from_address" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <?php echo e(Form::label('mail_from_name', __('Mail From Name'), ['class' => 'form-label'])); ?>

          <?php echo e(Form::text('mail_from_name', isset($settings['mail_from_name']) ? $settings['mail_from_name']  :'', ['class' => 'form-control', 'placeholder' => __('Enter Mail From Name')])); ?>

          <?php $__errorArgs = ['mail_from_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-mail_from_name" role="alert">
            <strong class="text-danger"><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card-footer d-flex justify-content-end">
        <div class="form-group me-2">
          <a href="#" data-url="<?php echo e(route('test.mail')); ?>" data-title="<?php echo e(__('Send Test Mail')); ?>" class="btn btn-primary send_email ">
            <?php echo e(__('Send Test Mail')); ?>

          </a>
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="<?php echo e(__('Save Changes')); ?>">
        </div>
      </div>
    </div>
    <?php echo e(Form::close()); ?>

  </div>
</div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/superadmin/pages/email.blade.php ENDPATH**/ ?>