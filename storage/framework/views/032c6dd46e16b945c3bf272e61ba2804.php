<div class="card sticky-top" style="top:30px">
    <div class="list-group list-group-flush" id="useradd-sidenav">
        <a href="<?php echo e(route('taxes.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'taxes.index' ) ? ' active' : ''); ?>"><?php echo e(__('Taxes')); ?> <div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('custom-field.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'custom-field.index' ) ? 'active' : ''); ?>   "><?php echo e(__('Custom Field')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/layouts/account_setup.blade.php ENDPATH**/ ?>