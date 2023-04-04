<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-item navbar-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo-m.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                        </a>
                        <div class="title">
                            <span class="name is-uppercase">Majncraft<span class="is-lowercase">.cz</span></span>
                            <span class="slogan">@lang('Připoj se na s.majncraft.cz')</span>
                        </div>
                    </span>
                    <span class="navbar-burger burger" @click="showNav = !showNav" :class="{ 'is-active': showNav }">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div class="navbar-menu" :class="{ 'is-active': showNav }">
                    <div class="navbar-end">
                        {{-- <a class="navbar-item is-active">@lang('Domov')</a> --}}
                        {{-- <a class="navbar-item">@lang('Historie')</a> --}}
                        {{-- <a href="{{ route('rule.show', 'pravidla') }}" class="navbar-item">@lang('Pravidla')</a> --}}
                        {{-- <a class="navbar-item" href="#">@lang('CJDZ')</a> --}}
                        <a class="navbar-item" href="https://server.majncraft.cz/">@lang('Banlist')</a>
                        {{-- <a class="navbar-item" href="#">@lang('Forum')</a> --}}
                        <a class="navbar-item" href="https://map.majncraft.cz/">@lang('Dynmapa')</a>
                        <a class="navbar-item" href="https://discord.gg/vckSkFC"><i class="fab fa-discord"></i></a>
                        <a href="https://www.facebook.com/majncraft" class="navbar-item"><i class="fab fa-facebook"></i></a>
                        {{-- <span class="navbar-item">
                            <a class="button is-accent" href="https://map.majncraft.cz/">
                                <span>@lang('Dynmapa')</span>
                            </a>
                        </span> --}}
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        @if (\Route::current()->getName() !== 'whitelist')
            <vote-list></vote-list>
        @endif

        <footer class="has-background-black has-text-light">
            <div class="container py-3">
                <div class="columns">
                    <div class="column">
                        <p class="mb-0">2010 &ndash; {{ date('Y') }} &copy; Majncraft.cz <small>| v2.0
                                {{-- @guest
                                    <a href="{{ route('login') }}">@lang('Administrace')</a>
                                @else
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        @lang('Odhlásit')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @endguest --}}
                            </small></p>
                    </div>
                    <div class="column has-text-right">
                        <p class="mb-0">Made with <i class="fad fa-cubes has-text-success"></i> by <a
                                href="https://liska.dev">www.liska.dev</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/manifest.js') }}" defer></script>
    <script src="{{ asset('js/vendor.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- @auth
        <script src="{{ asset('js/admin.js') }}" defer></script>
    @endauth --}}
    <script src="https://kit.fontawesome.com/f3f91d6e00.js" crossorigin="anonymous"></script>
</body>

</html>
