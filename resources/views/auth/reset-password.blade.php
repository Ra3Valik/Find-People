@extends('layouts.app')

@section('title', 'Сброс пароля')

@section('content')
    <h1>Сброс пароля</h1>

    @include('auth._errors')

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label>Email</label><br>
            <input name="email" type="email" value="{{ old('email', $request->email) }}" required autofocus>
        </div>

        <div style="margin-top:10px;">
            <label>Новый пароль</label><br>
            <input name="password" type="password" required>
        </div>

        <div style="margin-top:10px;">
            <label>Подтверждение пароля</label><br>
            <input name="password_confirmation" type="password" required>
        </div>

        <div style="margin-top:14px;">
            <button type="submit">Сменить пароль</button>
        </div>
    </form>
@endsection
