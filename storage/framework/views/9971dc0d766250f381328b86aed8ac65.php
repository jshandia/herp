<!--Twilio Settings-->
                    <div id="twilio-settings" class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Twilio')); ?></h5>
                            <small class="text-muted"><?php echo e(__('Edit your Twilio settings')); ?></small>
                        </div>
                        <?php echo e(Form::model($setting, ['route' => 'twilio.setting', 'method' => 'post'])); ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <?php echo e(Form::label('twilio_sid', __('Twilio SID '), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::text('twilio_sid', isset($setting['twilio_sid']) ? $setting['twilio_sid'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio SID'), 'required' => 'required'])); ?>

                                        <?php $__errorArgs = ['twilio_sid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-twilio_sid" role="alert">
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
                                        <?php echo e(Form::label('twilio_token', __('Twilio Token'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::text('twilio_token', isset($setting['twilio_token']) ? $setting['twilio_token'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio Token'), 'required' => 'required'])); ?>

                                        <?php $__errorArgs = ['twilio_token'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-twilio_token" role="alert">
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
                                        <?php echo e(Form::label('twilio_from', __('Twilio From'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::text('twilio_from', isset($setting['twilio_from']) ? $setting['twilio_from'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Twilio From'), 'required' => 'required'])); ?>

                                        <?php $__errorArgs = ['twilio_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-twilio_from" role="alert">
                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4 mb-2">
                                    <h5 class="small-title"><?php echo e(__('Module Settings')); ?></h5>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Customer')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_customer_notification', '1', isset($setting['twilio_customer_notification']) && $setting['twilio_customer_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_customer_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_customer_notification"></label>
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Vendor')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_vender_notification', '1', isset($setting['twilio_vender_notification']) && $setting['twilio_vender_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_vender_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_vender_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Invoice')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_invoice_notification', '1', isset($setting['twilio_invoice_notification']) && $setting['twilio_invoice_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_invoice_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_invoice_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Revenue')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_revenue_notification', '1', isset($setting['twilio_revenue_notification']) && $setting['twilio_revenue_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_revenue_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_revenue_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Bill')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_bill_notification', '1', isset($setting['twilio_bill_notification']) && $setting['twilio_bill_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_bill_notification'])); ?>

                                                <label class="form-check-label" for="twilio_bill_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Proposal')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_proposal_notification', '1', isset($setting['twilio_proposal_notification']) && $setting['twilio_proposal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_proposal_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_proposal_notification"></label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Payment')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_payment_notification', '1', isset($setting['twilio_payment_notification']) && $setting['twilio_payment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_payment_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_payment_notification"></label>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('Invoice Reminder')); ?></span>
                                                <?php echo e(Form::checkbox('twilio_reminder_notification', '1', isset($setting['twilio_reminder_notification']) && $setting['twilio_reminder_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'twilio_reminder_notification'])); ?>

                                                <label class="form-check-label"
                                                    for="twilio_reminder_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
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

                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/twilio.blade.php ENDPATH**/ ?>