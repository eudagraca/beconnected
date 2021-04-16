@extends('layouts.app')

@section('content')
{{--  @dd($errors->all())  --}}
<div class="uk-section uk-section-small uk-margin-remove-top uk-padding-remove-top  uk-flex uk-flex-center">
    <div class="uk-card uk-width-1-1@s  uk-margin-large">
        <!-- <h6 class="uk-card-title uk-card-header uk-text-bolder uk-margin-remove uk-padding-remove-right uk-padding-remove uk-text-muted">Registar empresa
        </h6> -->
        <div class="uk-card-body">
            <form enctype="multipart/form-data" method="post" action="{{ route('register', ['query' => 'company']) }}" class="uk-form-stacked">
            @csrf
            @csrf
                <input value="company" type="text" name="role" hidden>
                <div class="uk-margin-remove-top" id="dados-da-empresa" uk-grid>
                    <div class="uk-margin-bottom uk-margin-remove-top uk-width-1-1@s">
                        <h6 class="uk-text-normal uk-heading uk-text-bolder uk-heading-divider">Registar
                             empresa</h6>
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
                            {{ __('Contacto com whatsApp da empresa') }} <span class="uk-text-danger">*</span>
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
                                <option name="segment_area" value="Advogados">Advogados</option>
                                <option name="segment_area" value="Agências de Turismo">Agências de Turismo</option>
                                <option name="segment_area" value="Agências de Viagens">Agências de Viagens</option>
                                <option name="segment_area" value="Agências de Publicidade">Agências de Publicidade</option>
                                <option name="segment_area" value="Alumínio e vidro">Alumínio e vidro</option>
                                <option name="segment_area" value="Arquitectos e Projectos">Arquitectos e Projectos</option>
                                <option name="segment_area" value="Automóveis">Automóveis</option>
                                <option name="segment_area" value="Automóveis e Peças">Automóveis e Peças</option>
                                <option name="segment_area" value="Automóveis Reparação">Automóveis Reparação</option>
                                <option name="segment_area" value="Bate chapa">Bate chapa</option>
                                <option name="segment_area" value="Barres & bebidas ">Barres & Bebidas</option>
                                <option name="segment_area" value="Carpitarias e Mercenarias">Carpitarias e Mercenarias</option>
                                <option name="segment_area" value="Casas">Casas</option>
                                <option name="segment_area" value="Clinica">Clinica</option>
                                <option name="segment_area" value="Clinica Dentárias">Clinica Dentárias</option>
                                <option name="segment_area" value="Clinica Veterinárias">Clinica Veterinárias</option>
                                <option name="segment_area" value="Consultores">Consultores</option>
                                <option name="segment_area" value="Consultoria Empresarial">Consultoria Empresarial</option>
                                <option name="segment_area" value="Contabilidade">Contabilidade</option>
                                <option name="segment_area" value="Despachantes Aduaneiros">Despachantes Aduaneiros</option>
                                <option name="segment_area" value="Escola de Musica & Dança">Escola de Musica & Dança</option>
                                <option name="segment_area" value="Escola de Lingua">Escola de Lingua</option>
                                <option name="segment_area" value="Farmacia">Farmacia</option>
                                <option name="segment_area" value="Ferragens">Ferragens</option>
                                <option name="segment_area" value="Ginásios">Ginásios</option>
                                <option name="segment_area" value="Hoteis">Hotéis</option>
                                <option name="segment_area" value="Hoteis, Pousadas">Hotéis, Pousadas</option>
                                <option name="segment_area" value="Imobiliária">Imobiliária</option>
                                <option name="segment_area" value="Lavandarias">Lavandarias</option>
                                <option name="segment_area" value="loja de Roupa Femenina">loja de Roupa F</option>
                                <option name="segment_area" value="loja de Roupa Masculina">loja de Roupa M</option>
                                <option name="segment_area" value="loja de Roupa M/F">loja de Roupa M&F</option>
                                <option name="segment_area" value="loja de Calcado Femenino">loja de Calcado F</option>
                                <option name="segment_area" value="loja de Calcado Masculino">loja de Calcado M</option>
                                <option name="segment_area" value="loja de Calcado M/F">loja de Calcado M/F</option>
                                <option name="segment_area" value="loja de equipamento de cozinha">loja de e equipamento de cozinha</option>
                                <option name="segment_area" value="loja de equipamento e material de escritorio">loja de e equipamento & material de escritorio</option>
                                <option name="segment_area" value="loja de equipamento para limpeza">loja de e equipamento para limpeza</option>
                                <option name="segment_area" value="loja de equipamento de cozinha">loja de e equipamento de cozinha</option>
                                <option name="segment_area" value="loja de Roupas para Crianças">loja de Roupas para Crianças</option>
                                <option name="segment_area" value="loja de Móveis Mobílias">loja de Móveis & Mobílias</option>
                                <option name="segment_area" value="loja de Perfumes e Cosméticos">loja de Perfumes e Cosméticos</option>
                                <option name="segment_area" value="Óptica">Óptica</option>
                                <option name="segment_area" value="Parafusos e Porcas">Parafusos e Porcas</option>
                                <option name="segment_area" value="Pensões">Pensões</option>
                                <option name="segment_area" value="Pintores de Construção civil">Pintores de Construção civil</option>
                                <option name="segment_area" value="Pizzerias">Pizzerias</option>
                                <option name="segment_area" value="Pneus & Equipamentos">Pneus & Equipamentos</option>
                                <option name="segment_area" value="Recauchutagem & Vulcanizaçao">Recauchutagem & Vulcanizaçao</option>
                                <option name="segment_area" value="Rent Car">Rent Car</option>
                                <option name="segment_area" value="Restaurantes">Restaurantes</option>
                                <option name="segment_area" value="Segurança">Segurança</option>
                                <option name="segment_area" value="Sistemas de segurança Electrónica">Sistemas de segurança Electrónica</option>
                                <option name="segment_area" value="Supermecados">Supermecados</option>
                                <option name="segment_area" value="Talhos">Talhos</option>
                                <option name="segment_area" value="Táxis">Táxis</option>
                                <option name="segment_area" value="Técnicos de contas">Técnicos de contas</option>
                                <option name="segment_area" value="Transporte de carga">Transporte de carga</option>
                                <option name="segment_area" value="Transporte de Mercadorias">Transporte de Mercadorias</option>
                                <option name="segment_area" value="Transporte de Passageiros">Transporte de Passageiros</option>
                                <option name="segment_area" value="Turismo Empreendimentos">Turismo Empreendimentos</option>
                                <option name="segment_area" value="Agricola">Agro negócio</option>
                                <option name="segment_area" value="Ornamentação de Eventos">Ornamentação de Eventos</option>
                                <option name="segment_area" value="Outros">Outros</option> 
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
                            <!--  <select class="uk-select" name="province" id="province" required autofocus>
                                <option disabled selected>Seleccione a Provincia</option>
                                <option>Maputo</option>
                                <option>Gaza</option>
                            </select>
                            @error('province')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror -->


                            <select name="provincia_id" class="uk-select formselect required" id="provincia_id">
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


                            <select class="uk-select" name="distrito_id" value="{{ old('distrito_id') }}" id="distito">
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
                                autofocus>{{ old('about_company') }}</textarea>
                            @error('about_company')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-remove-top uk-margin-bottom">
                        <label for="main_services" class="uk-form-label">
                            {{ __('Principais serviços ou produtos') }} <span class="uk-text-danger">*</span>
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
                                <input type="file"  name="logo" required accept="image/*">
                                <span class="uk-link">Logotipo</span>
                            </div>
                        </div>


                        <!-- <div class="uk-form-control">
                            <span uk-icon="icon: cloud-upload"></span>
                                <span class="uk-text-middle">Agora anexe o Banner soltando-o aqui</span> <span
                                class="uk-text-danger">*</span>
                            <div uk-form-custom>
                                <input type="file" name="banner" accept="image/*">
                                <span class="uk-link">Banner da Empresa</span>
                            </div>
                        </div> -->

                        
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
