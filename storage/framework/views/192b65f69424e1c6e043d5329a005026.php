<!--Time-Tracker Settings-->
                    <div id="tracker-settings" class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Time Tracker')); ?></h5>
                            <small class="text-muted"><?php echo e(__('Edit your Time Tracker settings')); ?></small>
                        </div>
                        <?php echo e(Form::model($setting, ['route' => 'tracker.settings', 'method' => 'post'])); ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo e(__('Application URL')); ?></label> <br>
                                    <small><?php echo e(__('Application URL to log into the app.')); ?></small>
                                    <?php echo e(Form::text('apps_url', URL::to('/'), ['class' => 'form-control', 'placeholder' => __('Application URL'), 'readonly' => 'true'])); ?>

                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label"><?php echo e(__('Tracking Interval')); ?></label> <br>
                                    <small><?php echo e(__('Image Screenshot Take Interval time ( 1 = 1 min)')); ?></small>
                                    <?php echo e(Form::number('interval_time', isset($setting['interval_time']) ? $setting['interval_time'] : '10', ['class' => 'form-control', 'placeholder' => __('Enter Tracking Interval Time')])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="form-group">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                    value="<?php echo e(__('Save Changes')); ?>">
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/timetracker.blade.php ENDPATH**/ ?>