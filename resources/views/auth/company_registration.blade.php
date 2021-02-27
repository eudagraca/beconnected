@extends('layouts.app')

@section('content')
{{--  @dd($errors->all())  --}}
<div class="uk-section uk-section-small uk-padding-large uk-section-muted uk-flex uk-flex-center">
    <div class="uk-card uk-card-default uk-width-1-1@s  uk-margin-large">
        <h2 class="uk-card-title uk-card-header uk-text-bolder uk-margin-remove-top uk-text-bolder">Registar empresa
        </h2>
        <div class="uk-card-body">
            <form method="POST" action="{{ route('register', ['query' => 'company']) }}" class="uk-form-stacked">
                @csrf
                <input value="company" type="text" name="role" hidden>
                <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                        <h6 class="uk-text-normal uk-heading-bullet uk-heading uk-text-bolder uk-heading-divider">Dados
                            da empresa</h6>
                    </div>
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
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
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                        <label for="email" class="uk-form-label">
                            {{ __('Endereço de e-mail') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('email') uk-form-danger @enderror" id="email" name="email"
                                type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
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
                                type="tel" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
                                value="{{ old('alternative_phone') }}" autocomplete="alternative_phone" autofocus>
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
                            <select class="uk-select" name="classification" id="classification" required autofocus>
                                <option disabled selected>Seleccione a classificação</option>
                                <option value="Pequena Média">Pequena Média</option>
                                <option value="Grande">Grande</option>
                            </select>
                            @error('classification')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                        <label for="about_company" class="uk-form-label">
                            {{ __('Sobre a empresa') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <textarea class="uk-textarea @error('about_company') uk-form-danger @enderror"
                                id="about_company" name="about_company" required rows="2" autocomplete="about_company"
                                placeholder="Principais serviços fornecidos pela empresa"
                                autofocus>{{ old('about_company') }}</textarea>
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
                                placeholder="Descreva a sua empresa" autofocus>{{ old('main_services') }}</textarea>
                            @error('main_services')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-width-1-1">
                        <div class="uk-form-control uk-align-right">
                            <br>
                            <button type="button" id="nextOne" class="uk-button uk-button-primary">
                                {{ __('Próximo') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Endereço -->
                <div class="uk-margin-remove-top" id="endereco-da-empresa" uk-grid hidden>

                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                        <h6 class="uk-text-normal uk-heading-bullet uk-heading uk-text-bolder uk-heading-divider">Dados
                            do
                            endereço da
                            empresa</h6>
                    </div>

                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                        <label for="address" class="uk-form-label">
                            {{ __('Endereço da empresa') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('address') uk-form-danger @enderror" id="address"
                                name="address" type="text" value="{{ old('address') }}" required autocomplete="address"
                                placeholder="Rua, Bairro, Cidade" autofocus>
                            @error('address')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                        <label for="province" class="uk-form-label">
                            {{ __('Provincia') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <select class="uk-select" name="province" id="province" required autofocus>
                                <option disabled selected>Seleccione a Provincia</option>
                                <option>Maputo</option>
                                <option>Gaza</option>
                            </select>
                            @error('province')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                        <label for="district" class="uk-form-label">
                            {{ __('Distrito') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <select class="uk-select" name="district" id="district" required autofocus>
                                <option disabled selected>Seleccione o Distrito</option>
                                <option value="Maputo">Maputo</option>
                                <option value="Gaza">Gaza</option>
                            </select>
                            @error('district')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-width-1-1">

                        <div class="uk-form-control uk-align-right">
                            <br>
                            <button type="button" id="nextTwo" class="uk-button uk-button-primary">
                                {{ __('Próximo') }}
                            </button>
                        </div>

                        <div class="uk-form-control uk-align-right">
                            <br>
                            <button type="button" id="previousOne" class="uk-button uk-button-secondary">
                                {{ __('Voltar') }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="uk-margin-remove-top" id="detalhes-da-empresa" uk-grid hidden>

                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                        <h6 class="uk-text-normal uk-heading-bullet uk-heading uk-text-bolder uk-heading-divider">Mais
                            detalhes da empresa</h6>
                    </div>

                    <div
                        class="js-upload uk-placeholder uk-text-center uk-margin-bottom uk-margin-medium-left uk-margin-remove-top uk-width-1-1@s">
                        <div class="uk-form-control">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle">Anexe uma logotipo soltando-o aqui ou </span> <span
                                class="uk-text-danger">*</span>
                            <div uk-form-custom>
                                <input type="file" name="logo" accept="image/*">
                                <span class="uk-link">seleccione um</span>
                            </div>
                        </div>
                    </div>

                    <progress id="js-progressbar" class="uk-progress  uk-margin-remove-top uk-margin-bottom" value="0"
                        max="100"></progress>


                    <div class="uk-width-1-3@s uk-margin-remove-top uk-margin-bottom">
                        <label for="license" class="uk-form-label">
                            {{ __('Licença') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <input id="license" type="license"
                                class="uk-input @error('license') uk-form-danger @enderror" name="license" required
                                autocomplete="license">
                            @error('license')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-3@s uk-margin-remove-top uk-margin-bottom">
                        <label for="password" class="uk-form-label">
                            {{ __('Senha para aceder a aplicação') }} <span class="uk-text-danger">*</span>
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
                            {{ __('Confirmar a Senha') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <input id="password_confirmation" type="password"
                                class="uk-input @error('password') uk-form-danger @enderror"
                                name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-width-1-1">

                        <div class="uk-form-control uk-align-right">
                            <br>
                            <button type="submit" class="uk-button uk-button-primary">
                                {{ __('Registar') }}
                            </button>
                        </div>

                        <div class="uk-form-control uk-align-right">
                            <br>
                            <button type="button" id="previousTwo" class="uk-button uk-button-secondary">
                                {{ __('Voltar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
