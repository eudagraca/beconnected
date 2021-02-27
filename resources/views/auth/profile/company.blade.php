@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-small uk-section-muted">
    <div class="uk-text-center uk-padding" uk-grid>

        <div class="uk-width-1-5@m">
            <div class="uk-card uk-card-body uk-padding-remove uk-float-left">
                <img class="uk-border-rounded" src="https://getuikit.com/docs/images/avatar.jpg" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="Logo"/>
                
                {{--  Location  --}}
                <div class="uk-margin-small-top">
                    <p class="uk-heading-line uk-text-left uk-text-small"><span>Endereço</span></p>
                    <p class="uk-text-bolder uk-text-left uk-margin-remove-bottom">Localização &nbsp<sup><span class="uk-label uk-text-light">Primaria</span></sub></p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-bottom">{{ $company->address }} </p>

                    <p class="uk-text-left uk-text-muted uk-margin-remove-top">{{ $company->district }}, {{ $company->province }} </p>

                </div>

            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-card uk-card-body uk-padding-remove-top">
                <h4 class="uk-text-bolder uk-text-left uk-margin-remove">{{  $company->company_name }}</h4>
                <p class="uk-text-primary uk-text-small uk-text-bold uk-text-left uk-margin-remove"> {{ $company->segment_area}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
