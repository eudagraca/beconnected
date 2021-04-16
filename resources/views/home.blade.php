@extends('layouts.app')
@section('content')
<div class="uk-container">
    <div class="uk-section uk-section-small uk-tile-default">
        <div class="uk-margin-remove uk-padding-remove">
            <ul class="uk-flex-center"  uk-tab>
                <li><h6 class="uk-text-bolder uk-beconnected  uk-text-center"><span class="uk-be">Be</span>connected</h6>
            
                </li>
            </ul>
        </div>

        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#" class="uk-text-capitalize">Buscar</a></li>
                <li><a href="#" class="uk-text-capitalize">Empresas</a></li>
                <!-- <li><a href="#" class="uk-text-capitalize">yu</a></li> -->
                <li><a href="#" class="uk-text-capitalize">Concursos</a></li>
            </ul>

            <ul class="uk-switcher uk-margin ">
                <li>
                    <div class="uk-card uk-card-body  uk-text-center">
                        <!-- <h6 class="uk-card-title uk-text-muted">|</h6> -->
                            <p></p>
                            
                            <form action="{{ route('company.searchall') }}" method="POST">
                            @csrf   
                                <div class="uk-margin">
                                    <div class="uk-inline radius2">
                                        <span class="uk-form-icon" uk-icon="icon:"></span>
                                        <span class="uk-form-icon uk-form-icon-flip" type="submit" uk-icon="search"></span>
                                        <input class="uk-inputt uk-input radius2" name="filter" type="text" placeholder="Pesquisar ou escrever o endereço">
                                    </div>
                                </div>
                            </form>
                        <!-- <a href="{{ route('register', ['query' => 'user']) }}" class=" uk-button uk-button-default uk-border-rounded">Seguinte</a> -->
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-body uk-card-hover uk-text-center">               
                    <!-- Start show cumpany -->
                    <div class="uk-section uk-section-small">
                        <div class="uk-container">
                            <div class="uk-grid-small  uk-text-center" uk-grid>
                                @foreach ($companies as $company)
                                <div class="uk-card uk-grid-small uk-grid-collapse uk-width-1-4@s uk-margin " uk-grid>
                                    <div class="uk-card-media-center  uk-cover-container uk-margin-remove" >
                                        @if ($company->logo) 
                                        <div class=" uk-padding-left">
                                            <img style="width: 100%; height: 250px; border-radius: 10px;" class="" src="{{ url("storage/{$company->logo}") }}" alt="logo">
                                        </div>
                                        @else
                                        <!-- <img class="uk-border-circle" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" /> -->
                                            <img style="width: 250px; height: 250px;" class="uk-padding-remove" src="../storage/photos/Deafult-Profile-Pitcher.png" alt="" uk-cover>
                                            <canvas width="300" height="100"></canvas>
                                        @endif
                                        <!-- <img class="uk-padding-remove" src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover-->
                                        <!--canvas width="300" height="100"></canvas> -->
                                    </div>
                                    <div class="uk-width-1-1@m uk-margin-remove-top uk-padding-remove">
                                        <div class="uk-card-body uk-padding-small">
                                            <h5>{{ $company->company_name }}</h5>
                                            <button class="uk-button uk-button-primary uk-padding-remove uk-margin-remove-top  uk-button-small"><a class="uk-button uk-text-center" href="{{ route('company.show', $company) }}">CONTACTAR EMPRESA</a></button>
                                            <p>{{ $company->address }} </p>
                                            <p>{{ $company->segment_area }}</p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End campany show -->
                    </div>
                </li>

                <li>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; sets: true; finite: true">
                    <ul class=" uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-thumbnav" uk-margin uk-tab>
                    @foreach($companies as $slider)
                        <li class="">
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top item image {{ $loop->first ? ' active' : '' }} uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                <img src="{{url('storage')}}/{{$slider->logo}}" style="width: 300px; height: 200px" alt="slider" title="Image Slideshow">
                            </div>
                            <div class="uk-card-body">
                                <h4 class="uk-card-title uk-text-small uk-text-bold">{{ $slider->company_name}}</h4>
                                <p class="uk-text-small">{{ $slider->address}}</p>
                                </p><a class=" uk-text-center" href="{{ route('company.show', $company) }}">CONTACTAR EMPRESA</a></p>
                            </div>
                        </div>
                        </li>
                        @endforeach
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
                            <!-- @foreach($companies as $key => $slider)
                            
                                <div class=" carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img style="width: 300px; height: 200px" class=" d-block w-100"  alt="..." src="{{url("storage/{$slider->logo}")}}" > 
                                </div>
                                <div class="uk-position-center uk-panel"><h1>1</h1></div>
                                
                            @endforeach -->


                            <!-- <div class="group-home-slideshow uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                <div class="home-slideshow-inner col-sm-12">
                                    <div class="home-slideshow">
                                    <div id="home_main-slider" class="carousel slide">
                                        
                                        <ol class="carousel-indicators">
                                            @foreach($companies as $photo)
                                                <li data-target="#home_main-slider" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner uk-thumbnav" uk-slider>
                                        @foreach($companies as $slider)
                                        <div class=" item image {{ $loop->first ? ' active' : '' }} uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                            <img src="{{url('storage')}}/{{$slider->logo}}" style="width: 300px; height: 200px" alt="slider" title="Image Slideshow">
                                            <div class="slideshow-caption position-right">
                                            <div class="slide-caption">
                                                <div class="group-caption">
                                                <div class="content">
                                                    @if(!empty($slider->title))
                                                    <span class="title">
                                                    {{$slider->title}}
                                                    </span>
                                                    @endif
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        </div>
                                        <a class="left carousel-control" href="#home_main-slider" data-slide="prev">
                                        <span class="icon-prev"></span>
                                        </a>
                                        <a class="right carousel-control" href="#home_main-slider" data-slide="next">
                                        <span class="icon-next"></span>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                </div> -->
                         
                         
                
                </li>
            </ul>
        </div>

    </div>
</div>



<div class="uk-position-relative uk-cover-container  uk-visible-toggle" tabindex="-1" uk-slideshow="min-height: 650; max-height: 650; animation: push">
    <ul class="uk-slideshow-items">
        <li>
            <img src="../storage/Company/banner-single-post-kw-prestacao-de-servicos.jpg" alt="" uk-cover>
            <div class=" uk-position-top-left uk-text-center">
 
                <div class="uk-inline uk-float-right ">
                    <!-- <button class="btn-red search-form uk-button uk-dark uk-button-default uk-float-left uk-button-primary" type="button">Faca sua Busca</button> -->
                    <div class="uk-container">

                            <br><br><br><br><br><br><br><br><br>
                        <ul>

                        <form action="{{ route('company.search') }}" method="POST" class="uk-form-stacked ">
                            @csrf
                                <div class="uk-width-1-1  detalhes-da-empresa">
                                <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1" uk-grid>
                                    <label class="uk-form-label" for="form-horizontal-select"></label>
                                    <div class="uk-width-1-1@s">
                                    <!-- <input class="uk-input typeahead radius " type="text" name="filter" placeholder="Em que podemos ajudar?"> -->
                                    <select class="uk-select radius uk-input  uk-width-1-1@s typeahead" id="ramo" required name="ramo" value="ramo" id="form-horizontal-select">
                                        <option name="" value="">Buscando por:</option>                                    <option name="segment_area" value="Advogados">Advogados</option>
                                        <option name="segment_area" value="Agências de Turismo">Agências de Turismo</option>
                                        <option name="segment_area" value="Agências de Viagens">Agências de Viagens</option>
                                        <option name="segment_area" value="Agências de Publicidade">Agências de Publicidade</option>
                                        <option name="segment_area" value="Alumínio e vidro">Alumínio e vidro</option>
                                        <option name="segment_area" value="Arquitectos e Projectos">Arquitectos e Projectos</option>
                                        <option name="segment_area" value="Automóveis">Automóveis</option>
                                        <option name="segment_area" value="Automóveis e Peças">Automóveis e Peças</option>
                                        <option name="segment_area" value="Automóveis Reparação">Automóveis Reparação</option>
                                        <option name="segment_area" value="Bate chapa">Bate chapa</option>
                                        <option name="segment_area" value="Barres & bebidas ">Barres & Bebidas</option>
                                        <option name="segment_area" value="Carpitarias e Mercenarias">Carpitarias e Mercenarias</option>
                                        <option name="segment_area" value="Casas">Casas</option>
                                        <option name="segment_area" value="Clinica">Clinica</option>
                                        <option name="segment_area" value="Clinica Dentárias">Clinica Dentárias</option>
                                        <option name="segment_area" value="Clinica Veterinárias">Clinica Veterinárias</option>
                                        <option name="segment_area" value="Consultores">Consultores</option>
                                        <option name="segment_area" value="Consultoria Empresarial">Consultoria Empresarial</option>
                                        <option name="segment_area" value="Contabilidade">Contabilidade</option>
                                        <option name="segment_area" value="Despachantes Aduaneiros">Despachantes Aduaneiros</option>
                                        <option name="segment_area" value="Escola de Musica & Dança">Escola de Musica & Dança</option>
                                        <option name="segment_area" value="Escola de Lingua">Escola de Lingua</option>
                                        <option name="segment_area" value="Farmacia">Farmacia</option>
                                        <option name="segment_area" value="Ferragens">Ferragens</option>
                                        <option name="segment_area" value="Ginásios">Ginásios</option>
                                        <option name="segment_area" value="Hoteis">Hotéis</option>
                                        <option name="segment_area" value="Hoteis, Pousadas">Hotéis, Pousadas</option>
                                        <option name="segment_area" value="Imobiliária">Imobiliária</option>
                                        <option name="segment_area" value="Lavandarias">Lavandarias</option>
                                        <option name="segment_area" value="loja de Roupa Femenina">loja de Roupa F</option>
                                        <option name="segment_area" value="loja de Roupa Masculina">loja de Roupa M</option>
                                        <option name="segment_area" value="loja de Roupa M/F">loja de Roupa M&F</option>
                                        <option name="segment_area" value="loja de Calcado Femenino">loja de Calcado F</option>
                                        <option name="segment_area" value="loja de Calcado Masculino">loja de Calcado M</option>
                                        <option name="segment_area" value="loja de Calcado M/F">loja de Calcado M/F</option>
                                        <option value="loja de equipamento de cozinha">loja de e equipamento de cozinha</option>
                                        <option value="loja de equipamento e material de escritorio">loja de e equipamento & material de escritorio</option>
                                        <option value="loja de equipamento para limpeza">loja de e equipamento para limpeza</option>
                                        <option name="segment_area" value="loja de Roupas para Crianças">loja de Roupas para Crianças</option>
                                        <option name="segment_area" value="loja de Móveis Mobílias">loja de Móveis & Mobílias</option>
                                        <option name="segment_area" value="loja de Perfumes e Cosméticos">loja de Perfumes e Cosméticos</option>
                                        <option name="segment_area" value="Óptica">Óptica</option>
                                        <option name="segment_area" value="Parafusos e Porcas">Parafusos e Porcas</option>
                                        <option name="segment_area" value="Pensões">Pensões</option>
                                        <option name="segment_area" value="Pintores de Construção civil">Pintores de Construção civil</option>
                                        <option name="segment_area" value="Pizzerias">Pizzerias</option>
                                        <option name="segment_area" value="Pneus & Equipamentos">Pneus & Equipamentos</option>
                                        <option name="segment_area" value="Recauchutagem & Vulcanizaçao">Recauchutagem & Vulcanizaçao</option>
                                        <option name="segment_area" value="Rent Car">Rent Car</option>
                                        <option name="segment_area" value="Restaurantes">Restaurantes</option>
                                        <option name="segment_area" value="Segurança">Segurança</option>
                                        <option name="segment_area" value="Sistemas de segurança Electrónica">Sistemas de segurança Electrónica</option>
                                        <option name="segment_area" value="Supermecados">Supermecados</option>
                                        <option name="segment_area" value="Talhos">Talhos</option>
                                        <option name="segment_area" value="Táxis">Táxis</option>
                                        <option name="segment_area" value="Técnicos de contas">Técnicos de contas</option>
                                        <option name="segment_area" value="Transporte de carga">Transporte de carga</option>
                                        <option name="segment_area" value="Transporte de Mercadorias">Transporte de Mercadorias</option>
                                        <option name="segment_area" value="Transporte de Passageiros">Transporte de Passageiros</option>
                                        <option name="segment_area" value="Turismo Empreendimentos">Turismo Empreendimentos</option>
                                        <option name="segment_area" value="Agricola">Agro negócio</option>
                                        <option name="segment_area" value="Ornamentação de Eventos">Ornamentação de Eventos</option>
                                        <option name="segment_area" value="Outros">Outros</option>
                                    </select>
                                </div>
                                    <!-- <input class="typeahead uk-input typeahead radius " type="text" name="filter" placeholder="Em que podemos ajudar?"> -->
                                </div>
                                </div>
                                <div class="endereco-da-empresa uk-width-1-1" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-horizontal-select"></label>
                                        <div class="uk-form-controls">
                                            <select name="provincia_id" class="uk-select radius formselect required" required id="provincia_id">
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
                                            <select class="uk-select radius" name="distrito_id" required value="{{ old('distrito_id') }}" id="distrito_id">
                                                <option>Qual é seu distrito</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="detalhes-da-empresa uk-width-1-1" uk-grid>
                                    <div class="uk-width-1-1@s">
                                    <button class="uk-input uk-form-width-large uk-button-primary radius2">search</button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                </div>
                    <!-- <button class="uk-button uk-dark uk-button-default uk-float-left" type="button">Justify</button> -->
                </div>
            </div>
        </li>
 <!--        <li>
            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay loop muted playsinline uk-cover></video>
        </li>
        <li>
            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-cover></iframe>
        </li> -->
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>



<div class="uk-section uk-section-default">
    <div class="uk-container">

    <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#" class="uk-text-capitalize">Beconnected</a></li>
                <li><a href="#" class="uk-text-capitalize">Sobre nós</a></li>
                <!-- <li><a href="#" class="uk-text-capitalize">Equipe</a></li> -->
                <li><a href="#" class="uk-text-capitalize">Contactos</a></li>
            </ul>

            <ul class="uk-switcher uk-margin ">
                <li>
                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                        <!-- <span><a href="{{ route('superadmin') }}" class="uk-link-reset">Be</a>connected Todos direitos reservados 2021 <span></span><br> -->
                        </div>
                    </div>
                </li>

                <li>
                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <h4>Sobre Nós</h4>
                            <p>Be connected é uma plataforma que visa conectar empresas e seus pontencias clientes, bem como estabelecer o intercambio e a partilha de informações entre elas.</p>
                        </div>
                        <div>
                            <h4>Missão</h4>
                            <p>
                                Promover o intercâmbio entre as empresas e oferecer soluções rapidas aos clientes visando impulsionar o crescimento, visibilidade e maior oportunidade no ecossistema empresarial.
                            </p>
                        </div>
                        <div>
                            <h4>Visão</h4>
                            <p class="uk-margin-remove uk-padding-remove">
                                Ser referência nacional e internacional no intercâmbio empresarial e exposição de empresas, agregando valores a sociedade e as empresas.
                            </p>
                        </div>
                    </div>
                    <span><a href="{{ route('superadmin') }}" class="uk-link-reset">Be</a>connected Todos direitos reservados 2021 <span></span><br>
                </li>

                <!-- <li>
                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <h4>Jac Cuambe Confudador & CEO</h4>
                        </div>
                        <div>
                            <h4>Nossa equipe</h4>
                            <p>
                            Jac Cuambe Confudador & CEO <br>
                            Euclideo Confudador & Dev. <br><br>
                            <a href="{{ route('registeradmin', ['query' => 'super-admin']) }}" class="uk-link-reset">Be connected Todos direitos reservados</a><br>
                            </p>
                        </div>
                        <div>
                            <h4>Euclideo Confudador & Dev.</h4>
                        </div>
                    </div>
                </li> -->

                <li>
                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <!-- <div>
                            <h4>Sobre Nós</h4>
                            <p>Be connected company é uma plataforma que visa conectar empresas e seus pontenciasi clientes bem como estabelecer o intercambio e a partilha de informações entre elas.</p>
                        </div>
                        <div>
                            <h4>Nossa equipe</h4>
                            <p>
                            Jac Cuambe Confudador & CEO <br>
                            Euclideo Confudador & Dev. <br><br>
                            <a href="{{ route('registeradmin', ['query' => 'super-admin']) }}" class="uk-link-reset">Be connected Todos direitos reservados</a><br>
                            </p>
                        </div> -->
                        <div>
                            <h4><a href="{{ route('registeradmin', ['query' => 'super-admin']) }}" class="uk-link-reset">Contactos</a></h4>
                            <p class=""><span class="uk-margin-small-right" uk-icon="icon: receiver;"></span>Tel:+258 840442932</p>
                            <p class=""><span class="uk-margin-small-right" uk-icon="icon: mail;"></span>BeconnectedTeamLeader@gmail.com</p>
                            <p class=""><span class="uk-margin-small-right" uk-icon="icon: whatsapp;"></span>WhatsAap: +258040442932</p>
                            <p class=""><span class="uk-margin-small-right" uk-icon="icon: facebook;"></span>www.Facebook.com/Beconnected</p>
                            <p class=""><span class="uk-margin-small-right" uk-icon="icon: instagram;"></span>www.Instagram.com/Beconnected</p>
                        </div>
                    </div>
                </li>
            </ul>



    </div>
</div>

<!-- <div>
    <div class="uk-card-body">

        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title uk-text-center uk-text-bold">Missão</h3>
                    <p>
                        <span class="uk-text-bold" style="color: indianred; font-size:20px;">"</span> 
                            Promover o intercâmbio entre as PME, clientes e potências investidores e servir de ponte para impulsionar o crescimento, visibilidade e maior oportunidade para as PME’s no ecossistema empresarial.
                        <span class="uk-text-bold" style="color: indianred; font-size:20px;">"</span> 
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title uk-text-center uk-text-bold">Visão</h3>
                    <p> 
                    <span class="uk-text-bold" style="color: indianred; font-size:20px;">"</span> 
                        Ser referencia nacional e internacional no intercambio empresarial e exposição de PME's, agregando valores a sociedade e as empresas.
                    <span class="uk-text-bold" style="color: indianred; font-size:20px;">"</span>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title uk-text-center uk-text-bold">Valores</h3>
                    <p>Integridade, foco no cliente,  qualidade do nosso produto e sustentabilidade do meio ambiental.</p>
                </div>
            </div>
        </div>
    </div>
            <div class="uk-card-footer">
                <a href="#" class="uk-button uk-button-text">Read more</a>
            </div>
</div> -->



<!-- <div class="uk-section uk-section-small uk-section-muted ">
    <div class="uk-container">

    <div class="uk-slider-container-offset" uk-slider="autoplay: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
        <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/tiXvZGZp35LjN8d90p3BfllRrEHxKB6CaGPN1bjT.png">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Roupas Masculina & Femenina</h3>
                        <p>Encontre as melhores Lojas e agencias de moda proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/M_construcao.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Material de Construção </h3>
                        <p>Encontre as melhores lojas de material de construção proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/img_17230007.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Salão de festas & eventos</h3>
                        <p>Encontre os melhores Salãos de festas mais proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/vidros-duplos-acusticos.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Aluminio & Vidro</h3>
                        <p>Encontre as melhores vidrarias e lojas de aluminio proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/img.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Clinicas & Farmacias </h3>
                        <p>Encontre as melhores clinicas e farmacias proximo de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/CarrosEnfileirados-1.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Parques de Automoveis</h3>
                        <p>Encontre os melhores Parques de Automoveis proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img class="" style="width: 380px; height: 200px" src="../storage/Company/sur-mesure-at-mandarin.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Hoteis & Restaurantes</h3>
                        <p>Encontre os melhores Hoteis e Restaurante proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/maxresdefault.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Bolos, Doces & Salgados</h3>
                        <p>Encontre a(o)s melhores Boleiras proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/Blog-1-2.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Peças de Carros</h3>
                        <p>Encontre as melhores Pecas de Automoveis proximos de ti.</p>
                    </div>
                </div>
            </li>


            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/wYCPtTL0jTiJNM59pcMqdGJqTYan9Eb3MtZPAXPR.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Buff & Cuntring</h3>
                        <p>Encontre os melhores serviços de buff e cuntring proximos de ti.</p>
                    </div>
                </div>
            </li>


            <li>
                <div class=" uk-card-default">
                    <div ">
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/160-3-1.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Salao de beleza</h3>
                        <p>Encontre os melhores salões de beleza proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/quanto-custa-para-fazer-uma-campanha-de-marketing-digital.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Contabilidade & Auditoria</h3>
                        <p>Encontre as melhores agencias de contabilidade proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/homem-novo-que-trabalha-editando-estilos-da-foto-na-tela-de-computador-do-pc-em-casa-negocio-da-fotografia_38716-112.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Design </h3>
                        <p>Encontre os melhores designs proximos de ti.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class=" uk-card-default">
                    <div >
                    <img  class="" style="width: 380px; height: 200px" src="../storage/Company/abstract-app-social-web-service-object_1418-520.jpg">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Servicos Diversos</h3>
                        <p>Encontre os melhores serviços proximos de ti.</p>
                    </div>
                </div>
            </li>
        </ul>


        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
 -->
    
    
    
    
    
    
    
    <!-- 
    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
            @foreach ($companies as $company)
            <div uk-slider>
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-light">
                <li class="uk-transition-toggle" tabindex="0">
            
                    <div class="uk-position-center uk-panel"><h1 class="uk-transition-slide-bottom-small">1</h1></div>
                </li>
            </ul>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>


            <div class="uk-card uk-container uk-card-default uk-padding-remove uk-grid-collapse uk-width-1-4@s uk-margin" uk-grid>
                <div class="uk-card-media-center uk-container uk-cover-container">
                    <img  style="width: 300px; height: 200px" width="300" height="200" src="{{ url("storage/{$company->logo}") }}" alt="" uk-cover>
                    <canvas width="300" height="100"></canvas>
                </div>
                <div class="uk-width-1-1@m">
                    <div class="uk-card-body uk-padding-small">
                        <h5 class="uk-margin-remove uk-margin-bottom uk-text-left uk-text-bold">{{ $company->company_name }}</h5>
                        <a href="{{ route('company.show', $company) }}"
                            class="uk-button uk-button-text uk-margin-remove uk-align-left uk-margin-top">Conecte-se
                            <span uk-icon="icon: triangle-right"></span></a>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-success uk-text-small">{{ $company->segment_area }}
                            </label>
                        </p>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-danger uk-text-small">{{ $company->province .' | '. $company->district }}
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div> -->
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
@endsection