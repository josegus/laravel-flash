@if (isset($errors) && $errors->any())
    <div class="alert alert-{{ config('flash.validations.type') }}
        {{ config('flash.validations.dismissible') ? 'alert-dismissible' : '' }}
        {{ config('flash.validations.class') }}">
        @if (config('flash.validations.dismissible'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @endif
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif