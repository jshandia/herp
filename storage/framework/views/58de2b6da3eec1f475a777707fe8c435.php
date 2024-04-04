<!--Slack Settings-->
                    <div id="slack-settings" class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Slack')); ?></h5>
                            <small class="text-muted"><?php echo e(__('Edit your Slack settings')); ?></small>
                        </div>
                        <?php echo e(Form::open(['route' => 'slack.settings', 'id' => 'slack-setting', 'method' => 'post', 'class' => 'd-contents'])); ?>

                        <div class="card-body">
                            <div class="form-group col-md-12">
                                <label class="form-label"><?php echo e(__('Slack Webhook URL')); ?></label> <br>
                                <?php echo e(Form::text('slack_webhook', isset($settings['slack_webhook']) ? $settings['slack_webhook'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Slack Webhook URL'), 'required' => 'required'])); ?>

                            </div>
                            <div class="col-md-12 mt-5 mb-2">
                                <h5 class="small-title"><?php echo e(__('Module Settings')); ?></h5>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Lead')); ?></span>
                                                <?php echo e(Form::checkbox('lead_notification', '1', isset($settings['lead_notification']) && $settings['lead_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'lead_notification'])); ?>

                                                <label class="form-check-label" for="lead_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Deal')); ?></span>
                                                <?php echo e(Form::checkbox('deal_notification', '1', isset($settings['deal_notification']) && $settings['deal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'deal_notification'])); ?>

                                                <label class="form-check-label" for="deal_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('Lead to Deal Conversion')); ?></span>
                                                <?php echo e(Form::checkbox('leadtodeal_notification', '1', isset($settings['leadtodeal_notification']) && $settings['leadtodeal_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'leadtodeal_notification'])); ?>

                                                <label class="form-check-label" for="leadtodeal_notification"></label>

                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Contract')); ?></span>
                                                <?php echo e(Form::checkbox('contract_notification', '1', isset($settings['contract_notification']) && $settings['contract_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'contract_notification'])); ?>

                                                <label class="form-check-label" for="contract_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Project')); ?></span>
                                                <?php echo e(Form::checkbox('project_notification', '1', isset($settings['project_notification']) && $settings['project_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'project_notification'])); ?>

                                                <label class="form-check-label" for="project_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Task')); ?></span>
                                                <?php echo e(Form::checkbox('task_notification', '1', isset($settings['task_notification']) && $settings['task_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'task_notification'])); ?>

                                                <label class="form-check-label" for="task_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('Task Stage Updated')); ?></span>
                                                <?php echo e(Form::checkbox('taskmove_notification', '1', isset($settings['taskmove_notification']) && $settings['taskmove_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'taskmove_notification'])); ?>

                                                <label class="form-check-label" for="taskmove_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Task Comment')); ?></span>
                                                <?php echo e(Form::checkbox('taskcomment_notification', '1', isset($settings['taskcomment_notification']) && $settings['taskcomment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'taskcomment_notification'])); ?>

                                                <label class="form-check-label" for="taskcomment_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Monthly Payslip')); ?></span>
                                                <?php echo e(Form::checkbox('payslip_notification', '1', isset($settings['payslip_notification']) && $settings['payslip_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'payslip_notification'])); ?>

                                                <label class="form-check-label" for="payslip_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Award')); ?></span>
                                                <?php echo e(Form::checkbox('award_notification', '1', isset($settings['award_notification']) && $settings['award_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'award_notification'])); ?>

                                                <label class="form-check-label" for="award_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Announcement')); ?></span>
                                                <?php echo e(Form::checkbox('announcement_notification', '1', isset($settings['announcement_notification']) && $settings['announcement_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'announcement_notification'])); ?>

                                                <label class="form-check-label" for="announcement_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Holiday')); ?></span>
                                                <?php echo e(Form::checkbox('holiday_notification', '1', isset($settings['holiday_notification']) && $settings['holiday_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'holiday_notification'])); ?>

                                                <label class="form-check-label" for="holiday_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Support Ticket')); ?></span>
                                                <?php echo e(Form::checkbox('support_notification', '1', isset($settings['support_notification']) && $settings['support_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'support_notification'])); ?>

                                                <label class="form-check-label" for="support_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Event')); ?></span>
                                                <?php echo e(Form::checkbox('event_notification', '1', isset($settings['event_notification']) && $settings['event_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'event_notification'])); ?>

                                                <label class="form-check-label" for="event_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Meeting')); ?></span>
                                                <?php echo e(Form::checkbox('meeting_notification', '1', isset($settings['meeting_notification']) && $settings['meeting_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'meeting_notification'])); ?>

                                                <label class="form-check-label" for="meeting_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Company Policy')); ?></span>
                                                <?php echo e(Form::checkbox('policy_notification', '1', isset($settings['policy_notification']) && $settings['policy_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'policy_notification'])); ?>

                                                <label class="form-check-label" for="policy_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Invoice')); ?></span>
                                                <?php echo e(Form::checkbox('invoice_notification', '1', isset($settings['invoice_notification']) && $settings['invoice_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'invoice_notification'])); ?>

                                                <label class="form-check-label" for="invoice_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Revenue')); ?></span>
                                                <?php echo e(Form::checkbox('revenue_notification', '1', isset($settings['revenue_notification']) && $settings['revenue_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'revenue_notification'])); ?>

                                                <label class="form-check-label" for="revenue_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Bill')); ?></span>
                                                <?php echo e(Form::checkbox('bill_notification', '1', isset($settings['bill_notification']) && $settings['bill_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'bill_notification'])); ?>

                                                <label class="form-check-label" for="bill_notification"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Invoice Payment')); ?></span>
                                                <?php echo e(Form::checkbox('payment_notification', '1', isset($settings['payment_notification']) && $settings['payment_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'payment_notification'])); ?>

                                                <label class="form-check-label" for="payment_notification"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class=" form-switch form-switch-right">
                                                <span><?php echo e(__('New Budget')); ?></span>
                                                <?php echo e(Form::checkbox('budget_notification', '1', isset($settings['budget_notification']) && $settings['budget_notification'] == '1' ? 'checked' : '', ['class' => 'form-check-input', 'id' => 'budget_notification'])); ?>

                                                <label class="form-check-label" for="budget_notification"></label>
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

                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/slack.blade.php ENDPATH**/ ?>