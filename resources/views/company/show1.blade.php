@extends('layouts.app')
@section('content')
<nav id="gold" class="uk-navbar-container gold uk-margin uk-card-small">
    <div class="uk-navbar-left uk-container">

        <a class="uk-navbar-item uk-logo" href="#">
            <div class="uk-child-width-1-1 uk-child-width-1-1@s">
                <h3 class="uk-card-title uk-margin-remove-bottom">{{ $empresa->company_name  }}</h3>
            </div>
        </a>

        <div class="uk-navbar-item uk-child-width-1-1 uk-child-width-1-1@s uk-inline">
            <form id="search-form uk-inline" class="search-form uk-inline relative" action="/en1" method="GET">
                <input id="s_input" type="search" name="q" class="uk-width-2xlarge uk-inline" aria-label="Search" placeholder="Pesquisar" value="">
                <button class="btn-red uk-button-primary uk-inline" type="button" onclick="ksearchvideo();">Go</button>
            </form>
        </div>

        <div class="uk-navbar-right uk-link-reset">
            <button class="" type="button" uk-toggle="target: #offcanvas-nav" uk-icon="icon: table"></button>
            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-primary">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</nav>


<div class="uk-container" >
<div class="uk-cover-container uk-height-medium">
    @if ($empresa->logo) 
        <img autoplay loop muted playsinline uk-cover sizes="(min-width: 650px) 650px, 100vw" uk-img data-src="{{ url("storage/{$empresa->logo}") }}" alt="" uk-cover uk-img="target: !ul > :last-child, !* +*">
    @else
        <img width="1800" height="200" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
    @endif
    <!-- <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" autoplay loop muted playsinline uk-cover></video> -->
</div>
<!--     <div class="uk-card uk-width-1-1@m ">
        <div class="uk-card-header uk-accordion">
            <div class="uk-grid-small uk-flex-middle" uk-grid>

                <div class="uk-width-auto">
                @if ($empresa->logo) 
                    <img class="uk-border-circle" width="60" height="60" src="{{ url("storage/{$empresa->logo}") }}" alt="logo">
                    @else
                    <img class="uk-border-circle" width="40" height="40" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                @endif
                    <!-- <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg"> ->
                </div>

                <div class="uk-child-width-1-1 uk-child-width-1-1@s uk-grid-small ">
                    <h3 class="uk-card-title uk-margin-remove-bottom uk-accordion-title">{{ $empresa->company_name  }}</h3>
                    <!-- <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p> ->
                </div>
                
            </div>
        </div>
    </div> -->

<div class="uk-child-width-expand@s" uk-grid>
    <div class="uk-grid-item-match">
        <div class="uk-card uk-card-default uk-card-body">
        
        <div class="uk-position-relative uk-visible-toggle uk-light uk-padding-remove" tabindex="-1" uk-slideshow>

            <ul class="uk-slideshow-items uk-padding-remove">
                <li>
                    @if ($empresa->logo) 
                        <img sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img data-src="{{ url("storage/{$empresa->logo}") }}" alt="" uk-cover uk-img="target: !ul > :last-child, !* +*">
                    @else
                        <img width="1800" height="200" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                    @endif
                    </li>

                    <li>
                        <img data-src="images/dark.jpg" width="1800" height="1200" alt="" uk-cover uk-img="target: !* -*, !* +*">
                    </li>

                    <li>
                        <img data-src="images/light.jpg" width="1800" height="1200" alt="" uk-cover uk-img="target: !* -*, !ul > :first-child">
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
        </div>
     </div>

        <div class="uk-card uk-card-default uk-width-1-3@m">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">No mercado desde</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                    </div>
                </div>
            </div>
                <div class="uk-card-body">
                    <p>
                    <!--buton><a href="{{ route('company.create') }}">CHAT</a></></buton>
                    <buton><a href="{{ route('company.create') }}">COTACAO</a></buton>
                    <buton><a href="{{ route('company.create') }}">FACTURACAO</a></buton>
                    <buton><a href="{{ route('company.create') }}">AGENDA</a></button-->
                <ul>
                    <!-- <li><strong>Nome:</strong>{{ $empresa->name  }}</li> -->
                    <li><strong>Contacto: </strong>{{ $empresa->phone  }}</li>
                    <li><strong>Endereço: </strong>{{ $empresa->address  }}</li>
                </ul></p>
                <p uk-margin>
                    <div class="uk-card uk-padding uk-card-body">
                    <!-- <button class="uk-button radius uk-button-default"><a  href="{{ route('message.conversation', $empresa->id )}}">Messagem</a></button> -->
                    <a class="uk-icon-button uk-button-default uk-label-success" type="button" uk-icon="commenting" uk-toggle="target: #offcanvas-flip"></a>
                    <!-- <a href="" class="uk-icon-button uk-button-primary uk-margin-small-right" uk-icon="twitter"></a> -->
                    <a href="" class="uk-icon-button uk-button-primary uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="whatsapp"></a>
                    <a href="" class="uk-icon-button uk-button-default " uk-icon="world"></a>    
                    </div>
                    <!-- <button class="uk-button radius uk-button-default"><a  href="{{ route('message.conversation', $empresa->id )}}">Messagem</a></button>
                    <button class="uk-button uk-button-default uk-label-success" type="button" uk-toggle="target: #offcanvas-flip">Messagem</button> -->

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
                                            <table class="uk-table uk-table-hover uk-table-small uk-table-middle  ">                   
                                                <tbody>
                                                    <tr class="uk-inline">
                                                        <td>
                                                            <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="user"></a></td>
                                                        <td>
                                                            <a class="uk-link-reset uk-light" href="">
                                                                {{ $empresa->company_name}} <span class="uk-light">
                                                                 <br> Ola! Envie tua messagem?</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                        @if($users->count())
                                                            @foreach($users as $user)
                                                            <tr class="uk-inline">
                                                                <td><!-- <img class="uk-preserve-width uk-border-circle" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" width="40" alt=""> -->
                                                                <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="user"></a>
                                                                </td>
                                                                <td class="uk-table-link uk-light  uk-list-divider">
                                                                    <a class="uk-link-reset uk-light" href="{{ route('message.conversation', $user->id )}}">
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
                    <!--<button class="uk-button radius uk-button-primary uk-light"><a  href="{{ route('company.create') }}">AGENDA</a></button>
                    <button class="uk-button radius  uk-label-success uk-light"><a href="{{ route('company.create') }}">COTACAO</a></button> -->
                </p>
            </div>
        </div>
    </div>
        
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Contacto</h3>
                <p>{{ $empresa->segment_area  }}</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Sobre-nos</h3>
                <p>{{ $empresa->about_company  }}.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Servicos</h3>
                <p>{{ $empresa->main_services  }}</p>
            </div>
        </div>
    </div>


    <a class="uk-button uk-button-primary" href="#modal-sections" uk-toggle>Criar Galeria</a>

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
                        <form action="{{route('uploadImage', $empresa->id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <!--  <div class="form-group">
                                    <label for="Product Name">Product Name</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Product Name" >
                                </div> -->
                                    <!--  <label for="Product Name">Product photos (can attach more than one):</label>
                                        
                                <input type="file" class="form-control" name="photos[]" multiple /> -->
                                

                                <div class="js-upload uk-placeholder uk-text-center">
                                <legend class="uk-legend" for="Product Name">Fotos da vetrine</legend>
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
                                    <span class="uk-text-middle">Anexe images soltando-os aqui</span>
                                    <div uk-form-custom>
                                        <!-- <input type="file" multiple> -->
                                        <input type="file" class="form-control" name="photos[]" multiple />
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



<div class="uk-card uk-card-default uk-card-body">
    <div>
        <div class="uk-child-width-1-3@m " uk-grid>
            @foreach ($image as $image)
            <div>
                <div class="uk-inline">
                    @if ($image->name)
                    <div class="radius1">
                    <div uk-lightbox>
                        <a class="uk-button"  href="{{ url("storage/{$image->src}") }}" data-caption="{{ $image->name}}" data-caption="{{ $image->descrition}}"> 
                        <img class="radius2 card-image-padding uk-height-max uk-max-width" src="{{ url("storage/{$image->src}") }}" alt="descricao">
                        </a>
                        </div>
                    </div>
                    @else
                        <img width="500" height="100" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                    @endif
                    <div class="">
                        <p>
                            <div class="uk-alert-success uk-overlay uk-overlay-default uk-margin-remove-bottom uk-padding-remove">
                                <div class="uk-grid-small uk-flex-middle uk-overlay uk-overlay-default  uk-dark uk-padding-remove" uk-grid>
                                    
                                    <h4 class=" uk-margin-remove-bottom uk-text-center uk-text-secondary uk-text-bold">{{ $image->name}}</h4>
                                    
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
    @endsection

<script>

var bar = document.getElementById('js-progressbar');

UIkit.upload('.js-upload', {

    url: '',
    multiple: true,

    beforeSend: function () {
        console.log('beforeSend', arguments);
    },
    beforeAll: function () {
        console.log('beforeAll', arguments);
    },
    load: function () {
        console.log('load', arguments);
    },
    error: function () {
        console.log('error', arguments);
    },
    complete: function () {
        console.log('complete', arguments);
    },

    loadStart: function (e) {
        console.log('loadStart', arguments);

        bar.removeAttribute('hidden');
        bar.max = e.total;
        bar.value = e.loaded;
    },

    progress: function (e) {
        console.log('progress', arguments);

        bar.max = e.total;
        bar.value = e.loaded;
    },

    loadEnd: function (e) {
        console.log('loadEnd', arguments);

        bar.max = e.total;
        bar.value = e.loaded;
    },

    completeAll: function () {
        console.log('completeAll', arguments);

        setTimeout(function () {
            bar.setAttribute('hidden', 'hidden');
        }, 1000);

        alert('Upload Completed');
    }

});

</script>
