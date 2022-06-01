@if (Session::has('message-info') || Session::has('message-success') || Session::has('message-warning') || Session::has('message-danger'))
    @php
        if (Session::has('message-info')) {
            $style_card   = "alert-info";
            $message_card = Session::get('message-info');
            $icon         = "fa-info-circle";
        } elseif (Session::has('message-success')) {
            $style_card   = "alert-success";
            $message_card = Session::get('message-success');
            $icon         = "fa-check-circle";
        } elseif (Session::has('message-warning')) {
            $style_card   = "alert-warning";
            $message_card = Session::get('message-warning');
            $icon         = "fa-exclamation-circle";
        } elseif (Session::has('message-danger')) {
            $style_card   = "alert-danger";
            $message_card = Session::get('message-danger');
            $icon         = "fa-exclamation-triangle";
        }
    @endphp
    <div class="alert {{ $style_card }} d-flex justify-content-center" role="alert">
        <div ><i class="fa {{ $icon }}"></i> {{ $message_card }}</div>
    </div>
@endif