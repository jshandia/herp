<li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'crm-dashboard' || Request::segment(1) == 'leads' || Request::segment(1) == 'deals' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'contract' || Request::segment(1) == 'contract' || Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report' ? ' active dash-trigger' : ''); ?>">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext"><?php echo e(__('Client')); ?></span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
    <?php if(!empty($userPlan) &&  $userPlan->crm == 1): ?>
    <?php if(Gate::check('manage lead') || Gate::check('manage deal') || Gate::check('manage form builder') || Gate::check('manage contract')): ?>
    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'crm-dashboard' || Request::segment(1) == 'leads' || Request::segment(1) == 'deals' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'contract' || Request::segment(1) == 'contract' || Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' || Request::segment(1) == 'pipelines' ? ' active dash-trigger' : ''); ?>">
      <a class="dash-link" href="#"><?php echo e(__('CRM')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <li class="dash-item <?php echo e(\Request::route()->getName() == 'crm.dashboard' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('crm.dashboard')); ?>"><?php echo e(__(' Overview')); ?></a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage lead')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'leads.list' || Request::route()->getName() == 'leads.index' || Request::route()->getName() == 'leads.show' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('leads.index')); ?>"><?php echo e(__('Leads')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage deal')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'deals.list' || Request::route()->getName() == 'deals.index' || Request::route()->getName() == 'deals.show' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('deals.index')); ?>"><?php echo e(__('Deals')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage form builder')): ?>
        <li class="dash-item <?php echo e(Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' ? 'active open' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('form_builder.index')); ?>"><?php echo e(__('Form Builder')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage contract')): ?>
        <li class="dash-item  <?php echo e(Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('contract.index')); ?>"><?php echo e(__('Contract')); ?></a>
        </li>
        <?php endif; ?>
        <!--crm report-->
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'active dash-trigger' : ''); ?>" href="#crm-report" data-toggle="collapse" role="button" aria-expanded="<?php echo e(Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'true' : 'false'); ?>">
          <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            <li class="dash-item <?php echo e(request()->is('reports-lead') ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('report.lead')); ?>"><?php echo e(__('Lead')); ?></a>
            </li>
            <li class="dash-item <?php echo e(request()->is('reports-deal') ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('report.deal')); ?>"><?php echo e(__('Deal')); ?></a>
            </li>
          </ul>
        </li>
        <!--end crm report-->
        <?php if(Gate::check('manage lead stage') || Gate::check('manage pipeline') || Gate::check('manage source') || Gate::check('manage label') || Gate::check('manage stage')): ?>
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'pipelines' ? 'active dash-trigger' : ''); ?>" href="#crm-settings" data-toggle="collapse" role="button" aria-expanded="<?php echo e(Request::segment(1) == 'pipelines' ? 'true' : 'false'); ?>">
          <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            <li class="dash-item  <?php echo e(request()->is('pipelines') ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('pipelines.index')); ?>   "><?php echo e(__('Field')); ?></a>
            </li>
          </ul>
          
        </li>
        <?php endif; ?>
      </ul>
    </li>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(!empty($userPlan) &&  $userPlan->project == 1): ?>
    <?php if(Gate::check('manage project')): ?>
    <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report' ? 'active dash-trigger' : ''); ?>">
      <a class="dash-link" href="#"><?php echo e(__('Projects')); ?>

        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show project dashboard')): ?>
        <li class="dash-item <?php echo e(Request::route()->getName() == 'project.dashboard' ? ' active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('project.dashboard')); ?>"><?php echo e(__('Overview ')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project')): ?>
        <li class="dash-item  <?php echo e(Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('projects.index')); ?>"><?php echo e(__('Projects')); ?></a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project task')): ?>
        <li class="dash-item <?php echo e(request()->is('taskboard*') ? 'active' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('taskBoard.view', 'list')); ?>"><?php echo e(__('Tasks')); ?></a>
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
          <a class="dash-link" href="<?php echo e(route('task.calendar', ['all'])); ?>"><?php echo e(__('Task Calendar')); ?></a>
        </li>
        <?php endif; ?>
        <?php if(\Auth::user()->type != 'super admin'): ?>
        <li class="dash-item  <?php echo e(Request::segment(1) == 'time-tracker' ? 'active open' : ''); ?>">
          <a class="dash-link" href="<?php echo e(route('time.tracker')); ?>"><?php echo e(__('Tracker')); ?></a>
        </li>
        <?php endif; ?>
        
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'project_report' ? 'active dash-trigger' : ''); ?>">
          <a class="dash-link" href="#"><?php echo e(__('Reports')); ?>

            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
             <?php if(\Auth::user()->type == 'company' || \Auth::user()->type == 'Employee'): ?>
            <li class="dash-item  <?php echo e(Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('project_report.index')); ?>"><?php echo e(__('Projects')); ?></a>
            </li>
            <?php endif; ?>
          </ul>
        </li>
        <li class="dash-item dash-hasmenu <?php echo e(Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' ? 'active dash-trigger' : ''); ?>">
          <a class="dash-link" href="#"><?php echo e(__('Settings')); ?>

            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            <?php if(Gate::check('manage project task stage') || Gate::check('manage bug status')): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage project task stage')): ?>
            <li class="dash-item  <?php echo e(Request::route()->getName() == 'project-task-stages.index' ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('project-task-stages.index')); ?>"><?php echo e(__('Project Task Stages')); ?></a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage bug status')): ?>
            <li class="dash-item <?php echo e(Request::route()->getName() == 'bugstatus.index' ? 'active' : ''); ?>">
              <a class="dash-link" href="<?php echo e(route('bugstatus.index')); ?>"><?php echo e(__('Bug Status')); ?></a>
            </li>
            <?php endif; ?>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </li>
    <?php endif; ?>
    <?php endif; ?>
  </ul>
</li><?php /**PATH C:\xampp\htdocs\herp\resources\views/partials/admin/items/admin/subitems/client.blade.php ENDPATH**/ ?>