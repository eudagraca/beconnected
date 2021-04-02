@extends('layouts.app')
@section('content')
<!-- <div class="uk-section uk-section-small uk-margin-remove-top uk-padding-remove uk-section-muted"> -->
 <!--<div class="uk-position-relative radius2 uk-margin-remove-top uk-cover-container uk-container uk-visible-toggle" tabindex="-1" uk-slideshow="min-height: 300; max-height: 300; animation: push">
    <ul class="uk-slideshow-items">
        <li>
            @if ($company->logo) 
                <img class="radius2" style="height: 100px;" autoplay loop muted playsinline uk-cover sizes="(min-width: 650px) 650px, 100vw" uk-img data-src="{{ url("storage/{$company->banner}") }}" alt="" uk-cover uk-img="target: !ul > :last-child, !* +*">
            @else
                <img width="1800" height="200" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
            @endif
            <div class=" uk-position-top-left uk-position-small">
            <!-- <p class="uk-text-bolder uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}</p> ->
                 
                    <div class="uk-align-left uk-width-1-1@m uk-margin-remove-bottom uk-margin-remove uk-margin-remove-top">
                        <p class="uk-text-left uk-text-muted">
                            Classificação dos clientes
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                    </div>
            </div>
        </li>
        <li>
            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay loop muted playsinline uk-cover></video>
        </li>
        <li>
            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-cover></iframe>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div> -->

<div class="uk-container">
    <div class="uk-section uk-section-small uk-tile-default">
        <div class="uk-margin-remove uk-padding-remove">
            <ul class="uk-margin-remove uk-padding-remove uk-flex-center " uk-tab>
                
                    @if ($company->logo) 
                        <!-- <a class="uk-button "  href="{{ url("storage/{$company->logo}") }}" data-caption="{{ $company->company_name}}"> 
                            <img class="uk-border-circle" style="width: 100px; height: 100px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />   
                        </a> -->
                        <a class="uk-button "  href="{{ url("storage/{$company->logo}") }}" data-caption="{{ $company->company_name}}"> 
                            <div class="uk-card-defaultt uk-padding-remove uk-margin-remove uk-padding-remove-botton" style=" align-items: center;">
                                <img class="uk-border-circle uk-image-possition" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />
                            </div>
                        </a>
                        @else
                        <img class="uk-border-circle uk-image-possition" src="https://getuikit.com/docs/image/avatar.jpg"
                                style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
                    @endif

                    <li>
                    <p class="uk-heading-line uk-text-small"><span><h4 class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h4></span></p>
                    <p class=" uk-text-small uk-text-muted uk-padding-remove uk-margin-remove uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                        {{ $company->phone}}</p>
                    <p class="uk-text-bolder uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->user->email?? 'N/A' }} &nbsp</p>
                    <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->district }}
                        {{ $company->province }} </p><br>
                    <ul class=" uk-flex-center uk-padding-remove uk-margin-remove" >
                        <a class="uk-icon-button uk-button-default" type="button" uk-icon="commenting" uk-toggle="target: #offcanvas-flip"></a>
                        <a href="https://www.facebook.com/" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                        <a href="https://api.whatsapp.com/send?phone=258{{ $company->phone}}" class="uk-icon-button uk-margin-small-right" uk-icon="whatsapp"></a>
                        <a href="" class="uk-icon-button uk-button-default " uk-icon="world"></a>    
                    </ul>

                    </li>
                 <br>   
            </ul>
        </div>

        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#">Galeria</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Denuncie</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                    @foreach ($image as $images)
                    <div class="uk-card uk-grid-match uk-padding-remove uk-grid-collapse uk-width-1-3@s uk-margin" uk-grid uk-lightbox="animation: slide">
                        <div class="uk-margin-remove-left">                    
                            <div class="radius1">
                                <div uk-lightbox>

                                <div class="uk-text-center">
                                    <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
                                        <a class="uk-button"  href="{{ url("storage/{$images->src}") }}" data-caption="{{ $images->name}}" data-caption="{{ $images->descrition}}"> 
                                            <img style="width: 380px; height: 250px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
                                        </a>
                                        <div class="uk-position-center">
                                            <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m">
                            <div class="uk-card-body uk-padding-small">
                            <ul class=" uk-align-right uk-padding-remove uk-margin-remove" >
                                <a class="uk-icon-button uk-button-default" type="button" uk-icon="star" uk-toggle="target: #offcanvas-flip"></a>
                                <a href="#" class="uk-icon-button  uk-margin-small-right"  uk-icon="happy" ></a>
                                <a href="#" class="uk-icon-button uk-label-danger uk-margin-small-right" uk-icon="heart"></a>
                            </ul>
                            <p class="uk-margin-small-top">{{ $images->name }}</p>
                                <p class="uk-margin-remove uk-align-right"><label
                                        class="uk-label uk-label-success uk-text-small">{{ $images->price }}
                                    </label>
                                </p>
                                <p class="uk-margin-remove uk-align-right"><label
                                        class="uk-label uk-label-danger uk-text-small">{{ $company->province .' | '. $company->district }}
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </li>


                <li>
                <div class="uk-slider-container-offset" uk-slider>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="images/photo.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-bold">
                                            {{ $company->company_name}}</h3>
                                            <p>{{ $company->about_company }}</p>                                                
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="images/dark.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-bold">{{ $company->segment_area}}</h3>
                                        <p>{{ $company->main_services }}</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="images/photo.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-bold">
                                            {{ $company->company_name}}</h3>
                                            <p>{{ $company->about_company }}</p>  
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="images/dark.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-bold">{{ $company->segment_area}}</h3>
                                        <p>{{ $company->main_services }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>

                </li>

                <li>

                <form>
                    <fieldset class="uk-fieldset">

                        <p class="uk-text-left">Caro usuário, para o procedimento de denúncia, queira por favor
                            preencher o formulário a seguir</p>

                        <div class="uk-margin">
                            <input class="uk-input" name="motivation" type="text" placeholder="Motivo">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5"
                                placeholder="Descrição do ocorrido"></textarea>
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-secondary uk-align-right"
                                type="button">Submeter</button>
                        </div>
                    </fieldset>
                </form>


                </li>
            </ul>
        </div>

    </div>
</div>




<!-- 
<div class="uk-section uk-padding-remove uk-section-small uk-tile-default uk-section-muted">
    <div class="uk-text-center uk-padding" uk-grid>
        <div class="uk-width-1-5@m">
             <div class="uk-card uk-card-body uk-padding-remove uk-margin-remove uk-float-left">
                 
                    @if ($company->logo) 
                    <div uk-lightbox>
                        <a class="uk-button "  href="{{ url("storage/{$company->logo}") }}" data-caption="{{ $company->company_name}}"> 
                            <div class="uk-card-defaultt uk-padding-remove uk-margin-remove uk-padding-remove-botton" style=" align-items: center;">
                                <img class="uk-border-circle uk-image-possition" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />
                            </div>
                        </a>
                    </div>
                        @else
                        
                    <img class="uk-border-circle uk-image-possition" src="https://getuikit.com/docs/image/avatar.jpg"
                            style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
                    @endif

                {{-- Location  --}}
                <div class="uk-margin-small-top">
                    <p class="uk-heading-line uk-text-left uk-padding-remove uk-margin-remove uk-text-small"><span><h4 class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h4></span></p>
                    <p class=" uk-text-small uk-text-muted uk-padding-remove uk-margin-remove uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                        {{ $company->phone}}</p>
                    <p class="uk-text-bolder uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->user->email?? 'N/A' }} &nbsp</p>
                    <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">{{ $company->district }}
                        {{ $company->province }} </p>
                </div>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class=" uk-padding-remove-top"> -->
                <!-- <div uk-grid> -->

                
                <!-- <h6 class="uk-text-bolder uk-hidden@s uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h6> -->
<!--                     
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
                </div> -->
<!--                 <div class="uk-card uk-padding-remove uk-card-body">
                        <a class="uk-icon-button uk-button-default uk-label-success" type="button" uk-icon="commenting" uk-toggle="target: #offcanvas-flip"></a>
                        <a href="https://www.facebook.com/" class="uk-icon-button uk-button-primary uk-margin-small-right" uk-icon="facebook"></a>
                        <a href="https://api.whatsapp.com/send?phone=258{{ $company->phone}}" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="whatsapp"></a>
                        <a href="" class="uk-icon-button uk-button-default " uk-icon="world"></a>    
                    </div-->
                    <div id="offcanvas-flip" class="uk-card-dafault" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar uk-padding-remove" data-src="../storage/company/unnamed.png" uk-img>
                            <button class="uk-offcanvas-close" type="button" uk-close></button>
                            <ul class="uk-padding uk-padding-remove-bottom uk-text-lowercase uk-width-expand@m uk-inline uk-dark"  uk-tab>
                                <li class="uk-position-top-left"><a class="uk-link-reset uk-text-lowercase uk-dark"  href="#">Convesras</a></li>
                                <li class="uk-position-top-right"><a class="uk-link-reset uk-text-lowercase uk-dark" href="#" uk-icon="more-vertical"></a></li>
                            </ul>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                    <div class="uk-width-1-1@m">
                                        <div class="uk-overflow-auto ">
                                            <table class="uk-table uk-table-small uk-table-middle  ">                   
                                                <tbody>
                                                    <tr class="uk-inline">
                                                        <td>
                                                            <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="user"></a></td>
                                                        <td>
                                                            <a class="uk-link-reset uk-light" href="{{ route('message.conversation', $company->user_id )}}">
                                                                {{ $company->company_name}} <span class="uk-light">
                                                                 <br> Ola! Envie tua messagem?</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                        @if($users->count())
                                                            @foreach($users as $user)
                                                            <tr class="uk-inline">
                                                                <td><!-- <img class="uk-preserve-width uk-border-circle" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" width="40" alt=""> -->
                                                                <!-- <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="user"></a> ->
                                                                </td>
                                                                <td class="uk-table-link uk-light  uk-list-divider">
                                                                    <a class="uk-link-reset uk-light" href="{{ route('message.conversation', $user->id )}}">
                                                                    <!-- <a href="{{ route('message.show', $user->id )}}"> -->
                                                                        <!-- <div class="chat-image">
                                                                            <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                                                        </div> -->
                                                                       <!--  {{ $user->name}} ->
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
                <!--p class="uk-heading-line uk-text-left uk-text-small"><span></span></p>
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contactos</a></li>
                <li><a href="#">Denuncie</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                <li>
                    
                        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                            @foreach ($image as $images)
                            <div class="uk-card uk-grid-match uk-padding-remove uk-grid-collapse uk-width-1-3@s uk-margin" uk-grid uk-lightbox="animation: slide">
                                <div class="uk-margin-remove-left">                    
                                    <div class="radius1">
                                        <div uk-lightbox>

                                        <div class="uk-text-center">
                                            <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
                                                <a class="uk-button"  href="{{ url("storage/{$images->src}") }}" data-caption="{{ $images->name}}" data-caption="{{ $images->descrition}}"> 
                                                    <img style="width: 380px; height: 250px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
                                                </a>
                                                <div class="uk-position-center">
                                                    <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1@m">
                                    <div class="uk-card-body uk-padding-small">
                                    <p class="uk-margin-small-top">{{ $images->name }}</p>
                                        <p class="uk-margin-remove uk-align-right"><label
                                                class="uk-label uk-label-success uk-text-small">{{ $images->price }}
                                            </label>
                                        </p>
                                        <p class="uk-margin-remove uk-align-right"><label
                                                class="uk-label uk-label-danger uk-text-small">{{ $company->province .' | '. $company->district }}
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </li>
                    
                    <li>
                    <div class="uk-slider-container-offset" uk-slider>
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img src="images/photo.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title uk-text-bold">
                                                    {{ $company->company_name}}</h3>
                                                    <p>{{ $company->about_company }}</p>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img src="images/dark.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title uk-text-bold">{{ $company->segment_area}}</h3>
                                                <p>{{ $company->main_services }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img src="images/photo.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title uk-text-bold">
                                                    {{ $company->company_name}}</h3>
                                                    <p>{{ $company->about_company }}</p>  
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img src="images/dark.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title uk-text-bold">{{ $company->segment_area}}</h3>
                                                <p>{{ $company->main_services }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                        <form>
                            <fieldset class="uk-fieldset">

                                <p class="uk-text-left">Caro usuário, para o procedimento de denúncia, queira por favor
                                    preencher o formulário a seguir</p>

                                <div class="uk-margin">
                                    <input class="uk-input" name="motivation" type="text" placeholder="Motivo">
                                </div>

                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5"
                                        placeholder="Descrição do ocorrido"></textarea>
                                </div>

                                <div class="uk-margin">
                                    <button class="uk-button uk-button-secondary uk-align-right"
                                        type="button">Submeter</button>
                                </div>
                            </fieldset>
                        </form>
                    </li>
                    

                        </ul>

                          <!--   <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a> ->

                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- <div class="uk-section uk-section-small uk-section-muted ">
    <div class="uk-container">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
            @foreach ($image as $images)
            <div class="uk-card uk-padding-remove uk-grid-collapse uk-width-1-4@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">                    
                    <div class="radius1">
                        <div uk-lightbox>
                            <a class="uk-button"  href="{{ url("storage/{$images->src}") }}" data-caption="{{ $images->name}}" data-caption="{{ $images->descrition}}"> 
                                <img  style="width: 300px; height: 250px" class="radius2 card-image-padding uk-height-max uk-max-width" src="{{ url("storage/{$images->src}") }}" alt="descricao">
                            </a>
                        </div>
                    </div>
                    <canvas width="300" height="10"></canvas>
                </div>
                <div class="uk-width-1-1@m">
                    <div class="uk-card-body uk-padding-small">
                        <h5 class="uk-margin-remove uk-margin-bottom uk-text-left uk-text-bold">{{ $images->name }}</h5>
                        <a href="{{ route('company.show', $company) }}"
                            class="uk-button uk-button-text uk-margin-remove uk-align-left uk-margin-top">{{ $images->descrition }}
                            <span uk-icon="icon: triangle-right"></span></a>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-success uk-text-small">{{ $images->price }}.00 Mz
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
        </div>
    </div>
</div> -->


    <!-- <button class="uk-button uk-button-primary uk-border-circle uk-button-small" id="open"><span
            uk-icon="comment"></span></button> -->
    <button class="uk-icon-button uk-button-default uk-marge-botton-remove uk-border-circle uk-button-larg uk-label-success" type="button" id="open"><span
            uk-icon="commenting"></span></button>

    <div class="uk-card uk-card-default chat-form-popup uk-margin-medium-bottom" id="chat-form">
        <button id="close" class="uk-margin-small-right uk-align-right uk-margin-small-top uk-text-danger"
            uk-icon="close"></button>
        <form action="" class="uk-form-stacked uk-padding">
            <p class=" uk-text-secondary">Ola aqui fala o(a) {{ $company->company_name }} em que podemos ajudar-lhe?</p>

            <label class="uk-form-label" for="message">Mensagem</label>
            <textarea rows="3" placeholder="Escreva uma mensagem" name="message" class="uk-textarea" id="message"
                required></textarea>

            <button type="submit"
                class="uk-button uk-button-primary uk-button-small uk-margin-small-top uk-align-right">Enviar<span
                    uk-icon="chevron-right"></span></button>
        </form>
    </div>
</div>
@endsection