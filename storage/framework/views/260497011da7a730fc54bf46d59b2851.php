<?php echo e(Form::open(array('route' => 'features_store', 'method'=>'post', 'enctype' => "multipart/form-data"))); ?>

    <div class="modal-body">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('Heading', __('Heading'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('other_features_heading',null, ['class' => 'form-control ', 'placeholder' => __('Enter Heading')])); ?>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('Description', __('Description'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::textarea('other_featured_description', null, ['class' => 'form-control summernote-simple', 'placeholder' => __('Enter Description')])); ?>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('Buy Now Link', __('Buy Now Link'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('other_feature_buy_now_link', null, ['class' => 'form-control', 'placeholder' => __('Enter Link')])); ?>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('Image', __('Image'), ['class' => 'form-label'])); ?>

                    <input type="file" name="other_features_image" class="form-control" required="required">
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
        <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn  btn-primary">
    </div>
<?php echo e(Form::close()); ?>








<?php /**PATH C:\xampp\htdocs\herp\Modules/LandingPage\Resources/views/landingpage/features/features_create.blade.php ENDPATH**/ ?>