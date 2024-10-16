<?php echo e(Form::model($stock, array('route' => array('stocks.update', $stock->id), 'method' => 'PUT'))); ?>

<div class="modal-body">
  <div class="row">
    <div class="form-group col-md-6">
      <?php echo e(Form::label('stock_name', __('Name'),['class'=>'form-label'])); ?>

      <?php echo e(Form::text('stock_name', $stock->stock_name, array('class' => 'form-control','required'=>'required'))); ?>

    </div>
    <div class="form-group col-md-6">
      <label for="stock_type" class="form-label"><?php echo e(__('Type')); ?></label>
      <select type="text" name="stock_type" class="form-control selectric" id="stock_type">
        <option value="material" <?php if(@$stock->stock_type == 'material'): ?> selected="selected" <?php endif; ?>>Material</option>
        <option value="finisheditems" <?php if(@$stock->stock_type == 'finisheditems'): ?> selected="selected" <?php endif; ?>>Final product</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <?php echo e(Form::label('stock_unit', __('Unit'),['class'=>'form-label'])); ?>

      <?php echo e(Form::text('stock_unit', $stock->stock_unit, array('class' => 'form-control','required'=>'required'))); ?>

    </div>
    <div class="form-group col-md-6">
      <?php echo e(Form::label('stock_qty', __('Quantity'),['class'=>'form-label'])); ?>

      <?php echo e(Form::number('stock_qty', $stock->stock_qty, array('class' => 'form-control'))); ?>

    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <?php echo e(Form::label('stock_price', __('Price'),['class'=>'form-label'])); ?>

      <?php echo e(Form::number('stock_price', $stock->stock_price, array('class' => 'form-control','required'=>'required'))); ?>

    </div>
  </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn  btn-primary">
</div>
<?php echo e(Form::close()); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/stocks/edit.blade.php ENDPATH**/ ?>