@extends('layouts.app')

@section( 'title', __( 'front/auth.login' ) )

@section('content')
    <div id="login" class="auth auth-container container">
        <h1>{{ __( 'front/auth.login' ) }}</h1>

        @include('auth._errors')

        @if (session('status'))
            <div style="background:#efe; padding:10px; border:1px solid #9f9; margin-bottom:12px;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label>{{ __( 'front/auth.email' ) }}</label><br>
                <input name="email" type="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.password' ) }}</label><br>
                <input name="password" type="password" required>
            </div>

            <div style="margin-top:10px;">
                <label>
                    <input type="checkbox" name="remember">
                    {{ __( 'front/auth.remember_me' ) }}
                </label>
            </div>

            <div style="margin-top:14px;">
                <button type="submit">Войти</button>
                <a href="{{ route('password.request') }}" style="margin-left:10px;">{{ __( 'front/auth.forgot_password' ) }}</a>
            </div>
        </form>

        <p style="margin-top:16px;">
            {{ __( 'front/auth.doesnt_have_the_account' ) }} <a href="{{ route('register') }}">{{ __( 'front/auth.register' ) }}</a>
        </p>
    </div>
@endsection
