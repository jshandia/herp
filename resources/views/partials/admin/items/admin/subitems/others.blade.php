@if (\Auth::user()->type != 'super admin')
<li class="dash-item dash-hasmenu">
    <a href="#!" class="dash-link ">
        <span class="dash-micon">
            <i class="ti ti-layers-difference"></i>
        </span>
        <span class="dash-mtext">{{ __('Others') }}</span>
        <span class="dash-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="dash-submenu">
        <li class="dash-item">
            <a href="{{ route('support.index') }}" class="dash-link">
                <span class="dash-mtext">{{ __('Support') }}</span>
            </a>
        </li>
        <li class="dash-item">
            <a href="{{ route('zoom-meeting.index') }}" class="dash-link">
                <span class="dash-mtext">{{ __('Zoom Meeting') }}</span>
            </a>
        </li>
        <li class="dash-item">
            <a href="{{ url('chats') }}" class="dash-link">
                <span class="dash-mtext">{{ __('Messenger') }}</span>
            </a>
        </li>
    </ul>
</li>
@endif