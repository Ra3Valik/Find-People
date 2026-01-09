@extends('layouts.app')

@section( 'title', __( 'front/auth.reset_password' ) )

@section('content')
    <div id="reset-password" class="auth auth-container container">
        <h1>{{ __( 'front/auth.reset_password' ) }}</h1>

        @include('auth._errors')

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <label>{{ __( 'front/auth.email' ) }}</label><br>
                <input name="email" type="email" value="{{ old('email', $request->email) }}" required autofocus>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.new_password' ) }}</label><br>
                <input name="password" type="password" required>
            </div>

            <div style="margin-top:10px;">
                <label>{{ __( 'front/auth.confirm_password' ) }}</label><br>
                <input name="password_confirmation" type="password" required>
            </div>

            <div style="margin-top:14px;">
                <button type="submit">{{ __( 'front/auth.change_password' ) }}</button>
            </div>
        </form>
    </div>
@endsection
