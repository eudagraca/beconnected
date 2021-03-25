@extends('layouts.app')
@section('content')
<nav id="gold" class="uk-navbar-container uk-card-default gold uk-margin">
    <div class="uk-navbar-left uk-container">

        <a class="uk-navbar-item uk-logo" href="#">
            <div class="uk-child-width-1-1 uk-child-width-1-1@s">
                <h3 class="uk-card-title uk-margin-remove-bottom"></h3>
            </div>
        </a>


        <div class="uk-inline search-form uk-navbar-item">
            <button class="btn-red search-form uk-inline uk-button-primary" type="button">Go</button>
            <div uk-dropdown="pos: right-center uk-padding-remove">
                <ul class="uk-nav uk-dropdown-nav uk-padding-remove">
                    <form id="search-form" class="search-form  relative uk-padding-remove" action="/en1" method="GET">
                        <input id="s_input" type="search" name="q" class=" " aria-label="Search" placeholder="Pesquisar" value=""><a class=" input-link uk-padding-remove-right bottom-right" uk-icon="icon: search;"></a></input>
                        <!-- <button class="btn-red uk-button-primary" type="button" onclick="ksearchvideo();" ><span uk-icon="icon: search;"></span></button> -->
                    </form>
                </ul>
            </div>
        </div>

        <!-- <div class="uk-navbar-item">
            <form id="search-form uk-inline" class="search-form  relative" action="/en1" method="GET">
                        <input id="s_input" type="search" name="q" class="uk-width-large uk-position-center uk-overlay uk-overlay-default uk-inline" aria-label="Search" placeholder="Pesquisar" value="">
                        <button class="btn-red uk-inline uk-button-primary" type="button" onclick="ksearchvideo();" ><span uk-icon="icon: search;"></span></button>
                    </form>
            
        </div> -->

        <div class="uk-navbar-right uk-link-reset">
        <button class="uk-button" type="button" uk-toggle="target: #offcanvas-nav" uk-icon="icon: table"></button>
            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-button-primary">

                    <ul class="uk-nav uk-nav-primary ">
                        <li class="uk-active"><a href="#">Menu</a></li>
                        <li class="uk-parent">
                            <a href="#">Conta</a>
                            <ul class="uk-nav-sub">
                                <p uk-margin>
                                    <button class="uk-button uk-button-default"><a class="uk-link-muted" href="{{ route('company.create') }}">Acesso</a></button>
                                    <button class="uk-button radius uk-button-default"><a  href="{{ route('company.create') }}"></a>Conta normal</button>
                                    <button class="uk-button radius uk-button-primary "><a  href="{{ route('company.create') }}"></a>Conta empresa</button>
                                </p>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Politica</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: info"></span> Acesso</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: question"></span> Cota</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: home"></span> Sobre nos</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</nav>







<div class="" >
    <div class="uk-card uk-card-default uk-width-1-1@m">
        <div class="">
                
                    </div>         
                    <div class="uk-card  uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="../storage/company/Teste.jpg" alt="" uk-cover>
                            <canvas width="800" height="500"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body">
                            <h3 class="uk-card-title">Aqui voce pode</h3>
                            Conectar se ao melhor ecossistema empresarial no seu endereço actual
                                    <!-- Buscas por algum serviço ou empresa no teu endereço actual?--><br>
                                    "Estamos aqui para ajuda-lo"<br>
                                    Faça sua busca que nós levaremos voçê até lá!</p>
                                    <!-- <hr> -->
                                            <form action="{{ route('company.search') }}" method="POST" class="form-control ">
                                                @csrf
                                                    <div class="detalhes-da-empresa uk-width-1-1" uk-grid>
                                                    <div class="uk-width-1-1@s ">
                                                        <label class="uk-form-label" for="form-horizontal-select"></label>
                                                        <!-- <input class="uk-input typeahead radius " type="text" name="filter" placeholder="Em que podemos ajudar?"> -->
                                                        <select class="uk-select uk-input typeahead radius" id="ramo" name="ramo" value="ramo" id="form-horizontal-select">
                                                        <option name="" value="">Voce esta em busca de?</option>
                                                        <option name="ramo" value="Clinica">Clinica</option>
                                                        <option name="ramo" value="Farmacia">Farmacia</option>
                                                        <option name="ramo" value="Doces de salgados">Doces e salgados</option>
                                                        <option name="ramo" value="Servicos de Cuntring">Servicos de Cuntring</option>
                                                        <option name="ramo" value="Consultoria de advogacia">Consultoria de advogacia</option>
                                                        <option name="ramo" value="Consultoria de Contabilidade">Consultoria de Contabilidade</option>
                                                        <option name="ramo" value="Consultoria de Agronegocio">Consultoria de Agronegocio</option>
                                                        <option name="ramo" value="Aluminio e vidro">Aluminio e vidro</option>

                                                        <option name="ramo" value="loja de Roupa Femenina">loja de Roupa Femenina</option>
                                                        <option name="ramo" value="loja de Roupa Masculina">loja de Roupa Masculina</option>
                                                        <option name="ramo" value="loja de Roupa M/F">loja de Roupa M/F</option>
                                                        <option name="ramo" value="loja de Calcado Femenino">loja de Calcado Femenino</option>
                                                        <option name="ramo" value="loja de Calcado Masculino">loja de Calcado Masculino</option>
                                                        <option name="ramo" value="loja de Calcado M/F">loja de Calcado M/F</option>

                                                        <option name="ramo" value="Salao de cabelo Femenino">Salao de cabelo Femenino</option>
                                                        <option name="ramo" value="Salao de cabelo Masculino">Salao de cabelo Masculino</option>

                                                        <option name="ramo" value="Hotel">Hotel</option>
                                                        <option name="ramo" value="Pensao">Pensao</option>

                                                        <option name="ramo" value="Construção Civil">Construção Civil</option>
                                                        <option name="ramo" value="Doces de salgados">Doces de salgados</option>
                                                        <option name="ramo" value="Transporte">Transporte</option>
                                                        <option name="ramo" value="Oficina">Oficina</option>
                                                        <option name="ramo" value="Micro Banco">Micro Banco</option>
                                                        <option name="ramo" value="Agricola">Agro Negocio</option>
                                                        <option name="ramo" value="Pecuaria">Pecuaria</option>
                                                        <option name="ramo" value="Ferragem">Ferragem</option>
                                                        <option name="ramo" value="Borracharia">Borracharia</option>
                                                        <option name="ramo" value="Agencia de viagem">Agencia de viagem</option>
                                                        <option name="ramo" value="Restaurante">Restaurante</option>
                                                        <option name="ramo" value="Ornamentação de Eventos">Ornamentação de Eventos</option>
                                                        <option name="ramo" value="Moda">Moda</option>
                                                        <option name="ramo" value="Botique">Botique</option>
                                                    </select>
                                                        <!-- <input class="typeahead uk-input typeahead radius " type="text" name="filter" placeholder="Em que podemos ajudar?"> -->
                                                    </div>
                                                    </div>
                                                    <div class="endereco-da-empresa uk-width-1-1" uk-grid>
                                                    <div class="uk-width-1-2@s">
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-horizontal-select"></label>
                                                            <div class="uk-form-controls">
                                                                <select name="provincia_id" class="uk-select radius formselect required"  id="provincia_id">
                                                                    <option  disabled selected>Qual é tua Provincia</option>
                                                                        @foreach($provincias_list as $provincia)
                                                                    <option value="{{ $provincia->id }}">
                                                                        {{ ucfirst($provincia->nome) }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="uk-width-1-2@s ">
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-horizontal-select"></label>
                                                            <div class="uk-form-controls">
                                                                <select class="uk-select radius" name="distrito_id" value="{{ old('distrito_id') }}" id="distrito_id">
                                                                    <option>Qual é seu distrito</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="detalhes-da-empresa uk-width-1-1" uk-grid>
                                                        <div class="uk-width-1-1@s">
                                                        <button class="uk-input uk-form-width-large uk-button-primary radius">search</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- <hr> -->
                                    <!-- <p uk-margin>
                                    <button class="uk-button uk-button-default"><a class="uk-link-muted" href="{{ route('company.create') }}">Entrar</a></button>
                                    <button class="uk-button radius uk-button-primary"><a  href="{{ route('company.create') }}"></a>Criar conta</button>
                                    <button class="uk-button uk-button-secondary"><a href="{{ route('company.create') }}">Conta</a></button>
                                </p> -->
                            </div>                             
                        </div>
                    </div>
                        <h6 class="uk-card-title uk-margin-remove-bottom">Be.connected</h6>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Todos direitos reservados<br>Maputo 10.03.2021</time></p>
                </div>
            </div>
        <div class="uk-card-body">

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Missão</h3>
                        <p>Promover o intercâmbio entre as PME, clientes e potências investidores e servir de ponte para impulsionar o crescimento, visibilidade e maior oportunidade para as PME’s no ecossistema empresarial.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Visão</h3>
                        <p>Ser referencia nacional e internacional no intercambio empresarial e exposição de PME's, agregando valores a sociedade e as empresas.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Valores</h3>
                        <p>Integridade, foco no cliente,  qualidade do nosso produto e sustentabilidade do meio ambiental.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="uk-card-footer">
            <a href="#" class="uk-button uk-button-text">Read more</a>
        </div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>
            $(document).ready(function () {
            $('#provincia_id').on('change', function () {
            let id = $(this).val();
            $('#distrito_id').empty();
            $('#distrito_id').append(`<option value="0" disabled selected>Aguarde...</option>`);
            $.ajax({
            type: 'GET',
            url: '/distrito/' + id+'/provincia',
            success: function (response) {
            var response = JSON.parse(response);
            $('#distrito_id').empty();
            $('#distrito_id').append(`<option value="0" disabled selected>Seu distrito</option>`);
            response.forEach(element => {
                $('#distrito_id').append(`<option value="${element['id']}">${element['nome']}</option>`);
                });
            }
            ,
            error : function(reponse,error)
            {
            alert("Falha interna");
            }
        });
    });
});
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    var path = "{{ route('search') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection