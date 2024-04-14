<?php
$users=\Auth::user();
    $profile=\App\Models\Utility::get_file('uploads/avatar/');
    $languages=\App\Models\Utility::languages();

    $lang = isset($users->lang)?$users->lang:'en';
    if ($lang == null) {
        $lang = 'en';
    }
    // $LangName = \App\Models\Language::where('code',$lang)->first();
    // $LangName =\App\Models\Language::languageData($lang);
    $LangName = cache()->remember('full_language_data_' . $lang, now()->addHours(24), function () use ($lang) {
    return \App\Models\Language::languageData($lang);
    });

    $setting = \App\Models\Utility::settings();

    $unseenCounter=App\Models\ChMessage::where('to_id', Auth::user()->id)->where('seen', 0)->count();
?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Profile Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-page'); ?>
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#useradd-sidenav',
            offset: 300,
        })
        $(".list-group-item").click(function(){
            $('.list-group-item').filter(function(){
                return this.href == id;
            }).parent().removeClass('text-primary');
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Profile')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3">
            <div class="card sticky-top" style="top:30px">
                <div class="list-group list-group-flush" id="useradd-sidenav">
                    <a href="#personal_info" class="list-group-item list-group-item-action border-0"><?php echo e(__('Personal Info')); ?> <div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
                    <a href="#change_password" class="list-group-item list-group-item-action border-0"><?php echo e(__('Change Password')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
                    <a href="#change_language" class="list-group-item list-group-item-action border-0"><?php echo e(__('Change Language')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
            <div id="personal_info" class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Personal Info')); ?></h5>
                </div>
                <div class="card-body">
                    <?php echo e(Form::model($userDetail,array('route' => array('update.account'), 'method' => 'post', 'enctype' => "multipart/form-data"))); ?>

                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label text-dark"><?php echo e(__('Name')); ?></label>
                                    <input class="form-control" name="name" type="text" id="name" placeholder="<?php echo e(__('Enter Your Name')); ?>" value="<?php echo e($userDetail->name); ?>" required autocomplete="name">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-dark"><?php echo e(__('Email')); ?></label>
                                    <input class="form-control" name="email" type="text" id="email" placeholder="<?php echo e(__('Enter Your Email Address')); ?>" value="<?php echo e($userDetail->email); ?>" required autocomplete="email">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="choose-files">
                                        <label for="avatar">
                                            <div class=" bg-primary profile_update"> <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?></div>
                                            <input type="file" class="form-control file" name="profile" id="avatar" data-filename="profile_update">
                                        </label>
                                    </div>
                                    <span class="text-xs text-muted"><?php echo e(__('Please upload a valid image file. Size of image should not be more than 2MB.')); ?></span>
                                    

                                </div>

                            </div>
                            <div class="col-lg-12 text-end">
                                <input type="submit" value="<?php echo e(__('Save Changes')); ?>" class="btn btn-print-invoice  btn-primary m-r-10">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <div id="change_password" class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Change Password')); ?></h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('update.password')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 form-group">
                                <label for="old_password" class="col-form-label text-dark"><?php echo e(__('Old Password')); ?></label>
                                <input class="form-control" name="old_password" type="password" id="old_password" required autocomplete="old_password" placeholder="<?php echo e(__('Enter Old Password')); ?>">
                                
                            </div>

                            <div class="col-lg-6 col-sm-6 form-group">
                                <label for="password" class="col-form-label text-dark"><?php echo e(__('New Password')); ?></label>
                                <input class="form-control" name="password" type="password" required autocomplete="new-password" id="password" placeholder="<?php echo e(__('Enter Your Password')); ?>">
                                
                            </div>
                            <div class="col-lg-6 col-sm-6 form-group">
                                <label for="password_confirmation" class="col-form-label text-dark"><?php echo e(__('New Confirm Password')); ?></label>
                                <input class="form-control" name="password_confirmation" type="password" required autocomplete="new-password" id="password_confirmation" placeholder="<?php echo e(__('Enter Your Password')); ?>">
                            </div>
                            <div class="col-lg-12 text-end">
                                <input type="submit" value="<?php echo e(__('Change Password')); ?>" class="btn btn-print-invoice  btn-primary m-r-10">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div id="change_language" class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Change Language')); ?></h5>
                </div>
                <div class="card-body">
                    <div class="ms-auto">
                        <ul class="list-unstyled">
                            <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" >
                        <i class="ti ti-world nocolor"></i>
                        <span class="drp-text hide-mob"><?php echo e(ucfirst($LangName->full_name)); ?></span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('change.language', $code)); ?>" class="dropdown-item <?php echo e($lang == $code ? 'text-primary' : ''); ?>">
                                <span><?php echo e(ucFirst($language)); ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <h>
                        </h>
                            <?php if(\Auth::user()->type=='super admin'): ?>
                                <a  data-url="<?php echo e(route('create.language')); ?>" class="dropdown-item text-primary"  data-ajax-popup="true" data-title="<?php echo e(__('Create New Language')); ?>">
                                    <?php echo e(__('Create Language')); ?>

                                </a>
                                <a class="dropdown-item text-primary" href="<?php echo e(route('manage.language',[isset($lang)?$lang:'english'])); ?>"><?php echo e(__('Manage Language')); ?></a>
                            <?php endif; ?>
                    </div>
                </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/user/profile.blade.php ENDPATH**/ ?>