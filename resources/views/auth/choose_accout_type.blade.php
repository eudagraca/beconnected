@extends('layouts.app')
{{-- @section('background')
{{'uk-background-primary' }}
@endsection --}}
@section('content')
<div class="uk-section uk-section-small uk-section-muted">
    <div class="uk-container">
        <h3 class="uk-text-bolder uk-heading-bullet uk-text-center">Registo
        </h3>

        <h3 class="uk-heading-divider uk-text-muted uk-text-lead uk-h6 uk-text-normal uk-text-center uk-margin-remove-top">
            Escolha o tipo de conta com que
            deseja registar-se
            na
            aplicação
        </h3>

        <div class="uk-width-1-1@s" uk-grid>

            <div class="uk-width-1-2@s uk-card uk-card-body uk-card uk-align-center" uk-grid>

                <div class="uk-card uk-card-body uk-card-hover uk-text-center">
                    <h5 class="uk-card-title uk-text-bolder">Conta de usuário normal</h5>
                    <p>Texto sobre singular</p>
                    <a href="{{ route('register', ['query' => 'user']) }}" class=" uk-button uk-button-primary uk-border-rounded">Proceguir</a>
                </div>
            </div>
            
            <div class="uk-width-1-2@s uk-card uk-card-body uk-align-center uk-grid uk-first-column uk-grid-stack uk-margin-remove-top" uk-grid>

                <div class="uk-card uk-card-body uk-card-hover uk-text-center">
                    <h5 class="uk-card-title uk-text-bolder">Conta empresarial</h5>
                    <p>Texto sobre empresa</p>
                    <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-primary uk-border-rounded">Proceguir</a>
                </div>

            </div>

        </div>

    </div>
</div>
</div>
@endsection
