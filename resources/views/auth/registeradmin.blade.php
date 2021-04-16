@extends('layouts.app')
@section('content')

@if($errors->any())
    {{ implode('', $errors->all(':message')) }}
@endif

<div class="uk-section uk-section-small uk-margin-remove-top uk-padding-remove-top uk-flex uk-flex-center">
    <div class="uk-card  uk-width-1-1@s  uk-margin-large">
        <!-- <h6 class="uk-card-title uk-card-header uk-margin-remove uk-padding-remove uk-flex uk-flex-center uk-text-muted">Criar conta</h6> -->
        <div class="uk-card-body">
        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Criar conta</h6>
            <form method="POST" action="{{ route('registeradmin') }}" class="uk-form-stacked" enctype="multipart/form-data" uk-grid>
                @csrf
                <input value="super-admin" type="text" name="role" hidden>

                <div class="js-upload uk-placeholder uk-text-center uk-margin-bottom uk-margin-medium-left uk-margin-remove-top uk-width-1-1@s">
                    <div class="uk-form-control">
                        <span uk-icon="icon: cloud-upload"></span>
                        <span class="uk-text-middle">Anexe foto do perfil </span> <span
                            class="uk-text-danger">*</span>
                        <div uk-form-custom>
                            <input type="file" class="input-file" required  name="perfil" accept="image/*">
                            <span class="uk-link">adicione aqui</span>
                        </div>

                        <div class=" uk-inline " style="margin-left: 30px;" >
                            <img class="uk-border-circle imagem" style="width: 150px; height: 150px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />    
                            <div class="uk-position-bottom-right uk-label-warning uk-border-circle  uk-overlay uk-overlay-default"><a class="uk-icon-button uk-label-warning " uk-icon="user"></a></div>
                        </div>

                        <progress id="js-progressbar" class="uk-progress  uk-margin-remove-top uk-margin-bottom" value="0"
                    max="100"></progress>
                    </div>
                </div>

                <div class=" uk-width-1-2@s">
                    <label for="name" class="uk-form-label">
                        {{ __('Nome do usuário') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('name') uk-form-danger @enderror" id="name"
                            name="name" type="text" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>
                        @error('name')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- <div class=" uk-width-1-2@s">
                    <label for="last_name" class="uk-form-label">
                        {{ __('Último nome') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('last_name') uk-form-danger @enderror" id="last_name"
                            name="last_name" type="text" value="{{ old('last_name') }}"
                            autocomplete="last_name" autofocus>
                        @error('last_name')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div> -->
                <div class=" uk-width-1-2@s">
                    <label for="email" class="uk-form-label">
                        {{ __('Endereço de e-mail') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('email') uk-form-danger @enderror" id="email" name="email"
                            type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                    <label for="password" class="uk-form-label">
                        {{ __('Senha') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password" type="password"
                            class="uk-input @error('password') uk-form-danger @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-margin-remove-top">
                    <label for="password_confirmation" class="uk-form-label">
                        {{ __('Confirmar a Senha') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password_confirmation" type="password"
                            class="uk-input @error('password') uk-form-danger @enderror" name="password_confirmation"
                            required autocomplete="new-password">
                        @error('password_confirmation')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin-remove-top">
                    <div class="uk-form-control">
                        <br>
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Registar me') }}
                        </button>
                    </div>
                </div>
            </form>
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
