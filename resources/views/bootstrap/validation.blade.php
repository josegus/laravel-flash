<div id="messages" class="alert
            {{ config('flash.validations.class') }}
            {{ config('flash.validations.classes.bootstrap') }}
            {{ config('flash.validations.dismissible') ? 'alert-dismissible' : '' }}"
>
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if(config('flash.validations.dismissible'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    @endif
</div>


<script>
    function hideFlashMessage() {
        document.getElementById("messages").style.display = "none";
    }
    setTimeout(hideFlashMessage, 5000);
</script>