@extends('layouts.app')
@section('content')
<div class="uk-container">
    <ul class="uk-padding uk-padding-remove-bottom uk-text-lowercase uk-width-expand@m uk-inline"  uk-tab data-src="../storage/empresas/unnamed.png" uk-img>
        <li class=" uk-position-top-left "><a class="uk-link-reset uk-text-lowercase" href="{{ route('user.profile') }}" ><span uk-icon="icon:  home;"></span></a></li>    
        <li class="uk-position-top-center uk-padding-remove-right"><a class="uk-link-reset uk-text-lowercase"  href="#">Convesras</a></li>
        <!-- <li class="uk-position-top-right"><a class="uk-link-reset uk-text-lowercase" href="#" uk-icon="more-vertical"></a></li> -->
    </ul>
    <a href="{{ route('home') }}" class="">Home</a>
    <ul class="uk-switcher">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <li>
        <div class="uk-container ">
            <div class="uk-section uk-margin-remove uk-padding-remove uk-section-small uk-tile-default">
                <div class="uk-margin-remove uk-padding-remove">
                    <ul class="uk-margin-remove uk-padding-remove uk-flex-center " uk-tab>
                            
                    <div class="uk-card  uk-card-body uk-padding-remove">
                            @if ($users->perfil)
                            <!-- uk-position-top-center uk-overlay uk-overlay-default uk-box-shadow-xlarge -->
                                 <div class=" uk-inline " style="margin-left: 30px;" >
                                    <img class="uk-border-circle uk-image-possition" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="{{ url("storage/{$users->perfil}") }}" />    
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
                                                        <form class="" action="{{route('updatePerfil', $users->id)}}" method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            @method('PUT')
                                                            @csrf
                                                            <input value="user" type="text" name="role" hidden>
                                                                <div class="js-upload uk-placeholder uk-text-center">
                                                                <legend class="uk-legend " for="Product Name">perfil</legend>
                                                                <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                                    <div class="uk-margin">
                                                                    <div class="uk-width-1-1" uk-grid>
                                                                        <div class="uk-width-1-2@s">
                                                                            <p>Perfil actual</p>
                                                                            @if ($users->perfil)
                                                                                <img class="uk-border-circle uk-image-possition" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="{{ url("storage/{$users->perfil}") }}" />
                                                                            @else
                                                                                <img class="uk-border-circle imagem" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />
                                                                            @endif
                                                                        </div>
                                                                        <!-- <div class="uk-width-1-2@s">
                                                                            <p>Novo perfil</p>
                                                                        <img  class=" uk-border-circle imagem" style="width: 150px; height: 150px;" />
                                                                        </div> -->
                                                                    </div>
                                                                    </div>
                                                                    <span uk-icon="icon: cloud-upload"></span>
                                                                    <span class="uk-text-middle">Anexe a nova imagem soltando-a aqui</span>
                                                                    <div uk-form-custom>
                                                                        <!-- <input type="file" multiple> -->
                                                                        <input type="file" class="input-file" required name="perfil" accept="image/*">
                                                                        <span class="uk-link">nova imagem</span>
                                                                    </div>
                                                                </div>
                                                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                            <input type="submit" class="uk-button uk-align-right radius uk-button-primary" value="Actualizar" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                            </p>
                                        </div>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class=" uk-inline " style="margin-left: 30px;" >
                                <img class="uk-border-circle" style="width: 100px; height: 100px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />    
                            <div class="uk-position-bottom-right uk-label-warning uk-border-circle  uk-overlay uk-overlay-default"><a class="uk-icon-button uk-label-warning " uk-icon="file-edit" href="#modal-sections0" uk-toggle></a></div>
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
                                            <form class="" action="{{ route('updatePerfil', $users->id) }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                @method('PUT')
                                                @csrf
                                                <input value="user" type="text" name="role" hidden>
                                                    <div class="js-upload uk-placeholder uk-text-center">
                                                    <!-- <legend class="uk-legend " for="Product Name">Perfil</legend> -->
                                                    <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                                                        <div class="uk-margin">
                                                        <div class="uk-width-1-1" uk-grid>
                                                            <div class="uk-width-1-1@s uk-text-center">
                                                                <p>Foto do Perfil</p>
                                                                @if ($users->perfil)
                                                                    <img class="uk-border-circle imagens uk-possition-center" style="width: 100px; height: 100px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="{{ url("storage/{$users->perfil}") }}" />
                                                                @else
                                                                    <img class="uk-border-circle imagem" style="width: 120px; height: 120px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />
                                                                @endif
                                                            </div>
                                                            <!-- <div class="uk-width-1-2@s">
                                                                <p>Novo perfil</p>
                                                            <img  class=" uk-border-circle imagem" style="width: 150px; height: 150px;" />
                                                            </div> -->
                                                        </div>
                                                        </div>
                                                        <span uk-icon="icon: cloud-upload"></span>
                                                        <span class="uk-text-middle">Anexe sua imagem soltando-a aqui</span>
                                                        <div uk-form-custom>
                                                            <!-- <input type="file" multiple> -->
                                                            <input type="file" class="input-file" required name="perfil" accept="image/*">
                                                            <span class="uk-link">nova imagem</span>
                                                        </div>
                                                    </div>
                                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                <input type="submit" class="uk-button uk-align-right radius uk-button-primary" value="Actualizar" />
                                            </form>
                                        <div class="uk-modal-footer uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                                
                            <li class="uk-panel uk-text-truncate uk-active"><a href="#">{{$users->name }}
                            <p class="uk-heading-line uk-text-small"><span><h4 class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove uk-width-1-1@m">
                            <!-- <span class="uk-margin-small-right" uk-icon="icon:  home;"></span> -->
                            </h4></span></p>
                            <p class=" uk-text-small uk-text-muted uk-padding-remove uk-margin-remove uk-text-bold uk-text-left uk-margin-small-top uk-width-1-1@m">
                            <span class="uk-margin-small-right" uk-icon="icon:  receiver;"></span>{{ Auth::user()->name }}</p>
                            <p class="uk-text-bolder uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">
                            <span class="uk-margin-small-right" uk-icon="icon: mail;"></span>{{ Auth::user()->email?? 'N/A' }} &nbsp</p>
                            <p class="uk-text-left uk-text-muted uk-padding-remove uk-margin-remove">
                            <span class="uk-margin-small-right" uk-icon="icon: location;"></span>{{ Auth::user()->last_name?? 'N/A' }} </p>
                                <a class="uk-text-primary" href="#modal-sections2" uk-toggle>Editar os dados acima</a>
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
                                </a>
                            </li>
                    </ul>
                </div>

                <div class="uk-margin-medium-top">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" class="uk-text-capitalize">Sobre</a></li>
                        <li><a href="#" class="uk-text-capitalize">Contactos</a></li>
                        <li><a href="#" class="uk-text-capitalize">Conversas</a></li>
                    </ul>






                    <ul class="uk-switcher uk-margin">
                        <li>

                        </li>

                        <li><h6>Beconnected suporte</h6>
                        <p><span class="uk-margin-small-right" uk-icon="icon: receiver;"></span>Tel:+258 840442932</p>
                           <p><span class="uk-margin-small-right" uk-icon="icon: mail;"></span>E-email: BeconnectedTeamLeader@gmail.com</p>
                           <p><span class="uk-margin-small-right" uk-icon="icon: whatsapp;"></span>WhatsAap: +258040442932</p>
                           <p><span class="uk-margin-small-right" uk-icon="icon: facebook;"></span>www.Facebook.com/Beconnected</p>
                           <p><span class="uk-margin-small-right" uk-icon="icon: instagram;"></span>www.Instagram.com/Beconnected</p> 
                        </li>


                        <li>
                            <div class="uk-width-1-2@m">
                                <div class="uk-overflow-auto ">
                                    <table class="uk-table uk-table-hover uk-table-small uk-table-middle  ">
                                            @if($users->count())
                                            @foreach($user as $user)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    <a href="" class="uk-icon-button uk-label-default " uk-icon="user"></a>
                                                    </td>
                                                    <td class="uk-table-link  uk-list-divider">
                                                        <!-- <a class="uk-link-reset" href="{{ route('message.conversation', $user->id )}}"> -->
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
                        </li>
                        </ul>
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