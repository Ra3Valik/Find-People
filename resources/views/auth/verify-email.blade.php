@extends('layouts.app')

@section('title', 'Подтверждение email')

@section('content')
    <h1>Подтверждение email</h1>

    @if (session('status') === 'verification-link-sent')
        <div style="background:#efe; padding:10px; border:1px solid #9f9; margin-bottom:12px;">
            Ссылка подтверждения отправлена повторно.
        </div>
    @endif

    <p>Проверь почту и перейди по ссылке для подтверждения.</p>

    <form method="POST" action="{{ route('verification.send') }}" style="margin-top:14px;">
        @csrf
        <button type="submit">Отправить ссылку ещё раз</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top:10px;">
        @csrf
        <button type="submit">Выйти</button>
    </form>
@endsection
