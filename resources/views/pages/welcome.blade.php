@extends('layouts.app')

@section('title', __( 'front/home.title' ))

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-semibold">{{ __( 'front/home.welcome' ) }}</h1>

        @if( auth()->user() )
            <span class="admin-bar__hello">
                {{ __('general.hello') }},
                <span class="admin-bar__name">{{ auth()->user()->name }}</span>
            </span>


            <form method="POST" action="{{ route('logout') }}" class="admin-bar__logout-form">
                @csrf
                <a href="{{ route('logout') }}"
                   class="admin-bar__link admin-bar__link--danger"
                   onclick="event.preventDefault(); this.closest('form').submit();"
                >
                    {{ __('front/auth.logout') }}
                </a>
            </form>
        @else
            @if($canRegister ?? false)
                <a class="underline" href="{{ route('register') }}">{{ __( 'front/auth.register' )  }}</a>
            @endif

            <a class="underline ml-4" href="{{ route('login') }}">{{ __( 'front/auth.login' )  }}</a>
        @endif
    </div>
@endsection
