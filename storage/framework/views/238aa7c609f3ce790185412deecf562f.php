
                    <div id="chat-gpt-settings" class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Chat GPT')); ?></h5>
                        </div>
                        <?php echo e(Form::model($settings,array('route'=>'chatgpt.settings','method'=>'post'))); ?>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <?php echo e(Form::text('chat_gpt_key',isset($settings['chat_gpt_key'])?$settings['chat_gpt_key']:'', ['class' => 'form-control', 'placeholder' => __('Enter Chat GPT API Key')])); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="<?php echo e(__('Save Changes')); ?>">
                            </div>
                        <?php echo e(Form::close()); ?>

                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/superadmin/pages/chatgpt.blade.php ENDPATH**/ ?>