{{ Form::model($stock, array('route' => array('stocks.update', $stock->id), 'method' => 'PUT')) }}
<div class="modal-body">
  <div class="row">
    <div class="form-group col-md-6">
      {{ Form::label('stock_name', __('Name'),['class'=>'form-label']) }}
      {{ Form::text('stock_name', $stock->stock_name, array('class' => 'form-control','required'=>'required')) }}
    </div>
    <div class="form-group col-md-6">
      <label for="stock_type" class="form-label">{{ __('Type') }}</label>
      <select type="text" name="stock_type" class="form-control selectric" id="stock_type">
        <option value="material" @if (@$stock->stock_type == 'material') selected="selected" @endif>Material</option>
        <option value="finisheditems" @if (@$stock->stock_type == 'finisheditems') selected="selected" @endif>Final product</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      {{ Form::label('stock_unit', __('Unit'),['class'=>'form-label']) }}
      {{ Form::text('stock_unit', $stock->stock_unit, array('class' => 'form-control','required'=>'required')) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('stock_qty', __('Quantity'),['class'=>'form-label']) }}
      {{ Form::number('stock_qty', $stock->stock_qty, array('class' => 'form-control')) }}
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      {{ Form::label('stock_price', __('Price'),['class'=>'form-label']) }}
      {{ Form::number('stock_price', $stock->stock_price, array('class' => 'form-control','required'=>'required')) }}
    </div>
  </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{__('Cancel')}}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{__('Update')}}" class="btn  btn-primary">
</div>
{{Form::close()}}