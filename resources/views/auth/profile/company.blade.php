@extends('layouts.app')

@section('content')
<div class="uk-section uk-padding-remove uk-section-small uk-section-muted">
    <div class="uk-text-center uk-padding" uk-grid>
        <div class="uk-width-1-5@m">
             <div class="uk-card uk-card-body uk-padding-remove uk-float-left">
            @if ($company->logo) 
                <img class="uk-border-circle" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$company->logo}") }}" />
            @else
                
            <img class="uk-border-circle" src="https://getuikit.com/docs/image/avatar.jpg"
                    style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />
            @endif

                {{-- Location  --}}
                <div class="uk-margin-small-top">
                    <p class="uk-heading-line uk-text-left uk-text-small"><span><h6 class="uk-text-bolder uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h6></span></p>
                    <p class="uk-text-primary uk-text-small uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                        {{ $company->phone}}</p>
                    <p class="uk-text-bolder uk-text-left uk-margin-remove-bottom">{{ $company->user->email?? 'N/A' }} &nbsp</p>
                    <p class="uk-text-left uk-text-muted uk-margin-remove-bottom">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-top">{{ $company->district }}
                        {{ $company->province }} </p>
                </div>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class=" uk-padding-remove-top">
                <div uk-grid>
                <!-- <h6 class="uk-text-bolder uk-hidden@s uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h6> -->
                    
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
                                                    <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                        <div class="uk-margin">
                                                        <div class="uk-width-1-1" uk-grid>
                                                            <div class="uk-width-1-2@s">
                                                                <input class="uk-input" name="name" type="text" placeholder="Nome">
                                                            </div>
                                                            <div class="uk-width-1-2@s">
                                                                <input class="uk-input" name="price" type="text" placeholder="Preço: 299 Mts">
                                                            </div>'
                                                        </div>
                                                            <input class="uk-input" name="descrition" type="text" placeholder="Descrição do artigo"> 
                                                            <!-- 2 -->
                                                        </div>
                                                        <span uk-icon="icon: cloud-upload"></span>
                                                        <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                                                        <div uk-form-custom>
                                                            <!-- <input type="file" multiple> -->
                                                            <img  class="imagem" />
                                                            <input type="file" class="form-control input-file" name="photos[]" multiple />
                                                            <span class="uk-link">anexar images</span>
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
                            <div class="uk-card uk-card-default uk-padding-remove uk-grid-collapse uk-width-1-3@s uk-margin" uk-grid>
                                <div class="uk-margin-remove-left">                    
                                    <div class="radius1">
                                        <div uk-lightbox>
                                            <a class="uk-button"  href="{{ url("storage/{$images->src}") }}" data-caption="{{ $images->name}}" data-caption="{{ $images->descrition}}"> 
                                                <img style="width: 280px; height: 200px" class="radius2 card-image-padding uk-height-max uk-max-width"  src="{{ url("storage/{$images->src}") }}" alt="descricao">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1@m">
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
                                </div>
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
                    </li>
                        <li>
                        <div class="uk-width-1-1@m">
                            <div class="uk-overflow-auto ">
                                <table class="uk-table uk-table-middle  ">                   
                                    <tbody>
                                            @if($users->count())
                                                @foreach($users as $user)
                                                <tr class="uk-inline">
                                                    <td><!-- <img class="uk-preserve-width uk-border-circle" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" width="40" alt=""> -->
                                                    <a href="" class="uk-icon-button uk-label-success " uk-icon="user"></a>
                                                    </td>
                                                    <td class="uk-table-link">
                                                        <a class="uk-link-reset" href="{{ route('message.conversation', $user->id )}}">
                                                            <div class="chat-images">
                                                                <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                                            </div>
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

                </ul>
            </div>
        </div>
    </div>
</div>

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
@endsection