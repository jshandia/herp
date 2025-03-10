<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Balance Sheet')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Balance Sheet')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-page'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/html2pdf.bundle.min.js')); ?>"></script>
    <script>
        var filename = $('#filename').val();

        function saveAsPDF() {
            var element = document.getElementById('printableArea');
            var opt = {
                margin: 0.3,
                filename: filename,
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 4,
                    dpi: 72,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'in',
                    format: 'A2'
                }
            };
            html2pdf().set(opt).from(element).save();
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#filter").click(function() {
                $("#show_filter").toggle();
            });
        });
    </script>
        <script>
            $(document).ready(function () {
                callback();
                function callback() {
                    var start_date = $(".startDate").val();
                    var end_date = $(".endDate").val();
    
                    $('.start_date').val(start_date);
                    $('.end_date').val(end_date);
    
                }
                });
    
        </script>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('action-btn'); ?>

    <div class="float-end">
        <?php echo e(Form::open(['route' => ['balance.sheet.print']])); ?>

        <input type="hidden" name="start_date" class="start_date">
        <input type="hidden" name="end_date" class="end_date">
        <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="<?php echo e(__('Print')); ?>"
            data-original-title="<?php echo e(__('Print')); ?>"><i class="ti ti-printer"></i></button>
        <?php echo e(Form::close()); ?>

    </div>

    <div class="float-end me-2">
        <?php echo e(Form::open(['route' => ['balance.sheet.export']])); ?>

        <input type="hidden" name="start_date" class="start_date">
        <input type="hidden" name="end_date" class="end_date">
        <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="<?php echo e(__('Export')); ?>"
            data-original-title="<?php echo e(__('Export')); ?>"><i class="ti ti-file-export"></i></button>
        <?php echo e(Form::close()); ?>

    </div>

    <div class="float-end me-2" id="filter">
        <button id="filter" class="btn btn-sm btn-primary"><i class="ti ti-filter"></i></button>
    </div>

    <div class="float-end me-2">
        <a href="<?php echo e(route('report.balance.sheet' , 'horizontal')); ?>" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="<?php echo e(__('Horizontal View')); ?>"
            data-original-title="<?php echo e(__('Horizontal View')); ?>"><i class="ti ti-separator-vertical"></i></a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mt-2" id="multiCollapseExample1">
                    <div class="card" id="show_filter" style="display:none;">
                        <div class="card-body">
                            <?php echo e(Form::open(['route' => ['report.balance.sheet'], 'method' => 'GET', 'id' => 'report_bill_summary'])); ?>

                            <div class="row align-items-center justify-content-end">
                                <div class="col-xl-10">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                            <div class="btn-box">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                            <div class="btn-box">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                            <div class="btn-box">
                                                <?php echo e(Form::label('start_date', __('Start Date'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::date('start_date', $filter['startDateRange'], ['class' => 'startDate form-control'])); ?>

                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                            <div class="btn-box">
                                                <?php echo e(Form::label('end_date', __('End Date'), ['class' => 'form-label'])); ?>

                                                <?php echo e(Form::date('end_date', $filter['endDateRange'], ['class' => 'endDate form-control'])); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto mt-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-primary"
                                                onclick="document.getElementById('report_bill_summary').submit(); return false;"
                                                data-bs-toggle="tooltip" title="<?php echo e(__('Apply')); ?>"
                                                data-original-title="<?php echo e(__('apply')); ?>">
                                                <span class="btn-inner--icon"><i class="ti ti-search"></i></span>
                                            </a>

                                            <a href="<?php echo e(route('report.balance.sheet')); ?>" class="btn btn-sm btn-danger "
                                                data-bs-toggle="tooltip" title="<?php echo e(__('Reset')); ?>"
                                                data-original-title="<?php echo e(__('Reset')); ?>">
                                                <span class="btn-inner--icon"><i
                                                        class="ti ti-trash-off text-white-off "></i></span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>

        

        <?php
            $authUser = \Auth::user()->creatorId();
            $user = App\Models\User::find($authUser);
        ?>
        
        <div class="row justify-content-center" id="printableArea">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="account-main-title mb-5">
                            <h5><?php echo e('Balance Sheet of ' . $user->name . ' as of ' . $filter['startDateRange'] . ' to ' . $filter['endDateRange']); ?>

                                </h4>
                        </div>
                        <div
                            class="aacount-title d-flex align-items-center justify-content-between border-top border-bottom py-2">
                            <h6 class="mb-0"><?php echo e(__('Account')); ?></h6>
                            <h6 class="mb-0 text-center"><?php echo e(_('Account Code')); ?></h6>
                            <h6 class="mb-0 text-end"><?php echo e(__('Total')); ?></h6>
                        </div>
                        <?php
                            $totalAmount = 0;
                        ?>
                        <?php $__currentLoopData = $chartAccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $accounts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($accounts != []): ?>
                                <div class="account-main-inner py-2">
                                    <?php if($type == 'Liabilities'): ?>
                                        <p class="fw-bold mb-3"> <?php echo e(__('Liabilities & Equity')); ?></p>
                                    <?php endif; ?>
                                    <p class="fw-bold ps-2 mb-2"><?php echo e($type); ?></p>

                                    <?php
                                        $total = 0;
                                    ?>
                                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="border-bottom py-2">
                                            <p class="fw-bold ps-4 mb-2">
                                                <?php echo e($account['subType'] == true ? $account['subType'] : ''); ?></p>
                                            <?php $__currentLoopData = $account['account']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key < count($account['account']) - 1): ?>
                                                    <?php if(!preg_match('/\btotal\b/i', $record['account_name'])): ?>
                                                        <div
                                                            class="account-inner d-flex align-items-center justify-content-between ps-5">
                                                            <p class="mb-2"><a
                                                                    href="<?php echo e(route('report.ledger',  $record['account_id'])); ?>?account=<?php echo e($record['account_id']); ?>"
                                                                    class="text-primary"><?php echo e($record['account_name']); ?></a>
                                                            </p>
                                                            <p class="mb-2 text-center"><?php echo e($record['account_code']); ?></p>
                                                            <p class="text-primary mb-2 float-end text-end">
                                                                <?php echo e(\Auth::user()->priceFormat($record['netAmount'])); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="account-inner d-flex align-items-center justify-content-between ps-4">
                                                <p class="fw-bold mb-2">
                                                    <?php echo e(end($account['account']) == true ? end($account['account'])['account_name'] : 0); ?>

                                                </p>
                                                <p class="fw-bold mb-2 text-end">
                                                    <?php echo e(end($account['account']) == true ? \Auth::user()->priceFormat(end($account['account'])['netAmount']) : \Auth::user()->priceFormat(0)); ?>

                                                </p>
                                            </div>
                                        </div>

                                        <?php
                                            $total += end($account['account']) == true ? end($account['account'])['netAmount'] : 0;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div
                                        class="aacount-title d-flex align-items-center justify-content-between border-top border-bottom py-2 px-2 pe-0">
                                        <h6 class="fw-bold mb-0"><?php echo e('Total for ' . $type); ?></h6>
                                        <h6 class="fw-bold mb-0 text-end"><?php echo e(\Auth::user()->priceFormat($total)); ?></h6>
                                    </div>
                                    <?php
                                        if ($type != 'Assets') {
                                            $totalAmount += $total;
                                        }
                                    ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = $chartAccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $accounts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                if ($type == 'Assets') {
                                    continue;
                                }
                            ?>

                            <?php if($accounts != []): ?>
                                <div
                                    class="aacount-title d-flex align-items-center justify-content-between border-bottom py-2 px-0">
                                    <h6 class="fw-bold mb-0"><?php echo e('Total for Liabilities & Equity'); ?></h6>
                                    <h6 class="fw-bold mb-0 text-end"><?php echo e(\Auth::user()->priceFormat($totalAmount)); ?></h6>
                                </div>
                            <?php endif; ?>
                            <?php
                                if ($type == 'Liabilities' || $type == 'Equity') {
                                    break;
                                }
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/report/balance_sheet.blade.php ENDPATH**/ ?>