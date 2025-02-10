<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar-expand -md">
        <nav class="navbar">
            <div class="container-md">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Devan w.
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/temperature">Temperature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/temperature" style="font-weight:bold;color:#424242" href="/contacts">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::currentRouteName() === 'temperature' ? 'nav-link active' : 'nav-link'}}" href="{{ route('temperature') }}">{{ __('Temperature') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::currentRouteName() === 'contacts.index' ? 'nav-link active' : 'nav-link'}}" href="{{ route('contacts.index') }}">{{ __('Contacts') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Route::currentRouteName() === 'contacts.create' ? 'nav-link active' : 'nav-link'}}" href="{{ route('contacts.create') }}">{{ __('Add Contact') }}</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </nav>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    Devan w.
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="{{ Route::currentRouteName() === 'temperature' ? 'nav-link active' : 'nav-link'}}" href="{{ route('temperature') }}">{{ __('Temperature') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Route::currentRouteName() === 'contacts.index' ? 'nav-link active' : 'nav-link'}}" href="{{ route('contacts.index') }}">{{ __('Contacts') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Route::currentRouteName() === 'contacts.create' ? 'nav-link active' : 'nav-link'}}" href="{{ route('contacts.create') }}">{{ __('Add Contact') }}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-dark text-white">
            @yield('content')
        </main>
    </div>
</body>
</html>