<div class="card sticky-top" style="top:30px">
    <div class="list-group list-group-flush" id="useradd-sidenav">
        <a href="<?php echo e(route('branch.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('branch*') ? 'active' : '')); ?>"><?php echo e(__('Branch')); ?> <div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('department.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('department*') ? 'active' : '')); ?>"><?php echo e(__('Department')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('designation.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('designation*') ? 'active' : '')); ?>"><?php echo e(__('Designation')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('leavetype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'leavetype.index' ? 'active' : '')); ?>"><?php echo e(__('Leave Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('document.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((Request::route()->getName() == 'document.index' ? 'active' : '')); ?>"><?php echo e(__('Document Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('paysliptype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('paysliptype*') ? 'active' : '')); ?>"><?php echo e(__('Payslip Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('allowanceoption.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('allowanceoption*') ? 'active' : '')); ?>"><?php echo e(__('Allowance Option')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('loanoption.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('loanoption*') ? 'active' : '')); ?>"><?php echo e(__('Loan Option')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('deductionoption.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('deductionoption*') ? 'active' : '')); ?>"><?php echo e(__('Deduction Option')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('goaltype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('goaltype*') ? 'active' : '')); ?>"><?php echo e(__('Goal Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('trainingtype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('trainingtype*') ? 'active' : '')); ?>"><?php echo e(__('Training Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('awardtype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('awardtype*') ? 'active' : '')); ?>"><?php echo e(__('Award Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('terminationtype.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('terminationtype*') ? 'active' : '')); ?>"><?php echo e(__('Termination Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('job-category.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('job-category*') ? 'active' : '')); ?>"><?php echo e(__('Job Category')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <a href="<?php echo e(route('job-stage.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e((request()->is('job-stage*') ? 'active' : '')); ?>"><?php echo e(__('Job Stage')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage performance type')): ?>
        <a href="<?php echo e(route('performanceType.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e(request()->is('performanceType*') ? 'active' : ''); ?>"><?php echo e(__('Performance Type')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>
        <?php endif; ?>

        <a href="<?php echo e(route('competencies.index')); ?>" class="list-group-item list-group-item-action border-0 <?php echo e(request()->is('competencies*') ? 'active' : ''); ?>"><?php echo e(__('Competencies')); ?><div class="float-end"><i class="ti ti-chevron-right"></i></div></a>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\herp\resources\views/layouts/hrm_setup.blade.php ENDPATH**/ ?>