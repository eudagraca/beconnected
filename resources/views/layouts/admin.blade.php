<!DOCTYPE html>
<html>
    <head>
        <title>be Connected</title>

        <meta charset="UTF-8">
        <meta name="description" content="be Connected">
        <meta name="keywords" content="be Connected">
        <meta name="author" content="be Connected">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('css/admin/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/admin/notyf.min.css') }}" />
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/admin/uikit.min.js') }}" defer></script>
		<script src="{{ asset('js/admin/uikit-icons.min.js') }}" ></script>
    </head>
    <body>
        <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle"  ></a>
                        <a href="#" class="uk-navbar-item uk-logo">
                            be Connected
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#" uk-navbar-toggle-icon> &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">{{ Auth::user()->name }}</li>
                                       <li><a href="#">Editar Perfil</a></li>
                                       <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Terminar a sessão') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate uk-align-left uk-margin-remove">Èrik Campobadal</div>
                    <div id="email" class="uk-text-truncate uk-align-left uk-margin-remove uk-text-meta">ConsoleTVs@gmail.com</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success uk-align-left"></span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                    Empresas
                </li>
                <li><a class="uk-text-meta" href="buttons.html">Empresas</a></li>
                <hr class="uk-margin-remove">
                <li class="uk-nav-header">
                    Usuários
                </li>
                <li><a class="uk-text-meta" href="login.html">Usuários</a></li>
	        <li><a class="uk-text-meta" href="404.html">404</a></li>
            </ul>
        </div>
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h4><span class="ion-speedometer"  uk-icon="ratio: 10"></span> Painel do administrador</h4>
                    <p>
                        Seja bem vindo, <span class="uk-text-primary"> {{ Auth::user()->name }}</span>
                    </p>
                    <ul class="uk-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span href="">Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="uk-section-small">
                @yield('content')
            </div>
        </div>
		<!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
		<script src="{{ asset('js/admin/notyf.min.js') }}"></script>
		<!-- Required Overall Script -->
        <script src="{{ asset('js/admin/script.js') }}"></script>
		<!-- Status Updater -->
		<script src="{{ asset('js/admin/status.js') }}"></script>
		<!-- Sample Charts -->
		<script src="{{ asset('js/admin/charts.js') }}"></script>
		<!-- Sample Notifications -->
		<script src="{{ asset('js/admin/notification.js') }}"></script>
    </body>
</html>
