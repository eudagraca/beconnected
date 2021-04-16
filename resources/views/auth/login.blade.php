@extends('layouts.single_app')
{{-- @section('background')
{{'uk-background-primary' }}
{{'html'}}
@endsection --}}
@section('content')
<div class="uk-width-1-1 uk-text-center uk-flex-center uk-margin-large-top" uk-grid style="font-family: 'Comfortaa';">
    <div class="uk-width-1-2">
        <div class="uk-card uk-card-body uk-align-center uk-margin-remove uk-padding-remove"> <br><br><br><br>
        <!-- <img src="{{ asset('storage/photos/be.connected11.png')}}"> -->
        </div>
    </div>

    <div class="uk-width-1-2@s container_login">
        <div class="uk-card uk-card-body container_login">
            <form method="POST" action="{{ route('login') }}" class="uk-form-stacked">
                @csrf
                <div class="uk-margin">
                    <label for="email" class="uk-form-label uk-beconnected uk-align-left" style="font-family: 'Comfortaa';">
                        {{ __('E-mail') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input @error('email') uk-form-danger @enderror" name="email" id="email"
                            type="email" value="{{Session::get('email') ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin uk-padding-top">
                    <label for="password" class="uk-form-label uk-align-left" style="font-family: 'Comfortaa';">
                        {{ __('Senha') }}
                    </label>
                    <div class="uk-form-control">
                        <input id="password" type="password"
                            class="uk-input @error('password') uk-form-danger @enderror" value="{{Session::get('password') ?? old('password') }}" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-control">
                        <button type="submit" class="uk-button uk-text-lowercase uk-input uk-inputt uk-button-primary" style="font-family: 'Comfortaa';">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="uk-button uk-text-muted uk-text-lowercase uk-link-reset uk-button-link uk-margin-left" href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha?') }}
                        </a>
                        <a class="" href="{{ route('register', ['query' => 'user']) }}" style="font-family: 'Comfortaa';">Criar conta</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
