<!--Business Setting-->
<div id="brand-settings" class="card">
    {{ Form::model($setting, ['route' => 'business.setting', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="card-header">
        <h5>{{ __('Brand') }}</h5>
        <small class="text-muted">{{ __('Edit your brand details') }}</small>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card logo_card">
                    <div class="card-header">
                        <h5>{{ __('Logo dark') }}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class=" setting-card">
                            <div class="logo-content mt-4">
                                <img id="image" src="{{ $logo . '/' . (isset($logo_dark) && !empty($logo_dark) ? $logo_dark : 'logo-dark.png') . '?timestamp=' . time() }}" class="big-logo">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_logo_dark">
                                    <div class="bg-primary company_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        {{ __('Choose file here') }}
                                    </div>
                                    <input type="file" name="company_logo_dark" id="company_logo_dark" class="form-control file setting_logo" data-filename="company_logo_update">
                                </label>
                            </div>
                            @error('company_logo_dark')
                            <div class="row">
                                <span class="invalid-logo" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card logo_card">
                    <div class="card-header">
                        <h5>{{ __('Logo Light') }}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="setting-card">
                            <div class="logo-content mt-4">
                                <img id="image1" src="{{ $logo . '/' . (isset($logo_light) && !empty($logo_light) ? $logo_light : 'logo-light.png') . '?timestamp=' . time() }}" class="big-logo img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_logo_light">
                                    <div class=" bg-primary dark_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        {{ __('Choose file here') }}
                                    </div>
                                    <input type="file" class="form-control file setting_logo" name="company_logo_light" id="company_logo_light" data-filename="dark_logo_update">
                                </label>
                            </div>
                            @error('company_logo_light')
                            <div class="row">
                                <span class="invalid-logo" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card logo_card">
                    <div class="card-header">
                        <h5>{{ __('Favicon') }}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class=" setting-card">
                            <div class="logo-content mt-4">
                                <img id="image2" src="{{ (!empty($company_favicon) ? $logo . '/' . $company_favicon : $logo . '/' . 'favicon.png') . '?timestamp=' . time() }}" width="50px" class="img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_favicon">
                                    <div class="bg-primary company_favicon_update">
                                        <i class="ti ti-upload px-1"></i>
                                        {{ __('Choose file here') }}
                                    </div>
                                    <input type="file" class="form-control file setting_logo" id="company_favicon" name="company_favicon" data-filename="company_favicon_update">
                                </label>
                            </div>
                            @error('logo')
                            <div class="row">
                                <span class="invalid-logo" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card logo_card">
                    <div class="card-header">
                        <h5>{{ __('Company Home Background') }}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="setting-card">
                            <div class="logo-content mt-4">
                                <img id="image6" src="{{ $logo . '/' . (isset($company_home_background) && !empty($company_home_background) ? $company_home_background : 'company-home-background.png') . '?timestamp=' . time() }}" class="big-logo img_setting">
                            </div>
                            <div class="choose-files mt-5">
                                <label for="company_home_background">
                                    <div class=" bg-primary dark_logo_update">
                                        <i class="ti ti-upload px-1"></i>
                                        {{ __('Choose file here') }}
                                    </div>
                                    <input type="file" class="form-control file setting_logo" name="company_home_background" id="company_home_background" data-filename="home_background_update">
                                </label>
                            </div>
                            @error('company_home_background')
                            <div class="row">
                                <span class="invalid-logo" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('title_text', __('Title Text'), ['class' => 'form-label']) }}
                {{ Form::text('title_text', null, ['class' => 'form-control', 'placeholder' => __('Title Text')]) }}
                @error('title_text')
                <span class="invalid-title_text" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-3 form-group">
                {{ Form::label('footer_text', __('Footer Text'), ['class' => 'form-label']) }}
                {{ Form::text('footer_text', Utility::getValByName('footer_text'), ['class' => 'form-control', 'placeholder' => __('Enter Footer Text')]) }}
                @error('footer_text')
                <span class="invalid-footer_text" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('default_language', __('Default Language'), ['class' => 'form-label text-dark']) }}
                    <div class="changeLanguage">
                        <select name="default_language" id="default_language" class="form-control select">
                            @foreach (\App\Models\Utility::languages() as $code => $language)
                            <option @if ($lang == $code) selected @endif value="{{ $code }}">{{ ucFirst($language) }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('default_language')
                    <span class="invalid-default_language" role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="custom-control custom-switch">
                    <label class="text-dark mb-1 mt-1" for="SITE_RTL">{{ __('Enable RTL') }}</label>
                    <div class="">
                        <input type="checkbox" name="SITE_RTL" id="SITE_RTL" data-toggle="switchbutton" data-onstyle="primary" {{ $SITE_RTL == 'on' ? 'checked="checked"' : '' }}>
                        <label class="custom-control-label" for="SITE_RTL"></label>
                    </div>
                </div>
            </div>
            <h5 class="small-title mt-2">{{ __('Theme Customizer') }}</h5>
            <div class="setting-card setting-logo-box ">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="credit-card" class="me-2"></i>{{ __('Primary color settings') }}
                        </h6>
                        <hr class="my-2" />
                        <div class="theme-color themes-color">
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-1' ? 'active_color' : '' }}"
                                data-value="theme-1"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-1"{{ $color == 'theme-1' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-2' ? 'active_color' : '' }}"
                                data-value="theme-2"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-2"{{ $color == 'theme-2' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-3' ? 'active_color' : '' }}"
                                data-value="theme-3"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-3"{{ $color == 'theme-3' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-4' ? 'active_color' : '' }}"
                                data-value="theme-4"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-4"{{ $color == 'theme-4' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-5' ? 'active_color' : '' }}"
                                data-value="theme-5"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-5"{{ $color == 'theme-5' ? 'checked' : '' }}>
                            <br>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-6' ? 'active_color' : '' }}"
                                data-value="theme-6"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-6"{{ $color == 'theme-6' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-7' ? 'active_color' : '' }}"
                                data-value="theme-7"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-7"{{ $color == 'theme-7' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-8' ? 'active_color' : '' }}"
                                data-value="theme-8"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-8"{{ $color == 'theme-8' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-9' ? 'active_color' : '' }}"
                                data-value="theme-9"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-9"{{ $color == 'theme-9' ? 'checked' : '' }}>
                            <a href="#!"
                                class="themes-color-change {{ $color == 'theme-10' ? 'active_color' : '' }}"
                                data-value="theme-10"></a>
                            <input type="radio" class="theme_color d-none" name="color"
                                value="theme-10"{{ $color == 'theme-10' ? 'checked' : '' }}>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="layout" class="me-2"></i>{{ __('Sidebar settings') }}
                        </h6>
                        <hr class="mt-1" />
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="cust-theme-bg"
                                name="cust_theme_bg"
                                {{ !empty($settings['cust_theme_bg']) && $settings['cust_theme_bg'] == 'on' ? 'checked' : '' }} />
                            <label class="form-check-label f-w-600 pl-1"
                                for="cust-theme-bg">{{ __('Transparent layout') }}</label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-4">
                        <h6 class="mt-1">
                            <i data-feather="sun" class="me-2"></i>{{ __('Layout settings') }}
                        </h6>
                        <hr class="mt-1" />
                        <div class="form-check form-switch mt-2">
                            <input type="checkbox" class="form-check-input" id="cust-darklayout"
                                name="cust_darklayout"
                                {{ !empty($settings['cust_darklayout']) && $settings['cust_darklayout'] == 'on' ? 'checked' : '' }} />
                            <label class="form-check-label f-w-600 pl-1"
                                for="cust-darklayout">{{ __('Dark Layout') }}</label>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="form-group">
            <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="{{ __('Save Changes') }}">
        </div>
    </div>
    {{ Form::close() }}
</div>