@if(session()->has('flash_notification'))
    @if(config('flash.framework') === 'tailwind')
        @include('flash::tailwind.message')
    @else
        @include('flash::bootstrap.message')
    @endif
@endif

@if(config('flash.validations.enabled'))
    @include(config('flash.validations.view'))
@endif
