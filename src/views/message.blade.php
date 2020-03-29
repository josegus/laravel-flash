@if (session()->has('flash_notification'))
    <div class="alert alert-{{ session('flash_notification.type') }} {{ config('laravel-flash.class') }}" role="alert">
         @if (session('flash_notification.dismissible'))
            <button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true"
            >&times;</button>
        @endif
        {!! session('flash_notification.message') !!}
    </div>
@endif

@if (config('laravel-flash.validations.enabled'))
    @include(config('laravel-flash.validations.view'))
@endif