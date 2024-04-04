<div id="webhook-settings" class="card">
                        <div class="col-md-12">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mb-2"><?php echo e(__('Webhook')); ?></h5>
                                    </div>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create webhook')): ?>
                                        <div class="col-6 text-end">
                                            <a href="#" data-size="lg" data-url="<?php echo e(route('webhook.create')); ?>"
                                                data-ajax-popup="true" data-bs-toggle="tooltip"
                                                title="<?php echo e(__('Create')); ?>" data-title="<?php echo e(__('Create New Webhook')); ?>"
                                                class="btn btn-sm btn-primary">
                                                <i class="ti ti-plus"></i>
                                            </a>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><?php echo e(__('Module')); ?></th>
                                                <th><?php echo e(__('Url')); ?></th>
                                                <th><?php echo e(__('Method')); ?></th>
                                                <th><?php echo e(__('Action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody class="font-style">
                                            <?php $__empty_1 = true; $__currentLoopData = $webhookSetting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webhooksetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e(ucwords($webhooksetting->module)); ?></td>
                                                    <td><?php echo e($webhooksetting->url); ?></td>
                                                    <td><?php echo e(ucwords($webhooksetting->method)); ?></td>
                                                    <td class="Action">
                                                        <span>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit webhook')): ?>
                                                                <div class="action-btn bg-primary ms-2">
                                                                    <a href="#"
                                                                        class="mx-3 btn btn-sm d-inline-flex align-items-center"
                                                                        data-url="<?php echo e(URL::to('webhook-settings/' . $webhooksetting->id . '/edit')); ?>"
                                                                        data-ajax-popup="true" data-bs-toggle="tooltip"
                                                                        title="<?php echo e(__('Edit')); ?>"
                                                                        data-title="<?php echo e(__('Webhook Edit')); ?>">
                                                                        <i class="ti ti-pencil text-white"></i>
                                                                    </a>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete webhook')): ?>
                                                                <div class="action-btn bg-danger ms-2">
                                                                    <?php echo Form::open([
                                                                        'method' => 'DELETE',
                                                                        'route' => ['webhook.destroy', $webhooksetting->id],
                                                                        'id' => 'delete-form-' . $webhooksetting->id,
                                                                    ]); ?>

                                                                    <a href="#"
                                                                        class="mx-3 btn btn-sm  align-items-center bs-pass-para"
                                                                        data-bs-toggle="tooltip"
                                                                        title="<?php echo e(__('Delete')); ?>">
                                                                        <i class="ti ti-trash text-white text-white"></i>
                                                                    </a>
                                                                    <?php echo Form::close(); ?>

                                                                </div>
                                                            <?php endif; ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr class="text-center">
                                                    <td colspan="4"><?php echo e(__('No Data Found.!')); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/company/pages/webhook.blade.php ENDPATH**/ ?>