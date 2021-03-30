@extends('layouts.app')

@section('content')
{{--  @dd($errors->all())  --}}
<div class="uk-section uk-section-small uk-padding-large uk-section-muted uk-flex uk-flex-center">
    <div class="uk-card uk-card-default uk-width-1-1@s  uk-margin-large">
        <h2 class="uk-card-title uk-card-header uk-text-bolder uk-margin-remove-top uk-text-bolder">Editar empresa
        </h2>
        <div class="uk-card-body">
            <form enctype="multipart/form-data" method="post" action="{{ route('company.update', $empresa->id ) }}" class="uk-form-stacked">
            @method('PUT')
            @csrf
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
                        <label for="email" class="uk-form-label">
                            {{ __('Endereço de e-mail') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('email') uk-form-danger @enderror" id="email" name="email"
                                type="email" value="{{ $company->email ?? old('email') }}" required autocomplete="email" autofocus>
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
                            <button type="button" id="nextOne" class="uk-button uk-button-primary">
                                {{ __('Próximo') }}
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Endereço -->
                <div class="uk-margin-remove-top" id="endereco-da-empresa" uk-grid hidden>

                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Dados
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
                                name="address" type="text" value="{{ $company->address ?? old('address') }}" required autocomplete="address"
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
                            <!--<select class="uk-select" name="province" id="province" required autofocus>
                                <option disabled selected>Seleccione a Provincia</option>
                                <option>Maputo</option>
                                <option>Gaza</option>
                            </select>
                            @error('province')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror -->
                            
                            <select name="provincia_id" value="{{ $company->provincia_id ?? old('provincia_id') }}" class="uk-select formselect required" id="provincia_id">
                                <option disabled selected>Selecione a Provincia</option>
                                @foreach($provincias_list as $provincia)
                                <option value="{{ $provincia->id }}">
                                    {{ ucfirst($provincia->nome) }}</option>
                                @endforeach
                            </select>
                            @error('provincia_id')
                                <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-3@s">
                        <label for="district" class="uk-form-label">
                            {{ __('Distrito') }} <span class="uk-text-danger">*</span>
                        </label>
                        <div class="uk-form-control">
                            <!-- <select class="uk-select" name="district" id="district" required autofocus>
                                <option disabled selected>Seleccione o Distrito</option>
                                <option value="Maputo">Maputo</option>
                                <option value="Gaza">Gaza</option>
                            </select>
                            @error('district')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror -->


                            <select class="uk-select" name="distrito_id" value="{{ $company->distrito_id ?? old('distrito_id') }}" id="distito">
                                <option>Distrito de :</option>
                            </select>
                            @error('distrito_id')
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
                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Mais
                            detalhes da empresa</h6>
                    </div>

                    <div
                        class="js-upload uk-placeholder uk-text-center uk-margin-bottom uk-margin-medium-left uk-margin-remove-top uk-width-1-1@s">
                        <div class="uk-form-control">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle">Anexe um logotipo soltando-o aqui </span> <span
                                class="uk-text-danger">*</span>
                            <div uk-form-custom>
                                <input type="file" value="{{ $company->logo ?? old('logo') }}" required name="logo" accept="image/*">
                                <span class="uk-link">Logotipo</span>
                            </div>
                        </div>


                        <div class="uk-form-control">
                            <span uk-icon="icon: cloud-upload"></span>
                                <span class="uk-text-middle">Agora anexe o Banner soltando-o aqui</span> <span
                                class="uk-text-danger">*</span>
                            <div uk-form-custom>
                                <input type="file" value="{{ $company->banner ?? old('banner') }}" name="banner" required accept="image/*">
                                <span class="uk-link">Banner da Empresa</span>
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
                            <input id="license" type="license" value="{{ $company->license ?? old('license') }}"
                                class="uk-input @error('license') uk-form-danger @enderror" name="license" required
                                autocomplete="license">
                            @error('license')
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
