@extends('layouts.app')
{{-- @section('background')
{{'uk-background-primary' }}
@endsection --}}
@section('content')
<div class="uk-container">
    <div class="uk-section uk-section-small uk-tile-default">
        <div class="uk-margin-remove uk-padding-remove">
            <ul class="uk-flex-center" uk-tab>
                <li><h4 class="uk-text-bolder  uk-text-center">Criar conta
                </h4></li>
            </ul>
        </div>

        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#">Normal</a></li>
                <li><a href="#">Empresa</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-card uk-card-body  uk-text-center">
                        <h6 class="uk-card-title uk-text-muted ">Conta normal</h6>
                            <p>Esta opção foi criada para ti carro usuário para te conectares a todas empresas do Be.conneted</p>
                        <a href="{{ route('register', ['query' => 'user']) }}" class=" uk-button uk-button-default uk-border-rounded">Seguinte</a>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-body uk-card-hover uk-text-center">
                        <h5 class="uk-card-title uk-text-muted ">Conta empresarial</h5>
                            <p>Esta opção foi criada para ti carro empresario para gerir tua pagina e antender a demada dos teus clientes</p>
                        <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-default uk-border-rounded">Seguinte</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
@endsection
