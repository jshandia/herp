<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Landing Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>

<?php
    $settings = \Modules\LandingPage\Entities\LandingPageSetting::landingPageSetting();
    $logo=\App\Models\Utility::get_file('uploads/landing_page_image');
?>


<?php $__env->startPush('css-page'); ?>
    <link rel="stylesheet" href=" <?php echo e(Module::asset('LandingPage:Resources/assets/css/summernote/summernote-bs4.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-page'); ?>
    <script src="<?php echo e(Module::asset('LandingPage:Resources/assets/js/plugins/summernote-bs4.js')); ?>" referrerpolicy="origin"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top" style="top:30px">
                        <div class="list-group list-group-flush" id="useradd-sidenav">

                            <?php echo $__env->make('landingpage::layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10">
                                        <h5><?php echo e(__('Discover')); ?></h5>
                                    </div>
                                </div>
                            </div>

                            <?php echo e(Form::open(array('route' => 'discover.store', 'method'=>'post', 'enctype' => "multipart/form-data"))); ?>

                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Heading', __('Heading'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::text('discover_heading',$settings['discover_heading'], ['class' => 'form-control ', 'placeholder' => __('Enter Heading')])); ?>

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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Description', __('Description'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::text('discover_description', $settings['discover_description'], ['class' => 'form-control', 'placeholder' => __('Enter Description')])); ?>

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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Live Demo Link', __('Live Demo Link'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::text('discover_live_demo_link', $settings['discover_live_demo_link'], ['class' => 'form-control', 'placeholder' => __('Enter Link')])); ?>

                                                <?php $__errorArgs = ['discover_live_demo_link'];
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Buy Now Link', __('Buy Now Link'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::text('discover_buy_now_link', $settings['discover_buy_now_link'], ['class' => 'form-control', 'placeholder' => __('Enter Link')])); ?>

                                                <?php $__errorArgs = ['discover_buy_now_link'];
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
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-print-invoice btn-primary m-r-10" type="submit" ><?php echo e(__('Save Changes')); ?></button>
                                </div>
                            <?php echo e(Form::close()); ?>


                        </div>


                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                        <a data-size="lg" data-url="<?php echo e(route('discover_create')); ?>" data-ajax-popup="true"  data-bs-toggle="tooltip" title="<?php echo e(__('Discover Feature Create')); ?>"  class="btn btn-sm btn-primary">
                                            <i class="ti ti-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><?php echo e(__('No')); ?></th>
                                                <th><?php echo e(__('Name')); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if(is_array($discover_of_features) || is_object($discover_of_features)): ?>
                                           <?php
                                                $no = 1
                                            ?>
                                                <?php $__currentLoopData = $discover_of_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($no++); ?></td>
                                                        <td><?php echo e($value['discover_heading']); ?></td>
                                                        <td>
                                                            <span>
                                                                <div class="action-btn bg-primary ms-2">
                                                                        <a href="#" class="mx-3 btn btn-sm align-items-center" data-url="<?php echo e(route('discover_edit',$key)); ?>" data-ajax-popup="true" data-title="<?php echo e(__('Edit Page')); ?>" data-size="lg" data-bs-toggle="tooltip"  title="<?php echo e(__('Edit')); ?>" data-original-title="<?php echo e(__('Edit')); ?>">
                                                                        <i class="ti ti-pencil text-white"></i>
                                                                    </a>
                                                                </div>

                                                                    <div class="action-btn bg-danger ms-2">
                                                                    <?php echo Form::open(['method' => 'GET', 'route' => ['discover_delete', $key],'id'=>'delete-form-'.$key]); ?>


                                                                        <a href="#" class="mx-3 btn btn-sm align-items-center bs-pass-para" data-bs-toggle="tooltip" title="<?php echo e(__('Delete')); ?>" data-original-title="<?php echo e(__('Delete')); ?>" data-confirm="<?php echo e(__('Are You Sure?').'|'.__('This action can not be undone. Do you want to continue?')); ?>" data-confirm-yes="document.getElementById('delete-form-<?php echo e($key); ?>').submit();">
                                                                        <i class="ti ti-trash text-white"></i>
                                                                        </a>
                                                                        <?php echo Form::close(); ?>

                                                                    </div>
                                                                </span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\herp\Modules/LandingPage\Resources/views/landingpage/discover/index.blade.php ENDPATH**/ ?>