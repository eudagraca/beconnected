@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-small uk-section-muted ">
    <div class="uk-container">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
            @foreach ($companies as $company)
            <div class="uk-card uk-card-default uk-padding-remove uk-grid-collapse uk-width-1-4@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img class="uk-padding-remove" src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
                    <canvas width="300" height="100"></canvas>
                </div>
                <div class="uk-width-1-1@m">
                    <div class="uk-card-body uk-padding-small">
                        <h5 class="uk-margin-remove uk-margin-bottom uk-text-left uk-text-bold">{{ $company->company_name }}</h5>
                        <a href="{{ route('company.show', $company) }}"
                            class="uk-button uk-button-text uk-margin-remove uk-align-left uk-margin-top">Conecte-se
                            <span uk-icon="icon: triangle-right"></span></a>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-success uk-text-small">{{ $company->segment_area }}
                            </label>
                        </p>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-danger uk-text-small">{{ $company->province .' | '. $company->district }}
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection