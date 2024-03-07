<li class="dash-item dash-hasmenu {{ Request::segment(1) == 'email_template' || Request::route()->getName() == 'manage.email.language' ? ' active dash-trigger' : 'collapsed' }}">
  <a href="{{ route('manage.email.language', [$emailTemplate->id, \Auth::user()->lang]) }}" class="dash-link">
    <span class="dash-micon">
      <i class="ti ti-template"></i>
    </span>
    <span class="dash-mtext">{{ __('Email Template') }}</span>
  </a>
</li>