@extends('layouts.app')
@section('content')


<div class="uk-container">
    <ul class="uk-padding uk-padding-remove-bottom uk-text-lowercase uk-width-expand@m uk-inline"  uk-tab data-src="../storage/empresas/unnamed.png" uk-img>
        <li class=" uk-position-top-left "><a class="uk-link-reset uk-text-lowercase" href="{{ route('user.profile') }}" ><span uk-icon="icon:  home;"></span></a></li>    
        <li class="uk-position-top-center uk-padding-remove-right"><a class="uk-link-reset uk-text-lowercase"  href="#">Convesras</a></li>
        <li class="uk-position-top-right"><a class="uk-link-reset uk-text-lowercase" href="#" uk-icon="more-vertical"></a></li>
    </ul>
    <!-- <a href="{{ route('home') }}" class="">Home</a> -->
    <ul class="uk-switcher">
    <li>
        <div class="uk-container ">
            <div class="uk-section uk-margin-remove uk-padding-remove uk-section-small uk-tile-default">
                <div class="uk-margin-remove uk-padding-remove">
                    <ul class="uk-margin-remove uk-padding-remove uk-flex-center " uk-tab>
                            
                    <div class="uk-card  uk-card-body uk-padding-remove">
                            @if ($company->logo)
                            <!-- uk-position-top-center uk-overlay uk-overlay-default uk-box-shadow-xlarge -->
                                <div class=" uk-inline " style="margin-left: 30px;" >
                                <img class="uk-border-circle uk-image-possition" style="width: 220px; height: 220px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />    
                                    <div class="uk-position-bottom-right uk-label-warning uk-border-circle  uk-overlay uk-overlay-default"><a class="uk-icon-button uk-label-warning " uk-icon="file-edit" href="#modal-sections0" uk-toggle> </a></div>
                                </div>
                                <div id="modal-sections0" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h6 class="uk-modal-title">Editar perfil</h6>
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
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <form class="" action="{{route('updatelogo', $company->id)}}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            @method('PUT')
                                                            @csrf
                                                                <div class="js-upload uk-placeholder uk-text-center">
                                                                <legend class="uk-legend " for="Product Name">logo</legend>
                                                                <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                                    <div class="uk-margin">
                                                                    <div class="uk-width-1-1" uk-grid>
                                                                        <div class="uk-width-1-1@s">
                                                                            <p>Logo actual</p>
                                                                        <img class="uk-border-circle imagens uk-possition-center" style="width: 150px; height: 150px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />
                                                                        </div>
                                                                        <!-- <div class="uk-width-1-2@s">
                                                                            <p>Novo logo</p>
                                                                        <img  class=" uk-border-circle imagem" style="width: 150px; height: 150px;" />
                                                                        </div> -->
                                                                    </div>
                                                                    </div>
                                                                    <span uk-icon="icon: cloud-upload"></span>
                                                                    <span class="uk-text-middle">Anexe a nova imagem soltando-a aqui</span>
                                                                    <div uk-form-custom>
                                                                        <!-- <input type="file" multiple> -->
                                                                        <input type="file" required name="logo" accept="image/*">
                                                                        <span class="uk-link">nova imagem</span>
                                                                    </div>
                                                                </div>
                                                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                                <div class="uk-align-right">
                                                            <input type="submit" class="uk-button radius uk-button-primary" value="Actualizar" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                            <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                            <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                
                            <img class="uk-border-circle" src="https://getuikit.com/docs/image/avatar.jpg"
                                    style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
                            @endif
                                
                            <li class="uk-panel uk-text-truncate uk-active"><a href="#">{{ $company->company_name }}
                            <p class="uk-heading-line uk-text-small"><span><h4 class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove uk-width-1-1@m">
                            <!-- <span class="uk-margin-small-right" uk-icon="icon:  home;"></span> -->
                            </h4></span></p>
                            <p class=" uk-text-small uk-text-muted uk-padding-remove uk-margin-remove uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                            <span class="uk-margin-small-right" uk-icon="icon:  receiver;"></span>{{ $company->phone}}</p>
                            <p class="uk-text-bolder uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">
                            <span class="uk-margin-small-right" uk-icon="icon: mail;"></span>{{ $company->user->email?? 'N/A' }} &nbsp</p>
                            <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">
                            <span class="uk-margin-small-right" uk-icon="icon: location;"></span>{{ $company->address }} </p>

                            <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->district }}
                                {{ $company->province }} </p><br>
                            <!-- <div class="uk-align-left uk-width-1-1@m uk-margin-remove-bottom uk-margin-remove-top">
                                <p class="uk-text-left uk-text-muted">
                                    Classificação dos clientes
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                            </div> -->
                                <a class="uk-text-primary" href="#modal-sections2" uk-toggle>Editar os dados do perfil</a>
                                
                                <div id="modal-sections2" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h6 class="uk-modal-title">Editar dados</h6>
                                        </div>
                                        <div class="uk-modal-body">
                                            <p>
                                            
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <form class="" action="{{route('updatedados', $company->id)}}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                                <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Dados
                                                                    da empresa</h6>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="company_name" class="uk-form-label">
                                                                    {{ __('Nome da empresa') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('company_name') uk-form-danger @enderror" id="company_name"
                                                                        name="company_name" type="text" value="{{ $company->company_name ?? old('company_name') }}" required
                                                                        autocomplete="company_name" autofocus>
                                                                    @error('company_name')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="address" class="uk-form-label">
                                                                    {{ __('Endereço da empresa') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('address') uk-form-danger @enderror" id="address"
                                                                        name="address" type="text" value="{{ $company->address ?? old('address') }}" required autocomplete="address"
                                                                        placeholder="Rua, Bairro, Cidade" autofocus>
                                                                    @error('address')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="phone" class="uk-form-label">
                                                                    {{ __('Telefone') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('phone') uk-form-danger @enderror" id="phone" name="phone"
                                                                        type="tel" value="{{ $company->phone ?? old('phone') }}" required autocomplete="phone" autofocus>
                                                                    @error('phone')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="alternative_phone" class="uk-form-label">
                                                                    {{ __('Telefone alternativo') }}
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('alternative_phone') uk-form-danger @enderror"
                                                                        id="alternative_phone" name="alternative_phone" type="tel"
                                                                        value="{{ $company->alternative_phone ?? old('alternative_phone') }}" autocomplete="alternative_phone" autofocus>
                                                                    @error('alternative_phone')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="segment_area" class="uk-form-label">
                                                                    {{ __('Area de actuação') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                <select class="uk-select" name="segment_area" id="segment_area" required autofocus>
                                                                    <option disabled selected>Seleccione a área</option>
                                                                    <option name="segment_area" value="Advogados">Advogados</option>
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
                                                                </select>
                                                                    @error('alternative_phone')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                                <label for="classification" class="uk-form-label">
                                                                    {{ __('Classificação') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <select class="uk-select" name="classification" value="{{ $company->classification ?? old('classification') }}" id="classification" required autofocus>
                                                                        <option disabled selected>Seleccione a classificação</option>
                                                                        <option value="Pequena Média">Pequena Média</option>
                                                                        <option value="Grande">Grande</option>
                                                                    </select>
                                                                    @error('classification')
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
                                                </div>
                                            </div>  
                                            
                                            
                                            </p>
                                        </div>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                            <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                            <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                    </ul>
                </div>

                <div class="uk-margin-medium-top">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" class="uk-text-capitalize">Galeria</a></li>
                        <li><a href="#" class="uk-text-capitalize">Sobre</a></li>
                        <li><a href="#" class="uk-text-capitalize">Concursos</a></li>
                    </ul>

                    <ul class="uk-switcher uk-margin">
                        <li>
                            <a class="uk-button uk-button-default" href="#modal-sections" uk-toggle>Adicionar Conteúdo</a>
                            <div id="modal-sections" uk-modal>
                                <div class="uk-modal-dialog">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-modal-header">
                                        <h4 class="uk-modal-title">adicionar imagem</h4>
                                    </div>
                                    <div class="uk-modal-body">
                                        <p>
                                        
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <form class="" action="{{route('uploadImage', $company->id)}}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                            <div class="js-upload uk-placeholder uk-text-center">
                                                            <legend class="uk-legend " for="Product Name">Fotos da vetrine</legend>
                                                            <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                                <div class="uk-margin">
                                                                        <div class="uk-width-1-1" uk-grid>
                                                                        <div class="uk-width-1-2@s">
                                                                            <input class="uk-input" name="name" type="text" placeholder="Nome">
                                                                        </div>
                                                                        <div class="uk-width-1-2@s">
                                                                            <input class="uk-input" name="price" type="text" placeholder="Preço: 299 Mts">
                                                                        </div>
                                                                        <div class="uk-width-1-1@s">
                                                                            <input class="uk-input" name="descrition" type="text" placeholder="Descrição do artigo"> 
                                                                            <!-- 2 -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span uk-icon="icon: cloud-upload"></span>
                                                                <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                                                                <div uk-form-custom>
                                                                    <!-- <input type="file" multiple> -->
                                                                    <input type="file" class="form-control input-file" name="photos[]" multiple />
                                                                    <span class="uk-link">anexar images</span>
                                                                    <div class="uk-width-1-1@s">
                                                                        <p>Imagem</p>
                                                                        <img class="uk-border-circle imagem uk-possition-center" style="width: 150px; height: 150px;" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                        <input type="submit" class="uk-button radius uk-align-right uk-button-primary" value="Guardar" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        
                                        </p>
                                    </div>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                        <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                        <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                    </div>
                                </div>
                            </div>

                                <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                                    @foreach ($image as $images)
                                    <div class="uk-card uk-grid-collapse uk-width-1-3@s uk-margin" uk-grid>
                                        <div class="uk-margin">                    
                                            <div class="radius1">


                                            <div class="uk-text-center">
                                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                <img style="width: 380px; height: 300px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
                                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                                        <p class="uk-h4 uk-margin-remove">
                                                            <ul class="uk-iconnav">
                                                                <li><a href="{{ route('empresa.editPhoto', $images->id)}}" id="{{ $images->id}}" uk-icon="icon: file-edit" data-community="{{ json_encode($images) }}"></a></li>
                                                                <!-- <li><a href="#modal-sectionsPhoto" id="{{ $images->id}}" uk-toggle uk-icon="icon: file-edit" data-community="{{ json_encode($images) }}"></a></li> -->
                                                                
                                                                    <div id="modal-sectionsPhoto" uk-modal>
                                                                        <div class="uk-modal-dialog">
                                                                            <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                            <div class="uk-modal-header">
                                                                                <h4 class="uk-modal-title">Editar imagem</h4>
                                                                            </div>
                                                                            <div class="uk-modal-body">
                                                                                <p>
                                                                                
                                                                        @if (count($errors) > 0)
                                                                            <div class="alert alert-danger">
                                                                                <ul>
                                                                                    @foreach ($errors->all() as $error)
                                                                                    <li>{{ $error }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                            @endif
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-3"></div>
                                                                                        <div class="col-md-6">
                                                                                            <form class="" action="{{route('updatephoto', $images->id)}}" action="/updatephoto/{{$images->id}}" method="post" id="editimagesForm__{{$images->id}}" enctype="multipart/form-data">
                                                                                        
                                                                                                {{ csrf_field() }}

                                                                                                    <div class="js-upload uk-placeholder uk-text-center">
                                                                                                    <legend class="uk-legend " for="Product Name">Editar imagem da montra</legend>
                                                                                                    <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                                                                        <div class="uk-margin">
                                                                                                        <div class="uk-width-1-1" uk-grid>
                                                                                                            <div class="uk-width-1-2@s">
                                                                                                                <input value="{{ $images->src }}" type="text" name="src" hidden>
                                                                                                                <input class="uk-input" name="name" type="text" value="{{ $images->name ?? old('name') }}" placeholder="Nome">
                                                                                                            </div>
                                                                                                            <div class="uk-width-1-2@s">
                                                                                                                <input class="uk-input"  name="price" type="text" value="{{ $images->price ?? old('price') }}" placeholder="Preço: 299 Mts">
                                                                                                            </div>'
                                                                                                        </div>
                                                                                                            <input class="uk-input" name="descrition" type="text" value="{{ $images->descrition ?? old('descrition') }}" placeholder="Descrição do artigo"> 
                                                                                                            <!-- 2 -->
                                                                                                        </div>
                                                                                                        <span uk-icon="icon: cloud-upload"></span>
                                                                                                        <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                                                                                                        <div uk-form-custom>
                                                                                                            <!-- <input type="file" multiple> -->
                                                                                                            <img  class="imagem" />
                                                                                                            <input type="file" class="form-control input-file" name="photos"  value="{{ $images->src ?? old('photos') }}"/>
                                                                                                            <span class="uk-link">anexar images</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                                                                <input type="submit" class="uk-button radius uk-button-primary" value="Actualizar" form="editimagesForm__{{$images->id}}" />
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>  
                                                                                
                                                                                
                                                                                </p>
                                                                            </div>
                                                                            <div class="uk-modal-footer uk-text-right">
                                                                                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                                                <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                                                                <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- <li><a href="#" uk-icon="icon: copy"></a></li> -->
                                                                
                                                                <li>
                                                                    <form action="{{ route('image.destroy', $images->id)}}" method="post">
                                                                        {{ csrf_field() }}
                                                                        @method('DELETE')
                                                                        <button type="submit" uk-icon="icon: trash"></button>     
                                                                    </form>
                                                                </li>
                                                            </ul> 

                                                            <p class="uk-margin-small-top">{{ $images->name }}</p>
                                                            <p class="uk-margin-remove uk-padding-remove uk-align-right">Descrição: {{ $images->descrition }}</p><br>
                                                            <p class="uk-margin-remove uk-padding-remove uk-align-right">Preço: {{ $images->price }}</p>
                                                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="uk-margin-small-top">{{ $images->name }}
                                                    
                                                </p>
                                            </div>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                        </li>


                        <li>

                            <p class="uk-text-left uk-margin-remove">{{ $company->about_company }} - <label
                                            class="uk-text-left uk-label uk-label-success uk-text-light">{{ $company->classification }}</label>
                            </p>
                            <p class="uk-text-left uk-text-muted">Área de actuação : <span
                                    class="uk-text-left uk-text-normal-black">{{ $company->segment_area }}</span></p>

                            <p class="uk-text-left uk-text-muted uk-margin-remove-bottom uk-heading-divider">Nossos
                                seriviços</p>
                            <p class="uk-text-left uk-margin-remove-top">{{ $company->main_services }}</p>
                            <hr>
                                <a class="uk-text-primary" href="#modal-sections3" uk-toggle>Editar os dados acima</a>
                            <hr>
                                <div id="modal-sections3" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                            <div class="uk-modal-header">
                                                <h6 class="uk-modal-title">Editar informação sobre a empresa</h6>
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
                                            <form class="" action="{{route('updatesobre', $company->id)}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Sobre a empresa</h6>
                                                    </div>

                                                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                        <label for="about_company" class="uk-form-label">
                                                            {{ __('Sobre a empresa') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <textarea class="uk-textarea @error('about_company') uk-form-danger @enderror"
                                                                id="about_company" name="about_company" required rows="2" autocomplete="about_company"
                                                                placeholder="Principais serviços fornecidos pela empresa"
                                                                autofocus>{{$company->about_company ?? old('about_company') }}</textarea>
                                                            @error('about_company')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                        <label for="main_services" class="uk-form-label">
                                                            {{ __('Principais serviços') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <textarea class="uk-textarea @error('main_services') uk-form-danger @enderror"
                                                                id="main_services" name="main_services" required rows="2" autocomplete="main_services"
                                                                placeholder="Descreva a sua empresa" autofocus>{{$company->main_services ?? old('main_services') }}</textarea>
                                                            @error('main_services')
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
                                    </div>
                                </div>
                            
                        </li>

                        <li>
                            <ul class="uk-flex-center" uk-tab>
                                <li class="uk-active"><a href="#" class="uk-text-capitalize">Ver</a></li>
                                <li><a href="#" class="uk-text-capitalize">Publicar</a></li>
                                <li><a href="#" class="uk-text-capitalize">Remover</a></li>
                            </ul>

                            <ul class="uk-switcher uk-margin">
                            <li>

                            <div class="uk-grid-small uk-card-default   uk-text-center" uk-grid>
                                    @if(!$Concurso->count())
                                         <h4>Não há novos concursos para tua área de actuação</h4>
                                    @endif
                                    <table class="uk-table uk-table-justify uk-table-divider">
                                    <!-- @if($errors->any())
                                    <h4>{{$errors->first()}}</h4>
                                    Session::has('msg')
                                    @endif -->
                                    @foreach ($Concurso as $Concursos)
                                        <thead>
                                            <tr class="uk-margin-remove uk-padding-remove">
                                                <th class="uk-width-small"></th>
                                                <th></th>
                                                <!-- <th>Endereço</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=""> 
                                                <td>
                                                {{ $Concursos->company_name }}
                                                </td>
                                                <td>
                                                    <a class="uk-link-reset uk-margin-remove uk-padding-remove" href=""><span class="uk-text-bold uk-text-secondary">{{ $Concursos->Referencia }}</span> <br><span class="uk-text-small">{{ $Concursos->Descricao }} </span> <br>{{ $Concursos->Validade }}  <p uk-margin ></p></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            
                            </li>
                            <li>
                              <h6>Deseja adquirir novos produtos ou servicos? <br>Publique aqui seu concurso e receba as melhores propostas do mercado</h6>
                               <!-- <a class="uk-text-primary" href="#modal-sections6" uk-toggle>Editar os dados acima</a> -->
                               <a class="uk-button uk-button-primary uk-button-small uk-text-capitalize" href="#modal-sections6" uk-toggle>Publicar concurso</a>
                                
                                <div id="modal-sections6" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h6>Publicar concurso</h6>
                                        </div>
                                        <div class="uk-modal-body">
                                            <p>
                                            
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                    <div class="col-md-6">
                                                        <form class="" action="{{route('createconcurso', $company->id)}}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                            <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                                <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Concurso</h6>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                <label for="company_name" class="uk-form-label">
                                                                    {{ __('Nome da empresa') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('company_name') uk-form-danger @enderror" id="company_name"
                                                                        name="company_name" type="text" value="{{ old('company_name') }}" required
                                                                        autocomplete="company_name" autofocus>
                                                                    @error('company_name')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                <label for="phone" class="uk-form-label">
                                                                    {{ __('Telefone') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('phone') uk-form-danger @enderror" id="phone" name="phone"
                                                                        type="tel" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                                                    @error('phone')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                <label for="Referencia" class="uk-form-label">
                                                                    {{ __('Referencia') }}
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('Referencia') uk-form-danger @enderror"
                                                                        id="Referencia" name="Referencia" type="tel"
                                                                        value="{{ old('Referencia') }}" autocomplete="Referencia" autofocus>
                                                                    @error('Referencia')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                <label for="segment_area" class="uk-form-label">
                                                                    {{ __('Concurso para o ramo de:') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                <select class="uk-select" name="segment_area" id="segment_area" required autofocus>
                                                                    <option disabled selected>Seleccione a área</option>
                                                                    <option name="segment_area" value="Advogados">Advogados</option>
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
                                                                </select>
                                                                    @error('alternative_phone')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s" hidden>
                                                                <label for="province" class="uk-form-label">
                                                                    {{ __('Provincia') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input name="provincia_id" class="uk-input" value="{{ $company->provincia_id  ?? $provincia->id }}" id="provincia_id">
                                                                    @error('provincia_id')
                                                                        <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s" hidden>
                                                                <label for="district" class="uk-form-label">
                                                                    {{ __('Distrito') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">

                                                                    <input class="uk-select" name="distrito_id" value="{{ $company->distrito_id ?? old('distrito_id') }}">
                                                                    @error('distrito_id')
                                                                        <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="uk-width-1-1@s uk-margin-remove-top uk-margin-bottom">
                                                                <label for="Descricao" class="uk-form-label">
                                                                    {{ __('Descrição do concurso') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <textarea class="uk-textarea @error('Descricao') uk-form-danger @enderror"
                                                                        id="Descricao" name="Descricao" required rows="2" autocomplete="Descrição"
                                                                        placeholder="Descrição do concurso"
                                                                        autofocus>{{ old('Descricao') }}</textarea>
                                                                    @error('Descricao')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                <label for="address" class="uk-form-label">
                                                                    {{ __('Endereço da empresa') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-input @error('address') uk-form-danger @enderror" id="address"
                                                                        name="address" type="text" value="{{ $company->address ?? old('address') }}" required autocomplete="address"
                                                                        placeholder="Rua, Bairro, Cidade" autofocus>
                                                                    @error('address')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                                <label for="Validade" class="uk-form-label">
                                                                    {{ __('Validade do concurso') }} <span class="uk-text-danger">*</span>
                                                                </label>
                                                                <div class="uk-form-control">
                                                                    <input class="uk-textarea @error('Validade') uk-form-danger @enderror"
                                                                        id="Validade" type="date" name="Validade" value="{{ old('Validade') }}" required autocomplete="Validade"
                                                                        placeholder="10/01/2021"
                                                                        autofocus>
                                                                    @error('Validade')
                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        
                                                            <div class="uk-margin-remove-top uk-width-1-1">

                                                                <div class="uk-form-control uk-align-right">
                                                                    <br>
                                                                    <button type="submit" class="uk-button uk-button-primary">
                                                                        {{ __('Publicar') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                            
                                            </p>
                                        </div>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                            <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                            <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-grid-small uk-card-default   uk-text-center" uk-grid>
                                    @if(!$MeuConcurso->count())
                                         <h4>Tua empresa ainda não publicou novos concursos</h4>
                                    @endif
                                    <table class="uk-table uk-table-justify uk-table-divider">
                                    <!-- @if($errors->any())
                                    <h4>{{$errors->first()}}</h4>
                                    Session::has('msg')
                                    @endif -->
                                    @foreach ($MeuConcurso as $Concurso)
                                        <thead>
                                            <tr class="uk-margin-remove uk-padding-remove">
                                                <th class="uk-width-small"></th>
                                                <th></th>
                                                <!-- <th>Endereço</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=""> 
                                            <a href="">
                                                <td>
                                                {{ $Concurso->company_name }}
                                                </td>
                                                <td>
                                                    <a class="uk-link-reset uk-margin-remove uk-padding-remove" href=""><span class="uk-text-bold uk-text-secondary">{{ $Concurso->Referencia }}</span> <br><span class="uk-text-small">{{ $Concurso->Descricao }} </span> <br>{{ $Concurso->Validade }}  <p uk-margin ></p></a>
                                                </td>
                                                <td>
                                                    <p class="uk-padding-remove uk-margin-remove" uk-margin>
                                                        <a class="uk-button uk-button-primary uk-button-small uk-text-capitalize" href="#modal-sections7" uk-toggle uk-icon="icon: file-edit"></a>
                                                        
                                
                                                            <div id="modal-sections7" uk-modal>
                                                                <div class="uk-modal-dialog">
                                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                    <div class="uk-modal-header">
                                                                        <h6>Editar concurso</h6>
                                                                    </div>
                                                                    <div class="uk-modal-body">
                                                                        <p>
                                                                        
                                                                @if (count($errors) > 0)
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    @endif
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-3"></div>
                                                                                <div class="col-md-6">
                                                                                    <form class="" action="{{route('updateconcurso', $Concurso->id)}}" method="post" enctype="multipart/form-data">
                                                                                        {{ csrf_field() }}

                                                                                        <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                                                            <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Concurso</h6>
                                                                                        </div>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                                            <label for="company_name" class="uk-form-label">
                                                                                                {{ __('Nome da empresa') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input class="uk-input @error('company_name') uk-form-danger @enderror" id="company_name"
                                                                                                    name="company_name" type="text" value="{{ $Concurso->company_name ?? old('company_name') }}" required
                                                                                                    autocomplete="company_name" autofocus>
                                                                                                @error('company_name')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                                            <label for="phone" class="uk-form-label">
                                                                                                {{ __('Telefone') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input class="uk-input @error('phone') uk-form-danger @enderror" id="phone" name="phone"
                                                                                                    type="tel" value="{{  $Concurso->phone ?? old('phone') }}" required autocomplete="phone" autofocus>
                                                                                                @error('phone')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                                            <label for="Referencia" class="uk-form-label">
                                                                                                {{ __('Referencia') }}
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input class="uk-input @error('Referencia') uk-form-danger @enderror"
                                                                                                    id="Referencia" name="Referencia" type="tel"
                                                                                                    value="{{ $Concurso->Referencia ?? old('Referencia') }}" autocomplete="Referencia" autofocus>
                                                                                                @error('Referencia')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                                            <label for="segment_area" class="uk-form-label">
                                                                                                {{ __('Concurso para o ramo de:') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                            <select class="uk-select" value="{{ $Concurso->segment_area ?? old('segment_area') }}" name="segment_area" id="segment_area" required autofocus>
                                                                                                <option disabled selected>Seleccione a área</option>
                                                                                                <option name="segment_area" value="Advogados">Advogados</option>
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
                                                                                            </select>
                                                                                                @error('alternative_phone')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s" hidden>
                                                                                            <label for="province" class="uk-form-label">
                                                                                                {{ __('Provincia') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input name="provincia_id" class="uk-input" value="{{ $Concurso->provincia_id  }}" id="provincia_id">
                                                                                                @error('provincia_id')
                                                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s" hidden>
                                                                                            <label for="district" class="uk-form-label">
                                                                                                {{ __('Distrito') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">

                                                                                                <input class="uk-select" name="distrito_id" value="{{ $Concurso->distrito_id ?? old('distrito_id') }}">
                                                                                                @error('distrito_id')
                                                                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="uk-width-1-1@s uk-margin-remove-top uk-margin-bottom">
                                                                                            <label for="Descricao" class="uk-form-label">
                                                                                                {{ __('Descrição do concurso') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <textarea class="uk-textarea @error('Descricao') uk-form-danger @enderror"
                                                                                                    id="Descricao" name="Descricao" value="{{ $Concurso->Descricao ?? old('Descricao') }}" required rows="2" autocomplete="Descrição"
                                                                                                    placeholder="Descrição do concurso"
                                                                                                    autofocus>{{ old('Descricao') }}</textarea>
                                                                                                @error('Descricao')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                                                            <label for="address" class="uk-form-label">
                                                                                                {{ __('Endereço da empresa') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input class="uk-input @error('address') uk-form-danger @enderror" id="address"
                                                                                                    name="address" type="text" value="{{ $Concurso->address ?? old('address') }}" required autocomplete="address"
                                                                                                    placeholder="Rua, Bairro, Cidade" autofocus>
                                                                                                @error('address')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                                                            <label for="Validade" class="uk-form-label">
                                                                                                {{ __('Validade do concurso') }} <span class="uk-text-danger">*</span>
                                                                                            </label>
                                                                                            <div class="uk-form-control">
                                                                                                <input class="uk-textarea @error('Validade') uk-form-danger @enderror"
                                                                                                    id="Validade" type="date" name="Validade" value="{{ $Concurso->Validade ?? old('Validade') }}" required autocomplete="Validade"
                                                                                                    placeholder="10/01/2021"
                                                                                                    autofocus>
                                                                                                @error('Validade')
                                                                                                <span class="uk-text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                    
                                                                                        <div class="uk-margin-remove-top uk-width-1-1">

                                                                                            <div class="uk-form-control uk-align-right">
                                                                                                <br>
                                                                                                <button type="submit" class="uk-button uk-button-primary">
                                                                                                    {{ __('Publicar') }}
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        
                                                                        
                                                                        </p>
                                                                    </div>
                                                                    <div class="uk-modal-footer uk-text-right">
                                                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                                        <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                                                        <input type="submit" class="uk-button uk-button-primary" value="Upload" />-->
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        <!-- <a class="uk-button  uk-button-danger uk-button-small uk-text-capitalize" href=""> -->
                                                        <form action="{{ route('concurso.destroy', $Concurso->id)}}" method="post">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                            <button class="uk-button  uk-button-danger uk-button-small uk-text-capitalize" type="submit" uk-icon="icon: trash"></button>     
                                                        </form>
                                                        <!-- </a> -->
                                                    </p>
                                                </td>
                                            
                                                </a>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            
                            </li>
                            <li>Remover tua publicacao</li>
                            </ul>
                            <!-- <h4>Contactos do Beconnected para Suporte:</h4>
                            <p><span class="uk-margin-small-right" uk-icon="icon: receiver;"></span>Tel:+258 840442932</p>
                            <p><span class="uk-margin-small-right" uk-icon="icon: mail;"></span>E-email: BeconnectedTeamLeader@gmail.com</p>
                            <p><span class="uk-margin-small-right" uk-icon="icon: whatsapp;"></span>WhatsAap: +258040442932</p>
                            <p><span class="uk-margin-small-right" uk-icon="icon: facebook;"></span>www.Facebook.com/Beconnected</p>
                            <p><span class="uk-margin-small-right" uk-icon="icon: instagram;"></span>www.Instagram.com/Beconnected</p> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        </li>

        <li>
            <div class="uk-width-1-2@m">
                <div class="uk-overflow-auto ">
                    <table class="uk-table uk-table-hover uk-table-small uk-table-middle  ">
                            @if($users->count())
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                    <td>
                                    <a href="" class="uk-icon-button uk-label-default " uk-icon="user"></a>
                                    </td>
                                    <td class="uk-table-link  uk-list-divider">
                                        <a class="uk-link-reset" href="{{ route('message.conversation', $user->id )}}">
                                        <!-- <a href="{{ route('message.show', $user->id )}}"> -->
                                            <!-- <div class="chat-image">
                                                <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                            </div> -->
                                            {{ $user->name}}
                                        </a>
                                        <!-- <a class="uk-link-reset" href="">{{ $user->name}}</a> -->
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </li>
        <li>
        <p class="uk-padding-remove uk-margin-remove" uk-margin>
            <a class="uk-button uk-button-primary uk-button-small uk-text-capitalize" href="#modal-sections5" uk-toggle>Editar conta</a>
            <button class="uk-button uk-button-default uk-button-small uk-text-capitalize" disabled>FAQ</button>
            <a class="uk-button  uk-button-danger uk-button-small uk-text-capitalize" href="">Remover</a>
        </p>

 <!--        <a class="uk-text-primary" href="#modal-sections2" uk-toggle>Editar os dados acima</a> -->
            <div id="modal-sections5" uk-modal>
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
            </a>
        </li>
    </ul>
</div>
<!-- 
<div class="uk-section uk-padding-remove uk-section-small uk-section-muted">
    <div class="uk-text-center uk-padding" uk-grid>
        <div class="uk-width-1-5@m">
             <div class="uk-card  uk-card-body uk-padding-remove uk-float-left">
            @if ($company->logo)
            <!-- uk-position-top-center uk-overlay uk-overlay-default uk-box-shadow-xlarge ->
                <div class="uk-card-defaultt uk-inline " style="margin-left: 30px;" >
                <img class="uk-border-circle uk-image-possition" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />    
                    <div class="uk-position-bottom-right uk-label-warning uk-border-circle  uk-overlay uk-overlay-default"><a class="uk-icon-button uk-label-warning " uk-icon="file-edit" href="#modal-sections0" uk-toggle> </a></div>
                </div>
                <div id="modal-sections0" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h6 class="uk-modal-title">Editar perfil</h6>
                        </div>
                        <div class="uk-modal-body">
                            <p>
                            
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form class="" action="{{route('updatelogo', $company->id)}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('PUT')
                                            @csrf
                                                <div class="js-upload uk-placeholder uk-text-center">
                                                <legend class="uk-legend " for="Product Name">logo</legend>
                                                <!-- <label for="Product Name">Product photos (can attach more than one):</label> ->
                                                    <div class="uk-margin">
                                                    <div class="uk-width-1-1" uk-grid>
                                                        <div class="uk-width-1-2@s">
                                                            <p>Logo actual</p>
                                                        <img class="uk-border-circle imagens uk-possition-center" style="width: 150px; height: 150px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />
                                                        </div>
                                                        <!-- <div class="uk-width-1-2@s">
                                                            <p>Novo logo</p>
                                                        <img  class=" uk-border-circle imagem" style="width: 150px; height: 150px;" />
                                                        </div> ->
                                                    </div>
                                                    </div>
                                                    <span uk-icon="icon: cloud-upload"></span>
                                                    <span class="uk-text-middle">Anexe a nova imagem soltando-a aqui</span>
                                                    <div uk-form-custom>
                                                        <!-- <input type="file" multiple> ->
                                                        <input type="file" required name="logo" accept="image/*">
                                                        <span class="uk-link">nova imagem</span>
                                                    </div>
                                                </div>
                                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                            <input type="submit" class="uk-button radius uk-button-primary" value="Upload" />
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            
                            
                            </p>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                            <input type="submit" class="uk-button uk-button-primary" value="Upload" />->
                        </div>
                    </div>
                </div>
            @else
                
            <img class="uk-border-circle" src="https://getuikit.com/docs/image/avatar.jpg"
                    style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
            @endif

                {{-- Location  --}}
                <div class="uk-margin-small-top">
                <!-- <a class="uk-button uk-text-left uk-button-primary" href="{{ route('company.edit', $company->id) }}" uk-toggle>Editar</a> ->
                    <p class="uk-heading-line uk-text-left uk-text-small"><span><h4 class="uk-text-bolder uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h4></span></p>
                    <p class="uk-text-primary uk-text-small uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                        {{ $company->phone}}</p>
                    <p class="uk-text-bolder uk-text-left uk-margin-remove-bottom">{{ $company->user->email?? 'N/A' }} &nbsp</p>
                    <p class="uk-text-left uk-text-muted uk-margin-remove-bottom">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-top">{{ $company->district }}
                        {{ $company->province }} </p>
                        <a class="uk-text-primary" href="#modal-sections2" uk-toggle>Editar os dados acima</a>
    
                <div id="modal-sections2" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-header">
                            <h6 class="uk-modal-title">Editar dados</h6>
                        </div>
                        <div class="uk-modal-body">
                            <p>
                            
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form class="" action="{{route('updatedados', $company->id)}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            

                                            <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Dados
                                                    da empresa</h6>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-2@s">
                                                <label for="company_name" class="uk-form-label">
                                                    {{ __('Nome da empresa') }} <span class="uk-text-danger">*</span>
                                                </label>
                                                <div class="uk-form-control">
                                                    <input class="uk-input @error('company_name') uk-form-danger @enderror" id="company_name"
                                                        name="company_name" type="text" value="{{ $company->company_name ?? old('company_name') }}" required
                                                        autocomplete="company_name" autofocus>
                                                    @error('company_name')
                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                <label for="address" class="uk-form-label">
                                                    {{ __('Endereço da empresa') }} <span class="uk-text-danger">*</span>
                                                </label>
                                                <div class="uk-form-control">
                                                    <input class="uk-input @error('address') uk-form-danger @enderror" id="address"
                                                        name="address" type="text" value="{{ $company->address ?? old('address') }}" required autocomplete="address"
                                                        placeholder="Rua, Bairro, Cidade" autofocus>
                                                    @error('address')
                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                <label for="phone" class="uk-form-label">
                                                    {{ __('Telefone') }} <span class="uk-text-danger">*</span>
                                                </label>
                                                <div class="uk-form-control">
                                                    <input class="uk-input @error('phone') uk-form-danger @enderror" id="phone" name="phone"
                                                        type="tel" value="{{ $company->phone ?? old('phone') }}" required autocomplete="phone" autofocus>
                                                    @error('phone')
                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                <label for="alternative_phone" class="uk-form-label">
                                                    {{ __('Telefone alternativo') }}
                                                </label>
                                                <div class="uk-form-control">
                                                    <input class="uk-input @error('alternative_phone') uk-form-danger @enderror"
                                                        id="alternative_phone" name="alternative_phone" type="tel"
                                                        value="{{ $company->alternative_phone ?? old('alternative_phone') }}" autocomplete="alternative_phone" autofocus>
                                                    @error('alternative_phone')
                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                <label for="segment_area" class="uk-form-label">
                                                    {{ __('Area de actuação') }} <span class="uk-text-danger">*</span>
                                                </label>
                                                <div class="uk-form-control">
                                                    <select class="uk-select" name="segment_area" value="{{ $company->segment_area ?? old('segment_area') }}" id="segment_area" required autofocus>
                                                        <option disabled selected>Seleccione a área</option>
                                                        <option name="" value="">Voce esta em busca de?</option>
                                                        <option name="segment_area" value="Clinica">Clinica</option>
                                                        <option name="segment_area" value="Farmacia">Farmacia</option>
                                                        <option name="segment_area" value="Doces de salgados">Doces e salgados</option>
                                                        <option name="segment_area" value="Servicos de Cuntring">Servicos de Catring</option>
                                                        <option name="segment_area" value="Consultoria de advogacia">Consultoria de advogacia</option>
                                                        <option name="segment_area" value="Consultoria de Contabilidade">Consultoria de Contabilidade</option>
                                                        <option name="segment_area" value="Consultoria de Agronegocio">Consultoria de Agronegocio</option>
                                                        <option name="segment_area" value="Aluminio e vidro">Aluminio e vidro</option>
                                                        <option name="segment_area" value="loja de Roupa Femenina">loja de Roupa Femenina</option>
                                                        <option name="segment_area" value="loja de Roupa Masculina">loja de Roupa Masculina</option>
                                                        <option name="segment_area" value="loja de Roupa M/F">loja de Roupa M/F</option>
                                                        <option name="segment_area" value="loja de Calcado Femenino">loja de Calcado Femenino</option>
                                                        <option name="segment_area" value="loja de Calcado Masculino">loja de Calcado Masculino</option>
                                                        <option name="segment_area" value="loja de Calcado M/F">loja de Calcado M/F</option>
                                                        <option name="segment_area" value="Salao de cabelo Femenino">Salao de cabelo Femenino</option>
                                                        <option name="segment_area" value="Salao de cabelo Masculino">Salao de cabelo Masculino</option>
                                                        <option name="segment_area" value="Hotel">Hotel</option>
                                                        <option name="segment_area" value="Pensao">Pensao</option>
                                                        <option name="segment_area" value="Construção Civil">Construção Civil</option>
                                                        <option name="segment_area" value="Doces de salgados">Doces de salgados</option>
                                                        <option name="segment_area" value="Transporte">Transporte</option>
                                                        <option name="segment_area" value="Oficina">Oficina</option>
                                                        <option name="segment_area" value="Micro Banco">Micro Banco</option>
                                                        <option name="segment_area" value="Agricola">Agro Negocio</option>
                                                        <option name="segment_area" value="Pecuaria">Pecuaria</option>
                                                        <option name="segment_area" value="Ferragem">Ferragem</option>
                                                        <option name="segment_area" value="Borracharia">Borracharia</option>
                                                        <option name="segment_area" value="Agencia de viagem">Agencia de viagem</option>
                                                        <option name="segment_area" value="Restaurante">Restaurante</option>
                                                        <option name="segment_area" value="Ornamentação de Eventos">Ornamentação de Eventos</option>
                                                        <option name="segment_area" value="Moda">Moda</option>
                                                        <option name="segment_area" value="Botique">Botique</option>
                                                        <option value="Comercial">Comercial</option>
                                                    </select>
                                                    @error('alternative_phone')
                                                    <span class="uk-text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                                                <label for="classification" class="uk-form-label">
                                                    {{ __('Classificação') }} <span class="uk-text-danger">*</span>
                                                </label>
                                                <div class="uk-form-control">
                                                    <select class="uk-select" name="classification" value="{{ $company->classification ?? old('classification') }}" id="classification" required autofocus>
                                                        <option disabled selected>Seleccione a classificação</option>
                                                        <option value="Pequena Média">Pequena Média</option>
                                                        <option value="Grande">Grande</option>
                                                    </select>
                                                    @error('classification')
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
                                </div>
                            </div>  
                            
                            
                            </p>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                            <input type="submit" class="uk-button uk-button-primary" value="Upload" />->
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class=" uk-padding-remove-top">
                <div uk-grid>
                <!-- <h6 class="uk-text-bolder uk-hidden@s uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h6> ->
                    
                    <p
                        class="uk-text-primary uk-text-small uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                        {{ $company->segment_area}}</p>
                    <div class="uk-align-left uk-width-1-1@m uk-margin-remove-bottom uk-margin-remove-top">
                        <p class="uk-text-left uk-text-muted">
                            Classificação dos clientes
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                    </div>
                </div>
                <p class="uk-heading-line uk-text-left uk-text-small"><span></span></p>
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                <li><a href="#">Gerir conteúdos</a></li>
                <li><a href="#">Contactos</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Meus clientes</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                <li>
                <a class="uk-button uk-button-primary" href="#modal-sections" uk-toggle>Adicionar Conteúdo</a>

                    <div id="modal-sections" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h4 class="uk-modal-title">Upload de images</h4>
                            </div>
                            <div class="uk-modal-body">
                                <p>
                                
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <form class="" action="{{route('uploadImage', $company->id)}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="js-upload uk-placeholder uk-text-center">
                                                    <legend class="uk-legend " for="Product Name">Fotos da vetrine</legend>
                                                    <!-- <label for="Product Name">Product photos (can attach more than one):</label> ->
                                                        <div class="uk-margin">
                                                                <div class="uk-width-1-1" uk-grid>
                                                                <div class="uk-width-1-2@s">
                                                                    <input class="uk-input" name="name" type="text" placeholder="Nome">
                                                                </div>
                                                                <div class="uk-width-1-2@s">
                                                                    <input class="uk-input" name="price" type="text" placeholder="Preço: 299 Mts">
                                                                </div>
                                                                <div class="uk-width-1-1@s">
                                                                    <input class="uk-input" name="descrition" type="text" placeholder="Descrição do artigo"> 
                                                                    <!-- 2 ->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span uk-icon="icon: cloud-upload"></span>
                                                        <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                                                        <div uk-form-custom>
                                                            <!-- <input type="file" multiple> ->
                                                            <input type="file" class="form-control input-file" name="photos[]" multiple />
                                                            <span class="uk-link">anexar images</span>
                                                            <div class="uk-width-1-1@s">
                                                                <p>Imagem por adicionar</p>
                                                                <img class="uk-border-circle imagem uk-possition-center" style="width: 150px; height: 150px;" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                <input type="submit" class="uk-button radius uk-button-primary" value="Upload" />
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                                
                                
                                </p>
                            </div>
                            <div class="uk-modal-footer uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                <input type="submit" class="uk-button uk-button-primary" value="Upload" />->
                            </div>
                        </div>
                    </div>
                    
                        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                            @foreach ($image as $images)
                            <div class="uk-card uk-card-default uk-padding-remove uk-grid-collapse uk-width-1-3@s uk-margin" uk-grid>
                                <div class="uk-margin-remove-left">                    
                                    <div class="radius1">


                                    <div class="uk-text-center">
                                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img style="width: 280px; height: 250px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
                                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                                <p class="uk-h4 uk-margin-remove">
                                                    <ul class="uk-iconnav">
                                                        <li><a href="{{ route('empresa.editPhoto', $images->id)}}" id="{{ $images->id}}" uk-icon="icon: file-edit" data-community="{{ json_encode($images) }}"></a></li>
                                                        <!-- <li><a href="#modal-sectionsPhoto" id="{{ $images->id}}" uk-toggle uk-icon="icon: file-edit" data-community="{{ json_encode($images) }}"></a></li> ->
                                                        
                                                            <div id="modal-sectionsPhoto" uk-modal>
                                                                <div class="uk-modal-dialog">
                                                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                    <div class="uk-modal-header">
                                                                        <h4 class="uk-modal-title">Editar imagem</h4>
                                                                    </div>
                                                                    <div class="uk-modal-body">
                                                                        <p>
                                                                        
                                                                @if (count($errors) > 0)
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    @endif
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-3"></div>
                                                                                <div class="col-md-6">
                                                                                    <form class="" action="{{route('updatephoto', $images->id)}}" action="/updatephoto/{{$images->id}}" method="post" id="editimagesForm__{{$images->id}}" enctype="multipart/form-data">
                                                                                   
                                                                                        {{ csrf_field() }}

                                                                                            <div class="js-upload uk-placeholder uk-text-center">
                                                                                            <legend class="uk-legend " for="Product Name">Editar imagem da montra</legend>
                                                                                            <!-- <label for="Product Name">Product photos (can attach more than one):</label> ->
                                                                                                <div class="uk-margin">
                                                                                                <div class="uk-width-1-1" uk-grid>
                                                                                                    <div class="uk-width-1-2@s">
                                                                                                        <input value="{{ $images->src }}" type="text" name="src" hidden>
                                                                                                        <input class="uk-input" name="name" type="text" value="{{ $images->name ?? old('name') }}" placeholder="Nome">
                                                                                                    </div>
                                                                                                    <div class="uk-width-1-2@s">
                                                                                                        <input class="uk-input"  name="price" type="text" value="{{ $images->price ?? old('price') }}" placeholder="Preço: 299 Mts">
                                                                                                    </div>'
                                                                                                </div>
                                                                                                    <input class="uk-input" name="descrition" type="text" value="{{ $images->descrition ?? old('descrition') }}" placeholder="Descrição do artigo"> 
                                                                                                    <!-- 2 ->
                                                                                                </div>
                                                                                                <span uk-icon="icon: cloud-upload"></span>
                                                                                                <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                                                                                                <div uk-form-custom>
                                                                                                    <!-- <input type="file" multiple> ->
                                                                                                    <img  class="imagem" />
                                                                                                    <input type="file" class="form-control input-file" name="photos"  value="{{ $images->src ?? old('photos') }}"/>
                                                                                                    <span class="uk-link">anexar images</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                                                        <input type="submit" class="uk-button radius uk-button-primary" value="Upload" form="editimagesForm__{{$images->id}}" />
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        
                                                                        
                                                                        </p>
                                                                    </div>
                                                                    <div class="uk-modal-footer uk-text-right">
                                                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                                        <!-- <button class="uk-button uk-button-primary" type="button">Save</button> ->
                                                                        <input type="submit" class="uk-button uk-button-primary" value="Upload" />->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- <li><a href="#" uk-icon="icon: copy"></a></li> ->
                                                        <li>
                                                            <form action="{{ route('image.destroy', $images->id)}}" method="post">
                                                                {{ csrf_field() }}
                                                                @method('DELETE')
                                                                <button type="submit" uk-icon="icon: trash"></button>     
                                                            </form>
                                                        </li>
                                                    </ul> 
                                                </p>
                                            </div>
                                        </div>
                                        <p class="uk-margin-small-top">{{ $images->name }}
                                            <!--<p class="uk-margin-remove uk-align-right"><label
                                                    class="uk-label uk-label-success uk-text-small">{{ $company->segment_area }}
                                                </label>
                                            </p>
                                            <p class="uk-margin-remove uk-align-right"><label
                                                    class="uk-label uk-label-danger uk-text-small">{{ $company->province .' | '. $company->district }}
                                                </label>
                                            </p> ->
                                        </p>
                                    </div>
                                    



                                    
                                            
                                    </div>
                                </div>
                                <!-- <div class="uk-width-1-1@m">
                                    <div class="uk-card-body uk-padding-small">
                                        <h5 class="uk-margin-remove uk-margin-bottom uk-text-left">{{ $images->name }}</h5>
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
                                </div> ->
                            </div>
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <p class="uk-text-left uk-text-muted">Principal : <span
                                class="uk-text-left uk-text-normal-black">{{ $company->phone?? 'N/A' }}</span></p>
                        <p class="uk-text-left uk-text-muted">Alternativo : <span
                                class="uk-text-left uk-text-normal-black">{{ $company->alternative_phone?? 'N/A' }}</span>
                        </p>
                        <p class="uk-text-left uk-text-muted">E-mail : <span
                                class="uk-text-left uk-text-normal-black">{{ $company->user->email?? 'N/A' }}</span></p>

                    </li>
                    <li>
                        <p class="uk-text-left uk-margin-remove">{{ $company->about_company }} - <label
                                class="uk-text-left uk-label uk-label-success uk-text-light">{{ $company->classification }}</label>
                        </p>
                        <p class="uk-text-left uk-text-muted">Área de actuação : <span
                                class="uk-text-left uk-text-normal-black">{{ $company->segment_area }}</span></p>

                        <p class="uk-text-left uk-text-muted uk-margin-remove-bottom uk-heading-divider">Nossos
                            seriviços</p>
                        <p class="uk-text-left uk-margin-remove-top">{{ $company->main_services }}</p>

                        <a class="uk-text-primary" href="#modal-sections3" uk-toggle>Editar os dados acima</a>
    
                        <div id="modal-sections3" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-modal-header">
                                    <h6 class="uk-modal-title">Editar informação sobre a empresa</h6>
                                </div>
                                <div class="uk-modal-body">
                                    <p>
                                    
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <form class="" action="{{route('updatesobre', $company->id)}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    

                                                    <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                                                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                                                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Sobre a empresa</h6>
                                                    </div>


                                                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                        <label for="about_company" class="uk-form-label">
                                                            {{ __('Sobre a empresa') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <textarea class="uk-textarea @error('about_company') uk-form-danger @enderror"
                                                                id="about_company" name="about_company" required rows="2" autocomplete="about_company"
                                                                placeholder="Principais serviços fornecidos pela empresa"
                                                                autofocus>{{$company->about_company ?? old('about_company') }}</textarea>
                                                            @error('about_company')
                                                            <span class="uk-text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                                                        <label for="main_services" class="uk-form-label">
                                                            {{ __('Principais serviços') }} <span class="uk-text-danger">*</span>
                                                        </label>
                                                        <div class="uk-form-control">
                                                            <textarea class="uk-textarea @error('main_services') uk-form-danger @enderror"
                                                                id="main_services" name="main_services" required rows="2" autocomplete="main_services"
                                                                placeholder="Descreva a sua empresa" autofocus>{{$company->main_services ?? old('main_services') }}</textarea>
                                                            @error('main_services')
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
                                        </div>
                                    </div>  


                    </li>
                        <li>
                        <div class="uk-width-1-1@m">
                            <div class="uk-overflow-auto ">
                                <table class="uk-table uk-table-middle  ">                   
                                    <tbody class="list-group list-chat-item">
                                            @if($users->count())
                                                @foreach($users as $user)
                                                <tr class="uk-inline ">
                                                    <td><!-- <img class="uk-preserve-width uk-border-circle" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" width="40" alt=""> ->
                                                        <a href="" class="uk-icon-button uk-label-success " uk-icon="user"></a>
                                                    </td>
                                                    <td class="uk-table-link chat-user-list">
                                                        <a class="uk-link-reset" href="{{ route('message.conversation', $user->id )}}">
                                                            <div class="chat-image">
                                                                <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                                            </div>

                                                            </div class="chat-name">
                                                                {{ $user->name}}
                                                            </div>
                                                        </a>
                                                        <!-- <a class="uk-link-reset" href="">{{ $user->name}}</a> ->
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        @endif
                                </table>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div> -->

<script>

const $ = document.querySelector.bind(document);
const previewImg = $('.imagem');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(fileToUpload);
};
</script>

<script>

const $ = document.querySelector.bind(document);
const previewImg = $('.imagens');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(fileToUpload);
};
</script>



<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>
    $(document).ready(function () {
            $('#provincia_id').on('change', function () {
            let id = $(this).val();
            $('#distito').empty();
            $('#distito').append(`<option value="0" disabled selected>Aguarde...</option>`);
            $.ajax({
            type: 'GET',
            url: '/distrito/' + id+'/provincia',
            success: function (response) {
            var response = JSON.parse(response);
            $('#distito').empty();
            $('#distito').append(`<option value="0" disabled selected>Seleccione o distrito</option>`);
            response.forEach(element => {
                $('#distito').append(`<option value="${element['id']}">${element['nome']}</option>`);
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