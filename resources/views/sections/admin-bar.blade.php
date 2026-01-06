@php
    $user = auth()->user();
@endphp

<div id="admin-bar" class="admin-bar">
    <div class="admin-bar__inner">
        <ul class="admin-bar__menu">
            <li class="admin-bar__item">
                <a class="admin-bar__link link-underline"
                   href="{{ url('/') }}"
                   title="{{ config('app.name') }}"
                >
                    {{ config('app.name') }}
                </a>
            </li>

            <li class="admin-bar__item">
                <a class="admin-bar__link admin-bar__link--small link-underline"
                   href="{{ route('platform.index') }}"
                >
                    {{ __('admin/main.screen_name') }}
                </a>
            </li>
        </ul>

        <ul class="admin-bar__secondary">
            <li class="admin-bar__account">
                <span class="admin-bar__hello">
                    {{ __('general.hello') }},
                    <span class="admin-bar__name">{{ $user->name }}</span>
                </span>

                <img class="admin-bar__avatar"
                     alt=""
                     src="{{ $user->getAvatar() }}"
                     height="26" width="26">
            </li>

            <li class="admin-bar__item">
                <form method="POST" action="{{ route('logout') }}" class="admin-bar__logout-form">
                    @csrf
                    <a href="{{ route('logout') }}"
                       class="admin-bar__link admin-bar__link--danger link-underline"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        {{ __('front/auth.logout') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
