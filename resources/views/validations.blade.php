@if(isset($errors) && $errors->any())
    @if(config('flash.framework') === 'tailwind')
        @include('flash::tailwind.validation')
    @else
        @include('flash::bootstrap.validation')
    @endif
@endif
