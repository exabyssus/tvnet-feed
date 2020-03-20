@extends('feed::layouts.layout')

@section('content')
    <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div>
            <label class="required" for="email">Email:</label>
            <input type="email" name="email" id="email" required
                   value="{{ old('email') }}">
        </div>
        <div>
            <label class="required" for="password">Password:</label>
            <input pattern=".{5,255}" type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection