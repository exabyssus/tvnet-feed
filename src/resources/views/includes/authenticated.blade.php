<div class="auth-nav">
    @php
        if (!isset($user)) {
            $user = Auth::user();
        }
    @endphp
    <p>{{ $user->name . ($user->surname ? sprintf(' %s', $user->surname) : '') }}</p>
    <form method="POST" action="{{ route('logout') }}">
        {{ csrf_field() }}
        <button type="submit">Logout</button>
    </form>
</div>