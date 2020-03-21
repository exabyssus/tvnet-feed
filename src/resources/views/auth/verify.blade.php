@extends('feed::layouts.layout')

@section('content')
    @if(session('resent'))
        <div class="alert alert-success">Resent!</div>
    @endif
    <span>Your email must be verified to see the feed.</span>
    <form method="POST" action="{{ route('verification.resend') }}">
        {{ csrf_field() }}
        <button type="submit">Resend</button>
    </form>
@endsection