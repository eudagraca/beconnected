@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-small uk-section-muted">
    <div class="uk-text-center uk-padding" uk-grid>
        <div class="uk-width-1-5@m">
            <div class="uk-card uk-card-body uk-padding-remove uk-float-left">
                <img class="uk-border-rounded" src="https://getuikit.com/docs/images/avatar.jpg"
                    style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo" />

                {{-- Location  --}}
                <div class="uk-margin-small-top">
                    <p class="uk-heading-line uk-text-left uk-text-small"><span>Endereço</span></p>
                    <p class="uk-text-bolder uk-text-left uk-margin-remove-bottom">Localização &nbsp<sup><span
                                class="uk-label uk-text-light">Primaria</span></sub></p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-bottom">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-top">{{ $company->district }},
                        {{ $company->province }} </p>
                </div>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-card uk-card-body uk-padding-remove-top">
                <div uk-grid>
                    <h4 class="uk-text-bolder uk-text-left uk-margin-remove uk-width-1-1@m">{{ $company->company_name }}
                    </h4>
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
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Galeira</a></li>
                    <li><a href="#">Denunciar esta empresa</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
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
                    <li></li>
                    <li>
                        <form>
                            <fieldset class="uk-fieldset">

                                <p class="uk-text-left">Caro usuário, para o procedimento de denúncia, queira por favor
                                    preencher o formulário a seguir</p>

                                <div class="uk-margin">
                                    <input class="uk-input" name="motivation" type="text" placeholder="Motivo">
                                </div>

                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5"
                                        placeholder="Descrição do ocorrido"></textarea>
                                </div>

                                <div class="uk-margin">
                                    <button class="uk-button uk-button-secondary uk-align-right"
                                        type="button">Submeter</button>
                                </div>
                            </fieldset>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <button class="uk-button uk-button-primary uk-border-rounded uk-button-small" id="open"><span
            uk-icon="comment"></span></button>

    <div class="uk-card uk-card-default chat-form-popup uk-margin-medium-bottom" id="chat-form">
        <button id="close" class="uk-margin-small-right uk-align-right uk-margin-small-top uk-text-danger"
            uk-icon="close"></button>
        <form action="" class="uk-form-stacked uk-padding">
            <p class="uk-text-bold uk-text-secondary">Em conversa com {{ $company->company_name }}</p>

            <label class="uk-form-label" for="message">Mensagem</label>
            <textarea rows="3" placeholder="Escreva uma mensagem" name="message" class="uk-textarea" id="message"
                required></textarea>

            <button type="submit"
                class="uk-button uk-button-primary uk-button-small uk-margin-small-top uk-align-right">Enviar<span
                    uk-icon="chevron-right"></span></button>



        </form>
    </div>
</div>
@endsection