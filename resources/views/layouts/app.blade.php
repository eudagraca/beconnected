<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <div class="uk-background-primary uk-light">
                <nav class="uk-navbar-container uk-navbar-transparent">
                    <div class="uk-container">
                        <div class="uk-navbar" data-uk-navbar>
                            <div class="uk-navbar-left">
                                <a class="uk-navbar-item uk-logo" href="/">{{ config('app.name', 'Laravel') }}</a>

                                <ul class="uk-navbar-nav">
                                    <li>
                                        <a href="#">Useful Links</a>
                                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                            <div class="uk-navbar-dropdown-grid uk-child-width-1-3" data-uk-grid>

                                            </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="uk-navbar-right">
                                <ul class="uk-navbar-nav">
                                    <!-- Authentication Links -->
                                    @guest
                                    @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                                    </li>
                                    @endif
                                    @if (Route::has('register'))
                                    <li>
                                        <a
                                            href="{{ route('register', ['query'=> 'chooseAccount']) }}">{{ __('Registar') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li>
                                        <a href="#">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="uk-navbar-dropdown uk-margin-remove-top uk-margin-remove-right">
                                            <ul class="uk-nav uk-navbar-dropdown-nav uk-list uk-list-striped">
                                                <li class="uk-padding-remove"><a href="{{ route('user.profile') }}">Meu Perfil</a></li>
                                                <li class="uk-padding-remove">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Terminar a sessão') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <main>
                @yield('content')
            </main>

            <footer class="uk-section uk-section-xsmall uk-section-secondary .uk-position-relative">
                <div class="uk-container">

                    <div
                        class="uk-text-small uk-margin-remove uk-align-right uk-float-right uk-text-muted uk-text-right uk-width-1-3@s">
                        Built with <span data-uk-icon="heart"></span></a>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
        <script src="{{ asset('js/customApp.js') }}" defer></script>
    </body>

</html>
