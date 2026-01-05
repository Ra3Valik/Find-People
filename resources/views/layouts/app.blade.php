<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    @class(['dark' => ($appearance ?? 'system') == 'dark'])>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel')) | {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite([
        'resources/css/app.css',
        'resources/css/admin-bar.css',
        'resources/css/header.css',
        'resources/css/footer.css',
        'resources/js/theme-toggle.js',
    ])
    @stack('head')
</head>

<body class="font-sans antialiased min-h-screen flex flex-col">
    @includeWhen(auth()->user()?->hasAccess('platform.index'), 'sections.admin-bar')

    @include('sections.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('sections.footer')
</body>
</html>
