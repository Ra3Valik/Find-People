@php
    $user = auth()->user();
@endphp

@if( $user )
    <div class="profile-dropdown">
        <img class="profile-image" src="{{ $user->getAvatar() }}">
        <div class="profile-dropdown-content">
            <a href="{{ route('dashboard') }}"
               class="profile__link link-underline"
            >
                {{ __('front/dashboard.title') }}
            </a>

            <form method="POST" action="{{ route('logout') }}" class="profile__logout-form">
                @csrf
                <a href="{{ route('logout') }}"
                   class="profile__link profile__link--danger link-underline"
                   onclick="event.preventDefault(); this.closest('form').submit();"
                >
                    {{ __('front/auth.logout') }}
                </a>
            </form>
        </div>
    </div>
@else
    <div class="auth-actions">
        <a href="{{ route('login') }}" class="auth-link">
            Login
        </a>

        <a href="{{ route('register') }}" class="auth-button">
            Register
        </a>
    </div>
@endif
