<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'crm-dashboard' || Request::segment(1) == 'leads' || Request::segment(1) == 'deals' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'contract' || Request::segment(1) == 'contract' || Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' || Request::segment(1) == 'pipelines' || Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report' ? ' active dash-trigger' : '' }}">
  <a href="#!" class="dash-link ">
    <span class="dash-micon">
      <i class="ti ti-layers-difference"></i>
    </span>
    <span class="dash-mtext">{{ __('Client') }}</span>
    <span class="dash-arrow">
      <i data-feather="chevron-right"></i>
    </span>
  </a>
  <ul class="dash-submenu">
    @if(!empty($userPlan) &&  $userPlan->crm == 1)
    @if (Gate::check('manage lead') || Gate::check('manage deal') || Gate::check('manage form builder') || Gate::check('manage contract'))
    <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'crm-dashboard' || Request::segment(1) == 'leads' || Request::segment(1) == 'deals' || Request::segment(1) == 'form_builder' || Request::segment(1) == 'contract' || Request::segment(1) == 'contract' || Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' || Request::segment(1) == 'pipelines' ? ' active dash-trigger' : '' }}">
      <a class="dash-link" href="#">{{ __('CRM') }}
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        <li class="dash-item {{ \Request::route()->getName() == 'crm.dashboard' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('crm.dashboard') }}">{{ __(' Overview') }}</a>
        </li>
        @can('manage lead')
        <li class="dash-item {{ Request::route()->getName() == 'leads.list' || Request::route()->getName() == 'leads.index' || Request::route()->getName() == 'leads.show' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('leads.index') }}">{{ __('Leads') }}</a>
        </li>
        @endcan
        @can('manage deal')
        <li class="dash-item {{ Request::route()->getName() == 'deals.list' || Request::route()->getName() == 'deals.index' || Request::route()->getName() == 'deals.show' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('deals.index') }}">{{ __('Deals') }}</a>
        </li>
        @endcan
        @can('manage form builder')
        <li class="dash-item {{ Request::segment(1) == 'form_builder' || Request::segment(1) == 'form_response' ? 'active open' : '' }}">
          <a class="dash-link" href="{{ route('form_builder.index') }}">{{ __('Form Builder') }}</a>
        </li>
        @endcan
        @can('manage contract')
        <li class="dash-item  {{ Request::route()->getName() == 'contract.index' || Request::route()->getName() == 'contract.show' ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('contract.index') }}">{{ __('Contract') }}</a>
        </li>
        @endif
        <!--crm report-->
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'active dash-trigger' : '' }}" href="#crm-report" data-toggle="collapse" role="button" aria-expanded="{{ Request::segment(1) == 'reports-lead' || Request::segment(1) == 'reports-deal' ? 'true' : 'false' }}">
          <a class="dash-link" href="#">{{ __('Reports') }}
            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            <li class="dash-item {{ request()->is('reports-lead') ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('report.lead') }}">{{ __('Lead') }}</a>
            </li>
            <li class="dash-item {{ request()->is('reports-deal') ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('report.deal') }}">{{ __('Deal') }}</a>
            </li>
          </ul>
        </li>
        <!--end crm report-->
        @if (Gate::check('manage lead stage') || Gate::check('manage pipeline') || Gate::check('manage source') || Gate::check('manage label') || Gate::check('manage stage'))
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'pipelines' ? 'active dash-trigger' : '' }}" href="#crm-settings" data-toggle="collapse" role="button" aria-expanded="{{ Request::segment(1) == 'pipelines' ? 'true' : 'false' }}">
          <a class="dash-link" href="#">{{ __('Settings') }}
            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            <li class="dash-item  {{ request()->is('pipelines') ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('pipelines.index') }}   ">{{ __('Field') }}</a>
            </li>
          </ul>
          
        </li>
        @endif
      </ul>
    </li>
    @endif
    @endif
    @if(!empty($userPlan) &&  $userPlan->project == 1)
    @if (Gate::check('manage project'))
    <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'project' || Request::segment(1) == 'bugs-report' || Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' || Request::segment(1) == 'calendar' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'timesheet-list' || Request::segment(1) == 'taskboard' || Request::segment(1) == 'project' || Request::segment(1) == 'projects' || Request::segment(1) == 'project_report' ? 'active dash-trigger' : '' }}">
      <a class="dash-link" href="#">{{ __('Projects') }}
        <span class="dash-arrow">
          <i data-feather="chevron-right"></i>
        </span>
      </a>
      <ul class="dash-submenu">
        @can('show project dashboard')
        <li class="dash-item {{ Request::route()->getName() == 'project.dashboard' ? ' active' : '' }}">
          <a class="dash-link" href="{{ route('project.dashboard') }}">{{ __('Overview ') }}</a>
        </li>
        @endcan
        @can('manage project')
        <li class="dash-item  {{ Request::segment(1) == 'project' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.list' || Request::route()->getName() == 'projects.index' || Request::route()->getName() == 'projects.show' || request()->is('projects/*') ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('projects.index') }}">{{ __('Projects') }}</a>
        </li>
        @endcan
        @can('manage project task')
        <li class="dash-item {{ request()->is('taskboard*') ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('taskBoard.view', 'list') }}">{{ __('Tasks') }}</a>
        </li>
        @endcan
        @can('manage timesheet')
        <li class="dash-item {{ request()->is('timesheet-list*') ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('timesheet.list') }}">{{ __('Timesheet') }}</a>
        </li>
        @endcan
        @can('manage bug report')
        <li class="dash-item {{ request()->is('bugs-report*') ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('bugs.view', 'list') }}">{{ __('Bug') }}</a>
        </li>
        @endcan
        @can('manage project task')
        <li class="dash-item {{ request()->is('calendar*') ? 'active' : '' }}">
          <a class="dash-link" href="{{ route('task.calendar', ['all']) }}">{{ __('Task Calendar') }}</a>
        </li>
        @endcan
        @if (\Auth::user()->type != 'super admin')
        <li class="dash-item  {{ Request::segment(1) == 'time-tracker' ? 'active open' : '' }}">
          <a class="dash-link" href="{{ route('time.tracker') }}">{{ __('Tracker') }}</a>
        </li>
        @endif
        
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'project_report' ? 'active dash-trigger' : '' }}">
          <a class="dash-link" href="#">{{ __('Reports') }}
            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
             @if (\Auth::user()->type == 'company' || \Auth::user()->type == 'Employee')
            <li class="dash-item  {{ Request::route()->getName() == 'project_report.index' || Request::route()->getName() == 'project_report.show' ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('project_report.index') }}">{{ __('Projects') }}</a>
            </li>
            @endif
          </ul>
        </li>
        <li class="dash-item dash-hasmenu {{ Request::segment(1) == 'bugstatus' || Request::segment(1) == 'project-task-stages' ? 'active dash-trigger' : '' }}">
          <a class="dash-link" href="#">{{ __('Settings') }}
            <span class="dash-arrow">
              <i data-feather="chevron-right"></i>
            </span>
          </a>
          <ul class="dash-submenu">
            @if (Gate::check('manage project task stage') || Gate::check('manage bug status'))
            @can('manage project task stage')
            <li class="dash-item  {{ Request::route()->getName() == 'project-task-stages.index' ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('project-task-stages.index') }}">{{ __('Task Stages') }}</a>
            </li>
            @endcan
            @can('manage bug status')
            <li class="dash-item {{ Request::route()->getName() == 'bugstatus.index' ? 'active' : '' }}">
              <a class="dash-link" href="{{ route('bugstatus.index') }}">{{ __('Bug Status') }}</a>
            </li>
            @endcan
            @endif
          </ul>
        </li>
      </ul>
    </li>
    @endif
    @endif
  </ul>
</li>