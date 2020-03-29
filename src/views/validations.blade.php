@if (isset($errors) && $errors->any())
    <div class="alert alert-{{ config('laravel-flash.validations.type') }}
        {{ config('laravel-flash.validations.dismissible') ? 'alert-dismissible' : '' }}
        {{ config('laravel-flash.validations.class') }}">
        @if (config('laravel-flash.validations.dismissible'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @endif
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif