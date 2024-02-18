<?php if(!empty($userPlan) &&  $userPlan->project == 1): ?>
            <?php if(Gate::check('manage project')): ?>
                <li
                    class="dash-item dash-hasmenu
                                            <?php echo e(Request::segment(1) == 'project' ||
                                            Request::segment(1) == 'bugs-report' ||
                                            Request::segment(1) == 'bugstatus' ||
                                            Request::segment(1) == 'project-task-stages' ||
                                            Request::segment(1) == 'calendar' ||
                                            Request::segment(1) == 'timesheet-list' ||
                                            Request::segment(1) == 'taskboard' ||
                                            Request::segment(1) == 'timesheet-list' ||
                                            Request::segment(1) == 'taskboard' ||
                                            Request::segment(1) == 'project' ||
                                            Request::segment(1) == 'projects' ||
                                            Request::segment(1) == 'project_report'
                                                ? 'active dash-trigger'
                                                : ''); ?>">
                    <a href="#!" class="dash-link"><span class="dash-micon"><i
                                class="ti ti-share"></i></span><span
                            class="dash-mtext"><?php echo e(__('Project')); ?></span><span class="dash-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="dash-submenu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show project dashboard')): ?>
                        <li class="dash-item <?php echo e(Request::route()->getName() == 'project.dashboard' ? ' active' : ''); ?>">
                            <a class="dash-link" href="<?php echo e(route('project.dashboard')); ?>"><?php echo e(__('Overview ')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project')): ?>
                            <li
                                class="dash-item  <?php echo e(Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('projects.index')); ?>"><?php echo e(__('Projects')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project task')): ?>
                            <li class="dash-item <?php echo e(request()->is('taskboard*') ? 'active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('taskBoard.view', 'list')); ?>"><?php echo e(__('Tasks')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage timesheet')): ?>
                            <li class="dash-item <?php echo e(request()->is('timesheet-list*') ? 'active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('timesheet.list')); ?>"><?php echo e(__('Timesheet')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage bug report')): ?>
                            <li class="dash-item <?php echo e(request()->is('bugs-report*') ? 'active' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('bugs.view', 'list')); ?>"><?php echo e(__('Bug')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project task')): ?>
                            <li class="dash-item <?php echo e(request()->is('calendar*') ? 'active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('task.calendar', ['all'])); ?>"><?php echo e(__('Task Calendar')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(\Auth::user()->type != 'super admin'): ?>
                            <li class="dash-item  <?php echo e(Request::segment(1) == 'time-tracker' ? 'active open' : ''); ?>">
                                <a class="dash-link" href="<?php echo e(route('time.tracker')); ?>"><?php echo e(__('Tracker')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(\Auth::user()->type == 'company' || \Auth::user()->type == 'Employee'): ?>
                            <li
                                class="dash-item  <?php echo e(Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : ''); ?>">
                                <a class="dash-link"
                                    href="<?php echo e(route('project_report.index')); ?>"><?php echo e(__('Project Report')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Gate::check('manage project task stage') || Gate::check('manage bug status')): ?>
                            <li
                                class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' ? 'active dash-trigger' : ''); ?>">
                                <a class="dash-link" href="#"><?php echo e(__('Project System Setup')); ?><span
                                        class="dash-arrow"><i data-feather="chevron-right"></i></span></a>
                                <ul class="dash-submenu">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project task stage')): ?>
                                        <li
                                            class="dash-item  <?php echo e(Request::route()->getName() == 'project-task-stages.index' ? 'active' : ''); ?>">
                                            <a class="dash-link"
                                                href="<?php echo e(route('project-task-stages.index')); ?>"><?php echo e(__('Project Task Stages')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage bug status')): ?>
                                        <li
                                            class="dash-item <?php echo e(Request::route()->getName() == 'bugstatus.index' ? 'active' : ''); ?>">
                                            <a class="dash-link"
                                                href="<?php echo e(route('bugstatus.index')); ?>"><?php echo e(__('Bug Status')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/projects.blade.php ENDPATH**/ ?>