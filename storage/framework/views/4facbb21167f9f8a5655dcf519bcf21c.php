
                    <div class="card" id="cache-settings">
                        <div class="card-header">
                            <h5><?php echo e('Cache'); ?></h5>
                            <small class="text-secondary font-weight-bold">
                                <?php echo e(__("This is a page meant for more advanced users, simply ignore it if you don't understand what cache is.")); ?>

                            </small>
                        </div>
                        <form method="POST" action="<?php echo e(route('cache.settings.store')); ?>" accept-charset="UTF-8">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <?php echo e(Form::label('Current cache size', __('Current cache size'), ['class' => 'col-form-label'])); ?>

                                        <div class="input-group mb-5">
                                            <input type="text" class="form-control" value="<?php echo e($file_size); ?>" readonly >
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon6"><?php echo e(__('MB')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="<?php echo e(__('Cache Clear')); ?>">
                            </div>
                        <?php echo e(Form::close()); ?>

                    </div><?php /**PATH C:\xampp\htdocs\herp\resources\views/settings/items/superadmin/pages/cache.blade.php ENDPATH**/ ?>