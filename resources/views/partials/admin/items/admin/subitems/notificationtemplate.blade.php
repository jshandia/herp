@if (\Auth::user()->type == 'company')
<li class="dash-item dash-hasmenu">
    <a href="{{ route('notification-templates.index') }}" class="dash-link ">
        <span class="dash-micon">
            <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext">{{ __('Notification template') }}</span>
    </a>
</li>
@endif