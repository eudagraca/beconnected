@extends('layouts.app')
@section('content')


<div class="">
    <ul class="uk-padding uk-padding-remove-bottom uk-text-lowercase uk-width-expand@m uk-inline"  uk-tab data-src="../storage/empresas/unnamed.png" uk-img>
    <li class=" uk-position-top-left "><a class="uk-link-reset uk-text-lowercase" href="{{ route('user.profile') }}" ><span uk-icon="icon:  home;"></span></a></li>    
    <li class="uk-position-top-center uk-padding-remove-right"><a class="uk-link-reset uk-text-lowercase"  href="#">Convesras</a></li>
        <li class="uk-position-top-right"><a class="uk-link-reset uk-text-lowercase" href="#" uk-icon="more-vertical"></a></li>
    </ul>

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
                                                                <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                                    <div class="uk-margin">
                                                                    <div class="uk-width-1-1" uk-grid>
                                                                        <div class="uk-width-1-2@s">
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
                                                            <input type="submit" class="uk-button radius uk-button-primary" value="Actualizar" />
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
                            </div>
                            @else
                                
                            <img class="uk-border-circle" src="https://getuikit.com/docs/image/avatar.jpg"
                                    style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
                            @endif
                                
                            <li><a href="#">{{ $company->company_name }}
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
                        <li class="uk-active"><a href="#">Galeria</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Conversas</a></li>
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
                                                <img style="width: 380px; height: 250px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
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
            <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-alert-success uk-card-body">Ver conversa</div>
                </div>
                <div>
                    <div class="uk-card uk-alert-warning uk-card-body">Iniciar conversa</div>
                </div>

                <div>
                    <div class="uk-card uk-alert-danger uk-card-body">Voltar a empresa</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                    <!-- <a href="" class="uk-icon-button uk-button-primary uk-margin-small-right" uk-icon="twitter"></a> -->
                    <a href="" class="uk-icon-button uk-button-primary  uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="whatsapp"></a>
                    <a href="" class="uk-icon-button uk-button-default" uk-icon="google-plus"></a>    
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
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