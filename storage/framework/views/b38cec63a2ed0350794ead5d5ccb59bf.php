<!--Site Settings-->
<div id="brand-settings" class="card">
  <div class="card-header">
    <h5><?php echo e(__('Brand')); ?></h5>
  </div>
  <?php echo e(Form::model($settings, ['url' => 'systems', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

  <div class="card-body">
    <div class="row">
      <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="card logo_card">
          <div class="card-header">
            <h5><?php echo e(__('Logo dark')); ?></h5>
          </div>
          <div class="card-body pt-0">
            <div class="setting-card">
              <div class="logo-content mt-4">
                <img id="image" src="<?php echo e($logo.'/'.(isset($logo_dark) && !empty($logo_dark)?$logo_dark:'logo-dark.png').'?timestamp='.time()); ?>" class="big-logo">
              </div>
              <div class="choose-files mt-5">
                <label for="logo_dark">
                  <div class=" bg-primary company_logo_update">
                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                  </div>
                  <input type="file" name="logo_dark" id="logo_dark" class="form-control file" data-filename="logo_dark">
                </label>
              </div>
              <?php $__errorArgs = ['logo_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="row">
                <span class="invalid-logo" role="alert">
                  <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="card logo_card">
          <div class="card-header">
            <h5><?php echo e(__('Logo Light')); ?></h5>
          </div>
          <div class="card-body pt-0">
            <div class=" setting-card">
              <div class="logo-content mt-4">
                <img id="image1" src="<?php echo e($logo.'/'.(isset($logo_light) && !empty($logo_light)?$logo_light:'logo-light.png').'?timestamp='.time()); ?>" class="big-logo img_setting">
              </div>
              <div class="choose-files mt-5">
                <label for="logo_light">
                  <div class=" bg-primary dark_logo_update">
                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                  </div>
                  <input type="file" name="logo_light" id="logo_light" class="form-control file" data-filename="logo_light">
                </label>
              </div>
              <?php $__errorArgs = ['logo_light'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="row">
                <span class="invalid-logo" role="alert">
                  <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="card logo_card">
          <div class="card-header">
            <h5><?php echo e(__('Favicon')); ?></h5>
          </div>
          <div class="card-body pt-0">
            <div class=" setting-card">
              <div class="logo-content mt-4">
                <img id="image2" src="<?php echo e($logo.'/'.(isset($company_favicon) && !empty($company_favicon)?$company_favicon:'favicon.png').'?timestamp='.time()); ?>" width="50px" class="img_setting">
              </div>
              <div class="choose-files mt-5">
                <label for="favicon">
                  <div class="bg-primary company_favicon_update">
                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                  </div>
                  <input type="file" class="form-control file"  id="favicon" name="favicon" data-filename="favicon">
                </label>
              </div>
              <?php $__errorArgs = ['favicon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="row">
                <span class="invalid-logo" role="alert">
                  <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="card logo_card">
          <div class="card-header">
            <h5><?php echo e(__('Login Picture Left')); ?></h5>
          </div>
          <div class="card-body pt-0">
            <div class=" setting-card">
              <div class="logo-content mt-4">
                <img id="image3" src="<?php echo e($logo.'/'.(isset($login_picture_left) && !empty($login_picture_left)?$login_picture_left:'login-picture-left.png').'?timestamp='.time()); ?>" class="big-logo img_setting">
              </div>
              <div class="choose-files mt-5">
                <label for="login_picture_left">
                  <div class=" bg-primary dark_logo_update">
                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                  </div>
                  <input type="file" name="login_picture_left" id="login_picture_left" class="form-control file" data-filename="login_picture_left">
                </label>
              </div>
              <?php $__errorArgs = ['login_picture_left'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="row">
                <span class="invalid-logo" role="alert">
                  <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="card logo_card">
          <div class="card-header">
            <h5><?php echo e(__('Login Picture Right')); ?></h5>
          </div>
          <div class="card-body pt-0">
            <div class=" setting-card">
              <div class="logo-content mt-4">
                <img id="image5" src="<?php echo e($logo.'/'.(isset($login_picture_right) && !empty($login_picture_right)?$login_picture_right:'login-picture-right.png').'?timestamp='.time()); ?>" class="big-logo img_setting">
              </div>
              <div class="choose-files mt-5">
                <label for="login_picture_right">
                  <div class=" bg-primary dark_logo_update">
                    <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?>

                  </div>
                  <input type="file" name="login_picture_right" id="login_picture_right" class="form-control file" data-filename="login_picture_right">
                </label>
              </div>
              <?php $__errorArgs = ['login_picture_right'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="row">
                <span class="invalid-logo" role="alert">
                  <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-4">
          <div class="form-group">
            <?php echo e(Form::label('title_text',__('Title Text'),array('class'=>'form-label'))); ?>

            <?php echo e(Form::text('title_text',null,array('class'=>'form-control','placeholder'=>__('Title Text')))); ?>

            <?php $__errorArgs = ['title_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-title_text" role="alert">
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
            <?php echo e(Form::label('footer_text',__('Footer Text'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('footer_text',Utility::getValByName('footer_text'),array('class'=>'form-control','placeholder'=>__('Enter Footer Text')))); ?>

            <?php $__errorArgs = ['footer_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-footer_text" role="alert">
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
            <?php echo e(Form::label('default_language',__('Default Language'),['class'=>'form-label text-dark'])); ?>

            <div class="changeLanguage">
              <select name="default_language" id="default_language" class="form-control select">
                <?php $__currentLoopData = \App\Models\Utility::languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if($lang == $code): ?> selected <?php endif; ?> value="<?php echo e($code); ?>"> <?php echo e(ucFirst($language)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <?php $__errorArgs = ['default_language'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-default_language" role="alert">
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
        <div class="form-group col-md-2">
          <div class="custom-control custom-switch">
            <label class="text-dark mb-1 mt-3" for="SITE_RTL"><?php echo e(__('Enable RTL')); ?></label>
            <div class="">
              <input type="checkbox" name="SITE_RTL" id="SITE_RTL" data-toggle="switchbutton"  data-onstyle="primary"  <?php echo e($settings['SITE_RTL'] == 'on' ? 'checked="checked"' : ''); ?>>
              <label class="custom-control-label" for="SITE_RTL"></label>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="text-dark mb-1 mt-3" for="display_landing_page"><?php echo e(__('Enable Landing Page')); ?></label>
            <div class="">
              <input type="checkbox" name="display_landing_page" class="form-check-input" id="display_landing_page" data-toggle="switchbutton" <?php echo e((Utility::getValByName('display_landing_page') == 'on') ? 'checked' : ''); ?> data-onstyle="primary">
              <label class="form-check-label" for="display_landing_page"></label>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="text-dark mb-1 mt-3" for="signup_button"><?php echo e(__('Enable Sign-Up Page')); ?></label>
            <div class="">
              <input type="checkbox" name="enable_signup" id="enable_signup" data-toggle="switchbutton"  <?php echo e($settings['enable_signup'] == 'on' ? 'checked="checked"' : ''); ?> data-onstyle="primary">
              <label class="form-check-label" for="enable_signup"></label>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group">
            <label class="text-dark mb-1 mt-3" for="email_verification"><?php echo e(__('Email Verification')); ?></label>
            <div class="">
              <input type="checkbox" name="email_verification" id="email_verification" data-toggle="switchbutton"  <?php echo e($settings['email_verification'] == 'on' ? 'checked="checked"' : ''); ?> data-onstyle="primary">
              <label class="form-check-label" for="email_verification"></label>
            </div>
          </div>
        </div>
      </div>
      <h4 class="small-title"><?php echo e(__('Theme Customizer')); ?></h4>
      <div class="setting-card setting-logo-box p-3">
        <div class="row">
          <div class="col-lg-4 col-xl-4 col-md-4">
            <h6 class="mt-2">
              <i data-feather="credit-card" class="me-2"></i><?php echo e(__('Primary color')); ?>

            </h6>
            <hr class="my-2" />
            <div class="theme-color themes-color">
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-1' ? 'active_color' : ''); ?>" data-value="theme-1"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-1"<?php echo e($settings['color'] == 'theme-1' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-2' ? 'active_color' : ''); ?>" data-value="theme-2"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-2"<?php echo e($settings['color'] == 'theme-2' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-3' ? 'active_color' : ''); ?>" data-value="theme-3"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-3"<?php echo e($settings['color'] == 'theme-3' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-4' ? 'active_color' : ''); ?>" data-value="theme-4"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-4"<?php echo e($settings['color'] == 'theme-4' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-5' ? 'active_color' : ''); ?>" data-value="theme-5"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-5"<?php echo e($settings['color'] == 'theme-5' ? 'checked' : ''); ?>>
              <br>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-6' ? 'active_color' : ''); ?>" data-value="theme-6"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-6"<?php echo e($settings['color'] == 'theme-6' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-7' ? 'active_color' : ''); ?>" data-value="theme-7"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-7"<?php echo e($settings['color'] == 'theme-7' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-8' ? 'active_color' : ''); ?>" data-value="theme-8"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-8"<?php echo e($settings['color'] == 'theme-8' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-9' ? 'active_color' : ''); ?>" data-value="theme-9"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-9"<?php echo e($settings['color'] == 'theme-9' ? 'checked' : ''); ?>>
              <a href="#!" class="themes-color-change <?php echo e($settings['color'] == 'theme-10' ? 'active_color' : ''); ?>" data-value="theme-10"></a>
              <input type="radio" class="theme_color d-none" name="color" value="theme-10"<?php echo e($settings['color'] == 'theme-10' ? 'checked' : ''); ?>>
              
              
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-4">
            <h6 class="mt-2">
              <i data-feather="layout" class="me-2"></i><?php echo e(__('Sidebar')); ?>

            </h6>
            <hr class="my-2" />
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="cust-theme-bg" name="cust_theme_bg" <?php echo e(!empty($settings['cust_theme_bg']) && $settings['cust_theme_bg'] == 'on' ? 'checked' : ''); ?>/>
              <label class="form-check-label f-w-600 pl-1" for="cust-theme-bg"><?php echo e(__('Transparent layout')); ?></label>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-4">
            <h6 class="mt-2">
              <i data-feather="sun" class="me-2"></i><?php echo e(__('Layout')); ?>

            </h6>
            <hr class="my-2" />
            <div class="form-check form-switch mt-2">
              <input type="checkbox" class="form-check-input" id="cust-darklayout" name="cust_darklayout"<?php echo e(!empty($settings['cust_darklayout']) && $settings['cust_darklayout'] == 'on' ? 'checked' : ''); ?> />
              <label class="form-check-label f-w-600 pl-1" for="cust-darklayout"><?php echo e(__('Dark Layout')); ?></label>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <div class="form-group">
          <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="<?php echo e(__('Save Changes')); ?>">
        </div>
      </div>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/superadmin/pages/site.blade.php ENDPATH**/ ?>