@extends('layouts.admin')

@section('content')
<div class="uk-container uk-container-large">
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Editar meu perfil
                </div>
                <div class="uk-card-body">

                    <form action="{{route('edituser', $userid->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input value="super-admin" type="text" name="role" hidden>

                        <div class="js-upload uk-placeholder uk-text-center">
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

@endsection