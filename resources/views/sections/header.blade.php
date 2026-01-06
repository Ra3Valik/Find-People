<header class="site-header">
    <div class="site-header__inner">
        <a href="{{ url('/') }}" class="site-header__brand">
            {{ config('app.name') }}
        </a>

        @include( 'partials.theme-switcher' )
    </div>
</header>
