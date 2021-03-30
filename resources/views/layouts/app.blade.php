<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" /> -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous" />
        <!-- CSS message -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    

        <!-- euclideo incoming changes -->
            <link href="{{ asset('css/company.css') }}" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>
        <div id="app">
            <div class=" gold uk-light ">
                <nav class="uk-navbar-container uk-navbar-transparent">
                    <div class="uk-container">
                        <div class="uk-navbar" data-uk-navbar>
                            <div class="uk-navbar-left">
                                <a class="uk-navbar-item uk-padding-top-remove uk-text-bolder uk-logo logocolor" href="/"  style="color: #32d296; font-size:18px; font-family:'Comfortaa', cursive;">{{ config('app.name', 'Laravel') }}</a>

                                <!--<ul class="uk-navbar-nav">
                                    <li>
                                        <a href="#"></a>
                                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                            <div class="uk-navbar-dropdown-grid uk-child-width-1-3" data-uk-grid>
                                                
                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="uk-navbar-right">
                                <ul class="uk-navbar-nav">
                                    <!-- Authentication Links -->
                                    @guest
                                    @if (Route::has('login'))
                                    <li>
                                        <a style="color: #32d296;" href="{{ route('login') }}">{{ __('Log In') }}</a>
                                    </li>
                                    @endif
                                    @if (Route::has('register'))
                                    <li>
                                        <a style="color: #32d296;"
                                            href="{{ route('register', ['query'=> 'chooseAccount']) }}">{{ __('Registar') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li>
                                        <a style="color: #32d296;" href="#">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="uk-navbar-dropdown uk-margin-remove-top uk-margin-remove-right">
                                            <ul class="uk-nav uk-navbar-dropdown-nav uk-list uk-list-striped">
                                                <li class="uk-padding-remove"><a href="{{ route('user.profile') }}">Meu
                                                        Perfil</a></li>
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

            <!--<footer class="uk-section uk-section-xsmall uk-section-secondary .uk-position-relative">
                <div class="uk-container">

                    <div
                        class="uk-text-small uk-margin-remove uk-align-right uk-float-right uk-text-muted uk-text-right uk-width-1-3@s">
                        Built with <span data-uk-icon="heart"></span></a>
                    </div>
                </div>
            </footer> -->
        </div>
        <!-- Euclideo incoming changes -->
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
        <script src="{{ asset('js/form.js') }}" defer></script>
        <script src="{{ asset('js/company.js') }}" defer></script> 
   

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
        <script src="{{ asset('js/customApp.js') }}" ></script>
        <script src="https://cdn.socket.io/3.1.1/socket.io.min.js" 
            integrity="sha384-gDaozqUvc4HTgo8iZjwth73C6dDDeOJsAgpxBcMpZYztUfjHXpzrpdrHRdVp8ySO" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous"></script>
        @yield('post-script')
        @yield('post-script')
    </body>
    @stack('scripts')

</html>
