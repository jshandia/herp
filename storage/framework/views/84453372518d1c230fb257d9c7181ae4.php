<?php if(!empty($userPlan) && $userPlan->hrm == 1): ?>
                    <?php if(Gate::check('manage employee') || Gate::check('manage setsalary')): ?>
                        <li
                            class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'holiday-calender' ||
                            Request::segment(1) == 'leavetype' ||
                            Request::segment(1) == 'leave' ||
                            Request::segment(1) == 'attendanceemployee' ||
                            Request::segment(1) == 'document-upload' ||
                            Request::segment(1) == 'document' ||
                            Request::segment(1) == 'performanceType' ||
                            Request::segment(1) == 'branch' ||
                            Request::segment(1) == 'department' ||
                            Request::segment(1) == 'designation' ||
                            Request::segment(1) == 'employee' ||
                            Request::segment(1) == 'leave_requests' ||
                            Request::segment(1) == 'holidays' ||
                            Request::segment(1) == 'policies' ||
                            Request::segment(1) == 'leave_calender' ||
                            Request::segment(1) == 'award' ||
                            Request::segment(1) == 'transfer' ||
                            Request::segment(1) == 'resignation' ||
                            Request::segment(1) == 'training' ||
                            Request::segment(1) == 'travel' ||
                            Request::segment(1) == 'promotion' ||
                            Request::segment(1) == 'complaint' ||
                            Request::segment(1) == 'warning' ||
                            Request::segment(1) == 'termination' ||
                            Request::segment(1) == 'announcement' ||
                            Request::segment(1) == 'job' ||
                            Request::segment(1) == 'job-application' ||
                            Request::segment(1) == 'candidates-job-applications' ||
                            Request::segment(1) == 'job-onboard' ||
                            Request::segment(1) == 'custom-question' ||
                            Request::segment(1) == 'interview-schedule' ||
                            Request::segment(1) == 'career' ||
                            Request::segment(1) == 'holiday' ||
                            Request::segment(1) == 'setsalary' ||
                            Request::segment(1) == 'payslip' ||
                            Request::segment(1) == 'paysliptype' ||
                            Request::segment(1) == 'company-policy' ||
                            Request::segment(1) == 'job-stage' ||
                            Request::segment(1) == 'job-category' ||
                            Request::segment(1) == 'terminationtype' ||
                            Request::segment(1) == 'awardtype' ||
                            Request::segment(1) == 'trainingtype' ||
                            Request::segment(1) == 'goaltype' ||
                            Request::segment(1) == 'paysliptype' ||
                            Request::segment(1) == 'allowanceoption' ||
                            Request::segment(1) == 'competencies' ||
                            Request::segment(1) == 'loanoption' ||
                            Request::segment(1) == 'deductionoption'
                                ? 'active dash-trigger'
                                : ''); ?>">
                            <a href="#!" class="dash-link ">
                                <span class="dash-micon">
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="dash-mtext">
                                    <?php echo e(__('HRM')); ?>

                                </span>
                                <span class="dash-arrow">
                                    <i data-feather="chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dash-submenu">
                                <li class="dash-item <?php echo e(\Request::route()->getName() == 'hrm.dashboard' ? ' active' : ''); ?>">
                                    <a class="dash-link" href="<?php echo e(route('hrm.dashboard')); ?>"><?php echo e(__(' Overview')); ?></a>
                                </li>
                                <li
                                    class="dash-item  <?php echo e(Request::segment(1) == 'employee' ? 'active dash-trigger' : ''); ?>   ">
                                    <?php if(\Auth::user()->type == 'Employee'): ?>
                                        <?php
                                            $employee = App\Models\Employee::where('user_id', \Auth::user()->id)->first();
                                        ?>
                                        <a class="dash-link"
                                            href="<?php echo e(route('employee.show', \Illuminate\Support\Facades\Crypt::encrypt($employee->id))); ?>"><?php echo e(__('Employee')); ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('employee.index')); ?>" class="dash-link">
                                            <?php echo e(__('Employee Setup')); ?>

                                        </a>
                                    <?php endif; ?>
                                </li>

                                <?php if(Gate::check('manage set salary') || Gate::check('manage pay slip')): ?>
                                    <li
                                        class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'setsalary' || Request::segment(1) == 'payslip' ? 'active dash-trigger' : ''); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('Payroll Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage set salary')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('setsalary*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('setsalary.index')); ?>"><?php echo e(__('Set salary')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage pay slip')): ?>
                                                <li class="dash-item <?php echo e(request()->is('payslip*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('payslip.index')); ?>"><?php echo e(__('Payslip')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if(Gate::check('manage leave') || Gate::check('manage attendance')): ?>
                                    <li
                                        class="dash-item dash-hasmenu  <?php echo e(Request::segment(1) == 'leave' || Request::segment(1) == 'attendanceemployee' ? 'active dash-trigger' : ''); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('Leave Management Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage leave')): ?>
                                                <li
                                                    class="dash-item <?php echo e(Request::route()->getName() == 'leave.index' ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('leave.index')); ?>"><?php echo e(__('Manage Leave')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage attendance')): ?>
                                                <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'attendanceemployee' ? 'active dash-trigger' : ''); ?>"
                                                    href="#navbar-attendance" data-toggle="collapse" role="button"
                                                    aria-expanded="<?php echo e(Request::segment(1) == 'attendanceemployee' ? 'true' : 'false'); ?>">
                                                    <a class="dash-link" href="#"><?php echo e(__('Attendance')); ?><span
                                                            class="dash-arrow"><i
                                                                data-feather="chevron-right"></i></span></a>
                                                    <ul class="dash-submenu">
                                                        <li
                                                            class="dash-item <?php echo e(Request::route()->getName() == 'attendanceemployee.index' ? 'active' : ''); ?>">
                                                            <a class="dash-link"
                                                                href="<?php echo e(route('attendanceemployee.index')); ?>"><?php echo e(__('Mark Attendance')); ?></a>
                                                        </li>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create attendance')): ?>
                                                            <li
                                                                class="dash-item <?php echo e(Request::route()->getName() == 'attendanceemployee.bulkattendance' ? 'active' : ''); ?>">
                                                                <a class="dash-link"
                                                                    href="<?php echo e(route('attendanceemployee.bulkattendance')); ?>"><?php echo e(__('Bulk Attendance')); ?></a>
                                                            </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if(Gate::check('manage indicator') || Gate::check('manage appraisal') || Gate::check('manage goal tracking')): ?>
                                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'indicator' || Request::segment(1) == 'appraisal' || Request::segment(1) == 'goaltracking' ? 'active dash-trigger' : ''); ?>"
                                        href="#navbar-performance" data-toggle="collapse" role="button"
                                        aria-expanded="<?php echo e(Request::segment(1) == 'indicator' || Request::segment(1) == 'appraisal' || Request::segment(1) == 'goaltracking' ? 'true' : 'false'); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('Performance Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul
                                            class="dash-submenu <?php echo e(Request::segment(1) == 'indicator' || Request::segment(1) == 'appraisal' || Request::segment(1) == 'goaltracking' ? 'show' : 'collapse'); ?>">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage indicator')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('indicator*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('indicator.index')); ?>"><?php echo e(__('Indicator')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage appraisal')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('appraisal*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('appraisal.index')); ?>"><?php echo e(__('Appraisal')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage goal tracking')): ?>
                                                <li
                                                    class="dash-item  <?php echo e(request()->is('goaltracking*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('goaltracking.index')); ?>"><?php echo e(__('Goal Tracking')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if(Gate::check('manage training') || Gate::check('manage trainer') || Gate::check('show training')): ?>
                                    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'trainer' || Request::segment(1) == 'training' ? 'active dash-trigger' : ''); ?>"
                                        href="#navbar-training" data-toggle="collapse" role="button"
                                        aria-expanded="<?php echo e(Request::segment(1) == 'trainer' || Request::segment(1) == 'training' ? 'true' : 'false'); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('Training Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage training')): ?>
                                                <li class="dash-item <?php echo e(request()->is('training*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('training.index')); ?>"><?php echo e(__('Training List')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage trainer')): ?>
                                                <li class="dash-item <?php echo e(request()->is('trainer*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('trainer.index')); ?>"><?php echo e(__('Trainer')); ?></a>
                                                </li>
                                            <?php endif; ?>

                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if(Gate::check('manage job') ||
                                        Gate::check('create job') ||
                                        Gate::check('manage job application') ||
                                        Gate::check('manage custom question') ||
                                        Gate::check('show interview schedule') ||
                                        Gate::check('show career')): ?>
                                    <li
                                        class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'job' || Request::segment(1) == 'job-application' || Request::segment(1) == 'candidates-job-applications' || Request::segment(1) == 'job-onboard' || Request::segment(1) == 'custom-question' || Request::segment(1) == 'interview-schedule' || Request::segment(1) == 'career' ? 'active dash-trigger' : ''); ?>    ">
                                        <a class="dash-link" href="#"><?php echo e(__('Recruitment Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage job')): ?>
                                                <li
                                                    class="dash-item <?php echo e(Request::route()->getName() == 'job.index' || Request::route()->getName() == 'job.create' || Request::route()->getName() == 'job.edit' || Request::route()->getName() == 'job.show' ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('job.index')); ?>"><?php echo e(__('Jobs')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create job')): ?>
                                                <li
                                                    class="dash-item <?php echo e(Request::route()->getName() == 'job.create' ? 'active' : ''); ?> ">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('job.create')); ?>"><?php echo e(__('Job Create')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage job application')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('job-application*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('job-application.index')); ?>"><?php echo e(__('Job Application')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage job application')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('candidates-job-applications') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('job.application.candidate')); ?>"><?php echo e(__('Job Candidate')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage job application')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('job-onboard*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('job.on.board')); ?>"><?php echo e(__('Job On-boarding')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage custom question')): ?>
                                                <li
                                                    class="dash-item  <?php echo e(request()->is('custom-question*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('custom-question.index')); ?>"><?php echo e(__('Custom Question')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show interview schedule')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('interview-schedule*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('interview-schedule.index')); ?>"><?php echo e(__('Interview Schedule')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show career')): ?>
                                                <li class="dash-item <?php echo e(request()->is('career*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('career', [\Auth::user()->creatorId(), $lang])); ?>"><?php echo e(__('Career')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if(Gate::check('manage award') ||
                                        Gate::check('manage transfer') ||
                                        Gate::check('manage resignation') ||
                                        Gate::check('manage travel') ||
                                        Gate::check('manage promotion') ||
                                        Gate::check('manage complaint') ||
                                        Gate::check('manage warning') ||
                                        Gate::check('manage termination') ||
                                        Gate::check('manage announcement') ||
                                        Gate::check('manage holiday')): ?>
                                    <li
                                        class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'holiday-calender' || Request::segment(1) == 'holiday' || Request::segment(1) == 'policies' || Request::segment(1) == 'award' || Request::segment(1) == 'transfer' || Request::segment(1) == 'resignation' || Request::segment(1) == 'travel' || Request::segment(1) == 'promotion' || Request::segment(1) == 'complaint' || Request::segment(1) == 'warning' || Request::segment(1) == 'termination' || Request::segment(1) == 'announcement' || Request::segment(1) == 'competencies' ? 'active dash-trigger' : ''); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('HR Admin Setup')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage award')): ?>
                                                <li class="dash-item <?php echo e(request()->is('award*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('award.index')); ?>"><?php echo e(__('Award')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage transfer')): ?>
                                                <li
                                                    class="dash-item  <?php echo e(request()->is('transfer*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('transfer.index')); ?>"><?php echo e(__('Transfer')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage resignation')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('resignation*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('resignation.index')); ?>"><?php echo e(__('Resignation')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage travel')): ?>
                                                <li class="dash-item <?php echo e(request()->is('travel*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('travel.index')); ?>"><?php echo e(__('Trip')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage promotion')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('promotion*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('promotion.index')); ?>"><?php echo e(__('Promotion')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage complaint')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('complaint*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('complaint.index')); ?>"><?php echo e(__('Complaints')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage warning')): ?>
                                                <li class="dash-item <?php echo e(request()->is('warning*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('warning.index')); ?>"><?php echo e(__('Warning')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage termination')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('termination*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('termination.index')); ?>"><?php echo e(__('Termination')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage announcement')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('announcement*') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('announcement.index')); ?>"><?php echo e(__('Announcement')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage holiday')): ?>
                                                <li
                                                    class="dash-item <?php echo e(request()->is('holiday*') || request()->is('holiday-calender') ? 'active' : ''); ?>">
                                                    <a class="dash-link"
                                                        href="<?php echo e(route('holiday.index')); ?>"><?php echo e(__('Holidays')); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage event')): ?>
                                    <li class="dash-item <?php echo e(request()->is('event*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('event.index')); ?>"><?php echo e(__('Event Setup')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage meeting')): ?>
                                    <li class="dash-item <?php echo e(request()->is('meeting*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('meeting.index')); ?>"><?php echo e(__('Meeting')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage assets')): ?>
                                    <li class="dash-item <?php echo e(request()->is('account-assets*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('account-assets.index')); ?>"><?php echo e(__('Employees Asset Setup ')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage document')): ?>
                                    <li class="dash-item <?php echo e(request()->is('document-upload*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('document-upload.index')); ?>"><?php echo e(__('Document Setup')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage company policy')): ?>
                                    <li class="dash-item <?php echo e(request()->is('company-policy*') ? 'active' : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('company-policy.index')); ?>"><?php echo e(__('Company policy')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage report')): ?>
                                    <li class="dash-item dash-hasmenu
                                                        <?php echo e(Request::segment(1) == 'reports-monthly-attendance' ||
                                                        Request::segment(1) == 'reports-leave' ||
                                                        Request::segment(1) == 'reports-payroll'
                                                            ? 'active dash-trigger'
                                                            : ''); ?>"
                                        href="#hr-report" data-toggle="collapse" role="button"
                                        aria-expanded="<?php echo e(Request::segment(1) == 'reports-monthly-attendance' || Request::segment(1) == 'reports-leave' || Request::segment(1) == 'reports-payroll' ? 'true' : 'false'); ?>">
                                        <a class="dash-link" href="#"><?php echo e(__('Reports')); ?><span
                                                class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                        <ul class="dash-submenu">
                                            <li
                                                class="dash-item <?php echo e(request()->is('reports-payroll') ? 'active' : ''); ?>">
                                                <a class="dash-link"
                                                    href="<?php echo e(route('report.payroll')); ?>"><?php echo e(__('Payroll')); ?></a>
                                            </li>
                                            <li
                                                class="dash-item <?php echo e(request()->is('reports-leave') ? 'active' : ''); ?>">
                                                <a class="dash-link"
                                                    href="<?php echo e(route('report.leave')); ?>"><?php echo e(__('Leave')); ?></a>
                                            </li>
                                            <li
                                                class="dash-item <?php echo e(request()->is('reports-monthly-attendance') ? 'active' : ''); ?>">
                                                <a class="dash-link"
                                                    href="<?php echo e(route('report.monthly.attendance')); ?>"><?php echo e(__('Monthly Attendance')); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <?php if(\Auth::user()->type == 'company' || \Auth::user()->type == 'HR'): ?>
                                    <li
                                        class="dash-item <?php echo e(Request::segment(1) == 'leavetype' ||
                                        Request::segment(1) == 'document' ||
                                        Request::segment(1) == 'performanceType' ||
                                        Request::segment(1) == 'branch' ||
                                        Request::segment(1) == 'department' ||
                                        Request::segment(1) == 'designation' ||
                                        Request::segment(1) == 'job-stage' ||
                                        Request::segment(1) == 'performanceType' ||
                                        Request::segment(1) == 'job-category' ||
                                        Request::segment(1) == 'terminationtype' ||
                                        Request::segment(1) == 'awardtype' ||
                                        Request::segment(1) == 'trainingtype' ||
                                        Request::segment(1) == 'goaltype' ||
                                        Request::segment(1) == 'paysliptype' ||
                                        Request::segment(1) == 'allowanceoption' ||
                                        Request::segment(1) == 'loanoption' ||
                                        Request::segment(1) == 'deductionoption'
                                            ? 'active dash-trigger'
                                            : ''); ?>">
                                        <a class="dash-link"
                                            href="<?php echo e(route('branch.index')); ?>"><?php echo e(__('HRM System Setup')); ?></a>
                                    </li>
                                <?php endif; ?>
                                
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/submenus/hrm.blade.php ENDPATH**/ ?>