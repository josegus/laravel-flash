<div class="p-4 rounded flex justify-between
            {{ config('flash.validations.class') }}
            {{ config('flash.validations.classes.tailwind') }}"
>
    <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if(config('flash.validations.dismissible'))
        <button class="ml-2 px-2" onclick="this.parentElement.remove();">&times;</button>
    @endif
</div>
