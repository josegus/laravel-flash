<div id="messages" class="alert
            {{ config('flash.class') }}
            {{ session('flash_notification.class') }}" role="alert"
>
    @if (session('flash_notification.dismissible'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @endif

    <div>{!! session('flash_notification.message') !!}</div>
</div>


<script>
    function hideFlashMessage() {
        document.getElementById("messages").style.display = "none";
    }
    setTimeout(hideFlashMessage, 5000);
</script>