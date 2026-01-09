@extends('layouts.app')

@section('title', __( 'front/auth.register' ))

@section('content')
    <div id="register" class="auth auth-container container">
        <h1>{{ __( 'front/auth.register' ) }}</h1>

        @include('auth._errors')

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>{{ __( 'front/auth.name' ) }}</label><br>
                <input name="name" type="text" value="{{ old('name') }}" required autofocus>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.email' ) }}</label><br>
                <input name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.password' ) }}</label><br>
                <input name="password" type="password" required>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.confirm_password' ) }}</label><br>
                <input name="password_confirmation" type="password" required>
            </div>

            <div style="margin-top:14px;">
                <button type="submit">{{ __( 'front/auth.create_account' ) }}</button>
                <a href="{{ route('login') }}" style="margin-left:10px;">{{ __( 'front/auth.already_have_an_account' ) }}</a>
            </div>
        </form>
    </div>
@endsection
