@if (\Auth::user()->type == 'super admin')
  @include('landingpage::menu.landingpage')
@endif