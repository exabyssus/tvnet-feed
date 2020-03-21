@extends('feed::layouts.layout')

@section('content')
    <form action="{{ route('register') }}" class="register-form" method="post">
        {{ csrf_field() }}
        <div class="row">
            <label class="required" for="name">Name:</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
        </div>
        <div class="row">
            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" value="{{ old('surname') }}">
        </div>
        <div class="row">
            <label class="required" for="email">Email:</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
            <div class="validity"></div>
        </div>
        <div class="row">
            <label class="required" for="password">Password:</label>
            <input pattern=".{5,20}" type="password" name="password"
                   id="password" placeholder="5-20 characters" required>
        </div>
        <div class="row">
            <label class="required" for="password_confirmation">Confirm password:</label>
            <input pattern=".{5,20}" type="password" name="password_confirmation"
                   id="password_confirmation" placeholder="5-20 characters" required>
        </div>
        <button type="submit">Register</button>
    </form>
@endsection

@section('custom_scripts')
    <script src="{{ url('/raivovaisla/tvnet-feed/js/register.js') }}"></script>
@endsection