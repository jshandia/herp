
<?php
    use App\Models\Utility;
    use App\Models\WebhookSetting;
    $setting = \App\Models\Utility::settings();
    $logo = \App\Models\Utility::get_file('uploads/logo');
    $company_home_background = $setting['company_home_background'] ?? '';



    $color = !empty($setting['color']) ? $setting['color'] : 'theme-3';
    $SITE_RTL = isset($setting['SITE_RTL']) ? $setting['SITE_RTL'] : 'off';

    $currantLang = Utility::languages();
    $lang = \App\Models\Utility::getValByName('default_language');
    $webhookSetting = WebhookSetting::where('created_by', '=', \Auth::user()->creatorId())->get();

?>
<?php $__env->startSection('page-title'); ?>
Welcome to the app!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12" style="justify-content: center; align-content: top;">
        <img style="opacity:0.5;width:100%;height:85%;object-fit:contain;" src="<?php echo e($logo . '/' . (isset($company_home_background) && !empty($company_home_background) ? $company_home_background : 'company-home-background.png') . '?timestamp=' . time()); ?>" alt="Gambar Transparan">
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/blank/blank.blade.php ENDPATH**/ ?>