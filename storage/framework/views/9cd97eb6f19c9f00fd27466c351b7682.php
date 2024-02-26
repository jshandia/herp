<div class="card sticky-top" style="top:30px">
    <div class="list-group list-group-flush" id="useradd-sidenav">
        <a href="<?php echo e(route('product-unit.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'product-unit.index' ) ? ' active' : ''); ?>"><?php echo e(__('Unit')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
        <a href="<?php echo e(route('product-category.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'product-category.index' ) ? 'active' : ''); ?>"><?php echo e(__('Category')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/layouts/logistic_setup.blade.php ENDPATH**/ ?>