<button
    type="button"
    class="theme-toggle"
    aria-label="Toggle theme"
    data-theme-toggle
>
    <span class="theme-toggle__icon theme-toggle__icon--light">
        {!! file_get_contents( public_path( 'images/svg/sun.svg' ) ) !!}
    </span>

    <span class="theme-toggle__icon theme-toggle__icon--dark">
        {!! file_get_contents( public_path( 'images/svg/moon.svg' ) ) !!}
    </span>
</button>
