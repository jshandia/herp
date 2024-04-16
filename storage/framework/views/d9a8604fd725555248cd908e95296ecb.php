<!--Business Setting-->
<div id="brand-settings" class="card">
    <?php echo e(Form::model($setting, ['route' => 'business.setting', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

    <div class="card-header">
        <h5><?php echo e(__('Brand')); ?></h5>
        <small class="text-muted"><?php echo e(__('Edit your brand details')); ?></small>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card logo_card">
                    <div class="card-header">
                        <h5><?php echo e(__('Logo dark')); ?></h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class=" setting-card">
                            <div class="logo-content mt-4">
                                <img id="image" src="<?php echo e($logo . '/' . (isset($logo_dark) && !empty($logo_dark) ? $logo_dark : 'logo-dark.png') . '?timestamp=' . time()); ?>" class="big-logo">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_logo_dark">
                                    <div class="bg-primary company_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        <?php echo e(__('Choose file here')); ?>

                                    </div>
                                    <input type="file" name="company_logo_dark" id="company_logo_dark" class="form-control file setting_logo" data-filename="company_logo_update">
                                </label>
                            </div>
                            <?php $__errorArgs = ['company_logo_dark'];
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
                        <div class="setting-card">
                            <div class="logo-content mt-4">
                                <img id="image1" src="<?php echo e($logo . '/' . (isset($logo_light) && !empty($logo_light) ? $logo_light : 'logo-light.png') . '?timestamp=' . time()); ?>" class="big-logo img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_logo_light">
                                    <div class=" bg-primary dark_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        <?php echo e(__('Choose file here')); ?>

                                    </div>
                                    <input type="file" class="form-control file setting_logo" name="company_logo_light" id="company_logo_light" data-filename="dark_logo_update">
                                </label>
                            </div>
                            <?php $__errorArgs = ['company_logo_light'];
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
                                <img id="image2" src="<?php echo e((!empty($company_favicon) ? $logo . '/' . $company_favicon : $logo . '/' . 'favicon.png') . '?timestamp=' . time()); ?>" width="50px" class="img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_favicon">
                                    <div class="bg-primary company_favicon_update">
                                        <i class="ti ti-upload px-1"></i>
                                        <?php echo e(__('Choose file here')); ?>

                                    </div>
                                    <input type="file" class="form-control file setting_logo" id="company_favicon" name="company_favicon" data-filename="company_favicon_update">
                                </label>
                            </div>
                            <?php $__errorArgs = ['logo'];
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
                        <h5><?php echo e(__('Home Background')); ?></h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="setting-card">
                            <div class="logo-content mt-4">
                                <img id="image6" src="<?php echo e($logo . '/' . (isset($company_home_background) && !empty($company_home_background) ? $company_home_background : 'company-home-background.png') . '?timestamp=' . time()); ?>" class="big-logo img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_home_background">
                                    <div class=" bg-primary dark_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        <?php echo e(__('Choose file here')); ?>

                                    </div>
                                    <input type="file" class="form-control file setting_logo" name="company_home_background" id="company_home_background" data-filename="home_background_update">
                                </label>
                            </div>
                            <?php $__errorArgs = ['company_home_background'];
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
            <div class="form-group col-md-3">
                <?php echo e(Form::label('title_text', __('Title Text'), ['class' => 'form-label'])); ?>

                <?php echo e(Form::text('title_text', null, ['class' => 'form-control', 'placeholder' => __('Title Text')])); ?>

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
            <div class="col-md-3 form-group">
                <?php echo e(Form::label('footer_text', __('Footer Text'), ['class' => 'form-label'])); ?>

                <?php echo e(Form::text('footer_text', Utility::getValByName('footer_text'), ['class' => 'form-control', 'placeholder' => __('Enter Footer Text')])); ?>

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
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo e(Form::label('default_language', __('Default Language'), ['class' => 'form-label text-dark'])); ?>

                    <div class="changeLanguage">
                        <select name="default_language" id="default_language" class="form-control select">
                            <?php $__currentLoopData = \App\Models\Utility::languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($lang == $code): ?> selected <?php endif; ?> value="<?php echo e($code); ?>"><?php echo e(ucFirst($language)); ?></option>
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
            <div class="form-group col-md-3">
                <div class="custom-control custom-switch">
                    <label class="text-dark mb-1 mt-1" for="SITE_RTL"><?php echo e(__('Enable RTL')); ?></label>
                    <div class="">
                        <input type="checkbox" name="SITE_RTL" id="SITE_RTL" data-toggle="switchbutton" data-onstyle="primary" <?php echo e($SITE_RTL == 'on' ? 'checked="checked"' : ''); ?>>
                        <label class="custom-control-label" for="SITE_RTL"></label>
                    </div>
                </div>
            </div>
            <h5 class="small-title mt-2"><?php echo e(__('Theme Customizer')); ?></h5>
            <div class="setting-card setting-logo-box ">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="credit-card" class="me-2"></i><?php echo e(__('Primary color settings')); ?>

                        </h6>
                        <hr class="my-2" />
                        <div class="theme-color themes-color">
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-1' ? 'active_color' : ''); ?>"
                                data-value="theme-1"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-1"<?php echo e($color == 'theme-1' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-2' ? 'active_color' : ''); ?>"
                                data-value="theme-2"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-2"<?php echo e($color == 'theme-2' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-3' ? 'active_color' : ''); ?>"
                                data-value="theme-3"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-3"<?php echo e($color == 'theme-3' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-4' ? 'active_color' : ''); ?>"
                                data-value="theme-4"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-4"<?php echo e($color == 'theme-4' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-5' ? 'active_color' : ''); ?>"
                                data-value="theme-5"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-5"<?php echo e($color == 'theme-5' ? 'checked' : ''); ?>>
                            <br>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-6' ? 'active_color' : ''); ?>"
                                data-value="theme-6"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-6"<?php echo e($color == 'theme-6' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-7' ? 'active_color' : ''); ?>"
                                data-value="theme-7"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-7"<?php echo e($color == 'theme-7' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-8' ? 'active_color' : ''); ?>"
                                data-value="theme-8"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-8"<?php echo e($color == 'theme-8' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-9' ? 'active_color' : ''); ?>"
                                data-value="theme-9"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-9"<?php echo e($color == 'theme-9' ? 'checked' : ''); ?>>
                            <a href="#!"
                                class="themes-color-change <?php echo e($color == 'theme-10' ? 'active_color' : ''); ?>"
                                data-value="theme-10"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-10"<?php echo e($color == 'theme-10' ? 'checked' : ''); ?>>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="layout" class="me-2"></i><?php echo e(__('Sidebar settings')); ?>

                        </h6>
                        <hr class="mt-1" />
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="cust-theme-bg"
                                name="cust_theme_bg"
                                <?php echo e(!empty($settings['cust_theme_bg']) && $settings['cust_theme_bg'] == 'on' ? 'checked' : ''); ?> />
                            <label class="form-check-label f-w-600 pl-1"
                                for="cust-theme-bg"><?php echo e(__('Transparent layout')); ?></label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="sun" class="me-2"></i><?php echo e(__('Layout settings')); ?>

                        </h6>
                        <hr class="mt-1" />
                        <div class="form-check form-switch mt-2">
                            <input type="checkbox" class="form-check-input" id="cust-darklayout"
                                name="cust_darklayout"
                                <?php echo e(!empty($settings['cust_darklayout']) && $settings['cust_darklayout'] == 'on' ? 'checked' : ''); ?> />
                            <label class="form-check-label f-w-600 pl-1"
                                for="cust-darklayout"><?php echo e(__('Dark Layout')); ?></label>
                        </div>
                    </div>
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

</div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/brand.blade.php ENDPATH**/ ?>