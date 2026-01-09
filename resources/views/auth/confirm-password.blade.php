@extends('layouts.app')

@section( 'title', __( 'front/auth.confirm_password' ) )

@section('content')
    <div id="confirm-password" class="auth auth-container container">
        <h1>{{ __( 'front/auth.confirm_password' ) }}</h1>

        @include('auth._errors')

        <p>{{ __( 'front/auth.confirm_password_for_continue' ) }}</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.password' ) }}</label><br>
                <input name="password" type="password" required autofocus>
            </div>

            <div style="margin-top:14px;">
                <button type="submit">{{ __( 'front/auth.confirm' ) }}</button>
            </div>
        </form>
    </div>
@endsection
