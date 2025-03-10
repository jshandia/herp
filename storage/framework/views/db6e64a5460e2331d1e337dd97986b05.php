<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Print-Settings')); ?></li>
<?php $__env->stopSection(); ?>

<?php
    $logo=\App\Models\Utility::get_file('uploads/logo');
    $company_logo=Utility::getValByName('company_logo');
    $company_favicon=Utility::getValByName('company_favicon');
 $lang=Utility::getValByName('default_language');
?>
<?php $__env->startPush('script-page'); ?>
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#useradd-sidenav',
            offset: 300
        })
    </script>
    <script>
        <!--Purchase Setting-->

        $(document).on("change", "select[name='purchase_template'], input[name='purchase_color']", function () {
            var template = $("select[name='purchase_template']").val();
            var color = $("input[name='purchase_color']:checked").val();
            $('#purchase_frame').attr('src', '<?php echo e(url('/purchase/preview')); ?>/' + template + '/' + color);
        });
        document.getElementById('purchase_logo').onchange = function () {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('purchase_image').src = src
        }

        <!--POS Setting-->

        $(document).on("change", "select[name='pos_template'], input[name='pos_color']", function () {
            var template = $("select[name='pos_template']").val();
            var color = $("input[name='pos_color']:checked").val();
            $('#pos_frame').attr('src', '<?php echo e(url('/pos/preview')); ?>/' + template + '/' + color);
        });

        document.getElementById('pos_logo').onchange = function () {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('pos_image').src = src
        }

    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-12 mt-4">
        <div class="card">
            <div class="card-body">
                

                <div class="tab-content" id="pills-tabContent">

                    <!--Purchase Setting-->
                    

                    <!--POS Setting-->
                    <div class="tab-pane fade show active" id="pills-pos" role="tabpanel" aria-labelledby="pills-pos-tab">
                        <div class="bg-none">
                            <div class="row company-setting">
                                <div class="col-md-3">
                                    <div class="card-body">
                                        <h5></h5>
                                        <form id="setting-form" method="post" action="<?php echo e(route('pos.template.setting')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="address" class="form-label"><?php echo e(__('POS Template')); ?></label>
                                                <select class="form-control" name="pos_template">
                                                    <?php $__currentLoopData = App\Models\Utility::templateData()['templates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key); ?>" <?php echo e((isset($settings['pos_template']) && $settings['pos_template'] == $key) ? 'selected' : ''); ?>><?php echo e($template); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label"><?php echo e(__('Color Input')); ?></label>
                                                <div class="row gutters-xs">
                                                    <?php $__currentLoopData = Utility::templateData()['colors']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-auto">
                                                            <label class="colorinput">
                                                                <input name="pos_color" type="radio" value="<?php echo e($color); ?>" class="colorinput-input" <?php echo e((isset($settings['pos_color']) && $settings['pos_color'] == $color) ? 'checked' : ''); ?>>
                                                                <span class="colorinput-color" style="background: #<?php echo e($color); ?>"></span>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label"><?php echo e(__('POS Logo')); ?></label>
                                                <div class="choose-files mt-2 ">
                                                    <label for="pos_logo">
                                                        <div class=" bg-primary pos_logo_update"> <i class="ti ti-upload px-1"></i><?php echo e(__('Choose file here')); ?></div>
                                                        <input type="file" class="form-control file" name="pos_logo" id="pos_logo" data-filename="pos_logo_update">
                                                        <img id="pos_image" class="mt-2" style="width:25%;"/>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mt-2 text-end">
                                                <input type="submit" value="<?php echo e(__('Save')); ?>" class="btn btn-print-invoice  btn-primary m-r-10">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <?php if(isset($settings['pos_template']) && isset($settings['pos_color'])): ?>
                                        <iframe id="pos_frame" class="w-100 h-100" frameborder="0" src="<?php echo e(route('pos.preview',[$settings['pos_template'],$settings['pos_color']])); ?>"></iframe>
                                    <?php else: ?>
                                        <iframe id="pos_frame" class="w-100 h-100" frameborder="0" src="<?php echo e(route('pos.preview',['template1','fffff'])); ?>"></iframe>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/pos.blade.php ENDPATH**/ ?>