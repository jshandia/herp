<!--Email Notification Settings-->
                    <div id="email-notification-settings" class="card">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h5><?php echo e(__('Email Notification')); ?></h5>
                                <small class="text-muted"><?php echo e(__('Edit email notification settings')); ?></small>
                            </div>
                            <?php echo e(Form::model($setting, ['route' => ['status.email.language'], 'method' => 'post'])); ?>

                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <?php $__currentLoopData = $EmailTemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EmailTemplate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                            <div class="list-group">
                                                <div class="list-group-item form-switch form-switch-right">
                                                    <label class="form-label"
                                                        style="margin-left:5%;"><?php echo e($EmailTemplate->name); ?></label>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    

                                                    <input class="form-check-input" name='<?php echo e($EmailTemplate->id); ?>'
                                                        id="email_tempalte_<?php echo e($EmailTemplate->template->id); ?>"
                                                        type="checkbox"
                                                        <?php if($EmailTemplate->template->is_active == 1): ?> checked="checked" <?php endif; ?>
                                                        type="checkbox" value="1"
                                                        data-url="<?php echo e(route('status.email.language', [$EmailTemplate->template->id])); ?>" />
                                                    <label class="form-check-label"
                                                        for="email_tempalte_<?php echo e($EmailTemplate->template->id); ?>"></label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <div class="form-group">
                                    <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                        value="<?php echo e(__('Save Changes')); ?>">
                                </div>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/emailnotification.blade.php ENDPATH**/ ?>