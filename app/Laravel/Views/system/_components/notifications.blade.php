@if(session()->has('notification-status'))
  @if(session()->get('notification-status') == "success")
  <div role="alert" class="alert alert-success alert-dismissible">
    <div class="icon"><span class="mdi mdi-check"></span></div>
    <div class="message">
      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>{{session()->get('notification-msg')}}
    </div>
  </div>
  @endif

  @if(session()->get('notification-status') == "info")
  <div role="alert" class="alert alert-info alert-dismissible">
    <div class="icon"><span class="mdi mdi-info-outline"></span></div>
    <div class="message">
      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>{{session()->get('notification-msg')}}
    </div>
  </div>
  @endif

  @if(session()->get('notification-status') == "warning")
  <div role="alert" class="alert alert-warning alert-dismissible">
    <div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
    <div class="message">
      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>{{session()->get('notification-msg')}}
    </div>
  </div>
  @endif

  @if(session()->get('notification-status') == "failed" OR session()->get('notification-status') == "error")
  <div role="alert" class="alert alert-danger alert-dismissible">
    <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
    <div class="message">
      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>{{session()->get('notification-msg')}}
    </div>
  </div>
  @endif
@endif
