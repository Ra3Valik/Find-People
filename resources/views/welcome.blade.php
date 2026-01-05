@extends('layouts.app')

@section('title', __( 'front/home.title' ))

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold">{{ __( 'front/home.welcome' ) }}</h1>

        @if($canRegister ?? false)
            <a class="underline" href="{{ route('register') }}">{{ __( 'front/auth.register' )  }}</a>
        @endif

        <a class="underline ml-4" href="{{ route('login') }}">{{ __( 'front/auth.login' )  }}</a>
    </div>
@endsection
