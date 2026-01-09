@extends('layouts.app')

@section('title', __( 'front/auth.confirm_email' ))

@section('content')
    <div id="confirm-password" class="auth auth-container container">
        <h1>{{ __( 'front/auth.confirm_email' ) }}</h1>

        @if (session('status') === 'verification-link-sent')
            <div style="background:#efe; padding:10px; border:1px solid #9f9; margin-bottom:12px;">
                {{ __( 'front/auth.verification_link_send' ) }}
            </div>
        @endif

        <p>{{ __( 'front/auth.check_your_email_for_confirm' ) }}</p>

        <form method="POST" action="{{ route('verification.send') }}" style="margin-top:14px;">
            @csrf
            <button type="submit">{{ __( 'front/auth.send_link' ) }}</button>
        </form>

        <form method="POST" action="{{ route('logout') }}" style="margin-top:10px;">
            @csrf
            <button type="submit">{{ __( 'front/auth.logout' ) }}</button>
        </form>
    </div>
@endsection
