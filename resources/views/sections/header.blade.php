<header class="site-header">
    <div class="site-header__inner">
        <a href="{{ url('/') }}" class="site-header__brand">
            {{ config('app.name') }}
        </a>

        <button
            type="button"
            class="theme-toggle"
            aria-label="Toggle theme"
            data-theme-toggle
        >
            <span class="theme-toggle__icon theme-toggle__icon--light">☀️</span>
            <span class="theme-toggle__icon theme-toggle__icon--dark">🌙</span>
        </button>
    </div>
</header>
