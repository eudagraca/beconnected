@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-small uk-margin-remove-top uk-pedding-remove-top uk-flex uk-flex-center">
    <div class="uk-card  uk-width-1-1@s  uk-margin-large">
        <h6 class="uk-card-title uk-card-header uk-margin-remove uk-pedding-remove uk-flex uk-flex-center uk-text-muted">Usuário</h6>
        <div class="uk-card-body">
            <form method="POST" action="{{ route('register') }}" class="uk-form-stacked" uk-grid>
                @csrf
                <input value="user" type="text" name="role" hidden>
                <div class=" uk-width-1-3@s">
                    <label for="first_names" class="uk-form-label">
                        {{ __('Primeiros nomes') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('first_names') uk-form-danger @enderror" id="first_names"
                            name="first_names" type="text" value="{{ old('first_names') }}" required
                            autocomplete="first_names" autofocus>
                        @error('first_names')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class=" uk-width-1-3@s">
                    <label for="last_name" class="uk-form-label">
                        {{ __('Último nome') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('last_name') uk-form-danger @enderror" id="last_name"
                            name="last_name" type="text" value="{{ old('last_name') }}" required
                            autocomplete="last_name" autofocus>
                        @error('last_name')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class=" uk-width-1-3@s">
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
                <div class="uk-width-1-3@s uk-margin-remove-top uk-margin-bottom">
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
                <div class="uk-width-1-3@s uk-margin-remove-top">
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
@endsection
