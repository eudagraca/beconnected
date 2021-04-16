<!DOCTYPE html>
<html>
    <head>
        <title>Beconnected</title>

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
        <script src="{{ asset('js/admin/uikit.min.js') }}"></script>
		<script src="{{ asset('js/admin/uikit-icons.min.js') }}" ></script>
    </head>
    <body>
        <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle"  ></a>
                        <a href="{{ route('superadmin') }}" class="uk-navbar-item uk-logo">
                            Beconnected
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#" uk-navbar-toggle-icon> &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">{{ Auth::user()->name }}</li>
                                       <li><a href="{{ route('editadmin', Auth::user()->id ) }}">Editar Perfil</a>
                                       <div id="modal-sections2" uk-modal>
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <div class="uk-modal-header">
                                                <h6 class="uk-modal-title">Editar dados</h6>
                                            </div>
                                            <div class="uk-modal-body">
                                                @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                <form action="{{route('User.updateUser', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input value="user" type="text" name="role" hidden>
                                                    <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Dados
                                                            do usuário</h6>
                                                    </div>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                        <label for="name" class="uk-form-label">
                                                            {{ __('Nome do usuário') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <input class="uk-input @error('name') uk-form-danger @enderror" id="name"
                                                                name="name" type="text" value="{{ Auth::user()->name ?? old('name') }}" required
                                                                autocomplete="name" autofocus>
                                                            @error('name')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                        <label for="last_name" class="uk-form-label">
                                                            {{ __('Ultimo nome') }}
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <input class="uk-input @error('last_name') uk-form-danger @enderror"
                                                                id="last_name" name="last_name" type="text"
                                                                value="{{ Auth::user()->last_name ?? old('last_name') }}" autocomplete="last_name" autofocus>
                                                            @error('last_name')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                        <label for="email" class="uk-form-label">
                                                            {{ __('Email') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <input class="uk-input @error('email') uk-form-danger @enderror" id="email"
                                                                name="email" type="text" value="{{ Auth::user()->email ?? old('email') }}" required autocomplete="Email"
                                                                placeholder="Exemplo@gmail.com" autofocus>
                                                            @error('email')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                        <label for="password" class="uk-form-label">
                                                            {{ __('Password') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <input class="uk-input @error('password') uk-form-danger @enderror" id="password" name="password"
                                                                type="tel" value="{{ old('password') }}" required  autocomplete="password" autofocus>
                                                            @error('password')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                            
                                                    <div class="uk-margin-remove-top uk-width-1-1">

                                                        <div class="uk-form-control uk-align-right">
                                                            <br>
                                                            <button type="submit" class="uk-button uk-button-primary">
                                                                {{ __('Acualizar') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="uk-modal-footer uk-text-right">
                                                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                                <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                            </div>
                                        </div>
                                    </div>
                                       </li>


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
                    <div class="uk-margin-top uk-padding-remove uk-margin-remove"></div>
                    
                    <div id="name" class="uk-text-truncate uk-align-left uk-margin-remove"><h2 class="uk-text-muted uk-text-bold">{{ Auth::user()->name }}</h2></div>
                    <div id="email" class="uk-text-truncate uk-align-left uk-margin-remove uk-text-meta">{{ Auth::user()->email?? 'N/A' }}</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success uk-align-left">Disciplina & Qualidade
                    </span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default uk-margin-remove uk-pedding-remove">

                <li class="uk-nav-header">
                    <h6 class="uk-text-bold uk-text-muted">Eu sou Empresas Cadastradas</h6> 
                </li>
                <li><a class="uk-text-meta" href="{{ route('company') }}">Empresas</a></li>
                <hr class="uk-margin-remove">
                <li class="uk-nav-header">
                <h6 class="uk-text-bold uk-text-muted">Usuários Cadastrados </h6>
                </li>
                <li><a class="uk-text-meta" href="{{ route('users') }}">Usuários</a></li>
	            <li><a class="uk-text-meta" href="{{ route('users') }}">404</a></li>
                <li>
                    @if ($users->perfil) 
                        <div>
                            <a href="{{ url("storage/{$users->perfil}") }}" data-caption="{{ $users->company_name}}">
                                <img class="uk-border-circle" style="width: 150px; height: 150px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="{{ url("storage/{$users->perfil}") }}" />
                            </a>
                        </div>
                        @else
                            <img class="uk-border-circle" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />
                    @endif
                </li>

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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span href="{{ route('superadmin') }}">Dashboard</span></li>
                        <li><a class="uk-text-meta uk-link-reset" href="{{ route('company') }}">Empresas</a></li>
                        <li><span><a class="uk-text-meta uk-link-reset" href="{{ route('users') }}">Usuários</a></span></li>
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
