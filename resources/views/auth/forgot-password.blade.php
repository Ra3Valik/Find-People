@extends('layouts.app')

@section( 'title', __( 'front/auth.password_recovery' ) )

@section('content')
    <h1>{{ __( 'front/auth.password_recovery' ) }}</h1>

    @include('auth._errors')

    @if (session('status'))
        <div style="background:#efe; padding:10px; border:1px solid #9f9; margin-bottom:12px;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label>{{ __( 'front/auth.email' ) }}</label><br>
            <input name="email" type="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div style="margin-top:14px;">
            <button type="submit">{{ __( 'front/auth.send_link' ) }}</button>
            <a href="{{ route('login') }}" style="margin-left:10px;">Назад</a>
        </div>
    </form>
@endsection
