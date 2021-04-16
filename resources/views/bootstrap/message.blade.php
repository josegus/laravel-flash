<div class="alert
            {{ config('flash.class') }}
            {{ session('flash_notification.class') }}" role="alert"
>
    @if (session('flash_notification.dismissible'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @endif

    <div>{!! session('flash_notification.message') !!}</div>
</div>
