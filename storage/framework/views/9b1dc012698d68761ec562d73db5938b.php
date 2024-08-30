<?php
    $settings = Utility::settings();
?>
<div class="pt-0 pb-3 modal-body pos-module" id="printarea" >
    <table class="table pos-module-tbl">
        <tbody>
            <div class="text-center ">
                <h3><?php echo e($settings['company_name']); ?></h3>
            </div>
            <br>

            <div class="text-left">
                <b><?php echo e($details['pos_id']); ?></b>
            </div>
            <div class="text-left">
                <?php if($settings['company_name']!=null): ?>
                <?php echo e($settings['company_name']); ?><br>
                <?php endif; ?>
                <?php if($settings['mail_from_address']!=null): ?>
                <?php echo e($settings['mail_from_address']); ?><br>
                <?php endif; ?>
                <?php if($settings['company_address']!=null): ?>
                <?php echo e($settings['company_address']); ?><br>
                <?php endif; ?>
                <?php if($settings['company_city']!=null): ?>
                <?php echo e($settings['company_city']); ?>,
                <?php endif; ?>
                <?php if($settings['company_state']!=null): ?>
                <?php echo e($settings['company_state']); ?>,
                <?php endif; ?>
                <?php if($settings['company_zipcode']!=null): ?>
                <?php echo e($settings['company_zipcode']); ?><br>
                <?php endif; ?>
                <?php if($settings['company_country']!=null): ?>
                <?php echo e($settings['company_country']); ?><br>
                <?php endif; ?>
                <?php if($settings['company_telephone']!=null): ?>
                <?php echo e($settings['company_telephone']); ?><br>
                <?php endif; ?>
            </div>
            <div class="invoice-to mt-2 product-border larger-text-print" >
                <?php echo isset($details['customer']['name']) ? '' : $details['customer']['details']; ?>

            </div>
            <div class="larger-text-print">
                <?php echo isset($details['customer']['name']) ? 'Name:  ' . $details['customer']['name'] : ''; ?>

            </div>
            <div class="larger-text-print">
                <?php echo isset($details['customer']['address']) ? 'Address:  ' . $details['customer']['address'] : ''; ?>

            </div>
            <div class="larger-text-print">
                <?php echo isset($details['customer']['email']) ? 'Email:  ' . $details['customer']['email'] : ''; ?>

            </div>
            <div class="larger-text-print">
                <?php echo isset($details['customer']['phone_number']) ? 'Phone:  ' . $details['customer']['phone_number'] : ''; ?>

            </div>
            <div class="larger-text-print">
                <?php echo isset($details['date']) ? 'Date of POS:  ' . $details['date'] : ''; ?>

            </div>
            <div class="product-border larger-text-print">
                <?php echo isset($details['warehouse']['details']) ? 'Warehouse Name:  ' . $details['warehouse']['details'] : ''; ?>

            </div>
        </tbody>
    </table>
    <div class=" text-black text-left fs-5 mt-0 mb-0"><?php echo e(__('Items')); ?></div>
        <?php $__currentLoopData = $sales['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mt-2">
                <div class="p-0"> <b><?php echo e($value['name']); ?></b></div>
                <div class="d-flex product-border">
                    <div class="larger-text-print"><?php echo e(__('Quantity:')); ?></div>
                    <div class="text-end ms-auto larger-text-print"><?php echo e($value['quantity']); ?></div>
                </div>
            </div>
            <div class="d-flex product-border">
                <div class="larger-text-print"><?php echo e(__('Price:')); ?></div>
                <div class="text-end ms-auto larger-text-print"><?php echo e($value['price']); ?></div>
            </div>
            <div class="d-flex product-border">
                <div class="larger-text-print"><?php echo e(__('Tax:')); ?></div>
                <div class="text-end ms-auto larger-text-print"> <?php echo e($value['tax']); ?></div>
            </div>
            <div class="d-flex product-border mb-2">
                <div class="larger-text-print"><?php echo e(__('Tax Amount:')); ?></div>
                <div class="text-end ms-auto larger-text-print"><?php echo e($value['tax_amount']); ?></div>
            </div>
            <div class="d-flex product-border mb-2">
                <div class="larger-text-print"><?php echo e(__('Sub Total:')); ?></div>
                <div class="text-end ms-auto larger-text-print"> <?php echo e($value['subtotal']); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex product-border mb-2 mt-4">
            <div><b><?php echo e(__('Discount:')); ?></b></div>
            <div class="text-end ms-auto larger-text-print"> <?php echo e($sales['discount']); ?></div>
        </div>
        <div class="d-flex product-border mb-2">
            <div><b><?php echo e(__('Total:')); ?></b></div>
            <div class="text-end ms-auto larger-text-print"> <?php echo e($sales['total']); ?></div>
        </div>

        <h5 class="text-center mt-3 font-label"><?php echo e(__('Thank You For Shopping With Us. Please visit again.')); ?></h5>
</div>

    <div class="justify-content-center pt-2 modal-footer">
        <a href="#" id="print"
            class="btn btn-primary btn-sm text-right float-right mb-3 ">
            <?php echo e(__('Print')); ?>

        </a>
    </div>
<script>
    $("#print").click(function () {
        var print_div = document.getElementById("printarea");
        $('.row').addClass('d-none');
        $('.toast').addClass('d-none');
        $('#print').addClass('d-none');
        window.print();
        $('.row').removeClass('d-none');
        $('#print').removeClass('d-none');
        $('.toast').removeClass('d-none');
    });
</script>




<?php /**PATH C:\xampp\htdocs\herp\resources\views/pos/printview.blade.php ENDPATH**/ ?>