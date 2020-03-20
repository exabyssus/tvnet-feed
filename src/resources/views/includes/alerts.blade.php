<div class="alert-wrapper">
    @if(session('error'))
        <div class="alert alert-error">{{ Session::get('error') }}</div>
    @elseif(session('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
</div>