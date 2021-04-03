@extends('layouts.app')
@section('content')
<!-- <div class="uk-section uk-section-small uk-section-muted ">
    <div class="uk-container">
        <div class="uk-grid-small  uk-text-center" uk-grid>
            @foreach ($empresas as $company)
            <a class="uk-link-reset" href="{{ route('company.show', $company) }}">
            <div class="uk-card uk-grid-small uk-grid-collapse uk-width-1-4@s uk-margin " uk-grid>
                <div class="uk-card-media-center  uk-cover-container uk-margin-remove" >
                    @if ($company->logo) 
                    <div class="uk-card-defaultt uk-padding-left" style="margin-left: 50px;">
                        <img style="width: 200px; height: 200px" width="300" height="100" class=" uk-image-possition uk-border-circle" src="{{ url("storage/{$company->logo}") }}" alt="logo">
                    </div>
                    @else
                        <img class="uk-padding-remove" src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
                        <canvas width="300" height="100"></canvas>
                    @endif
                    <!-- <img class="uk-padding-remove" src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
                    <canvas width="300" height="100"></canvas> ->
                </div>
                <div class="uk-width-1-1@m uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-body uk-padding-small">
                        <h5 class="uk-margin-remove uk-margin-bottom uk-text-left uk-text-bold">{{ $company->company_name }}</h5>
                        <a href="{{ route('company.show', $company) }}"
                            class="uk-button uk-button-text uk-margin-remove uk-align-left uk-margin-top">Conecte-se
                            <span uk-icon="icon: triangle-right"></span></a>
                            <p class="uk-margin-remove uk-align-right">{{ $company->address }} </p>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-success uk-text-small">
                            </label>
                        </p>
                        <br>
                        <p class="uk-margin-remove uk-align-right"><label
                                class="uk-label uk-label-primary uk-text-small">{{ $company->segment_area }}
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</div> -->


<table class="uk-table uk-table-middle uk-table-divider">
@foreach ($empresas as $company)
    <thead>
        <tr>
            <th class="uk-width-small">Perfil</th>
            <th>Nome</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <a href="{{ route('company.show', $company) }}">
            <td>
                @if ($company->logo) 
                    <div >
                    <a   href="{{ url("storage/{$company->logo}") }}" data-caption="{{ $company->company_name}}">
                        <img class="uk-border-circle" style="width: 80px; height: 80px; background-color: rgba(240, 248, 255, 0)"  src="{{ url("storage/{$company->logo}") }}" alt="logo">
                    </a>
                    </div>
                    @else
                        <img class="uk-padding-remove" src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
                        <canvas width="300" height="100"></canvas>
                    @endif
                </td>
            <td><a class="uk-link-reset" href="{{ route('company.show', $company) }}">{{ $company->company_name }}</a></td>
            <td><a class="uk-link-reset" href="{{ route('company.show', $company) }}">{{ $company->address }}</a></td>
        
            </a>
        </tr>
    </tbody>
    @endforeach
</table>

<!-- <div class="uk-container">
    <!-- @if(Session::has('Ramo')) ->
        <div class="uk-card uk-alert-success uk-card-body" data-src="../storage/empresas/unnamed.png" uk-img>
            <p>Lista de empresas de <!-- {{Session::get('Ramo')}} -> neste endereço</p>
        <div>
        <!-- @else ->
        <div class="uk-card uk-card-default uk-card-body" >
            <!--<p>Lista de empresas de {{Session::get('Ramo')}} neste endereço </p> ->
        <div>
    <!-- @endif ->
        <div class="uk-child-width-1-3@m " uk-grid>
            @foreach ($empresas as $empresa)
            <div>
                <div class="uk-inline  uk-padding-remove">
                    @if ($empresa->logo) 
                        <img width="500" height="100" src="{{ url("storage/{$empresa->logo}") }}" alt="logo">
                    @else
                        <img width="500" height="100" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                    @endif
                    <div class="uk-overlay uk-overlay-default">
                        <p>
                            <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle uk-overlay uk-padding-remove uk-overlay-default  uk-dark" uk-grid>
                                        <div class="uk-width-auto ">
                                        <!-- <h4 class=" uk-margin-remove-bottom uk-text-center uk-padding-remove uk-light uk-accordion-title uk-position-top">{{ $empresa->name}}</h4> -->
                                        <!--  @if ($empresa->logo) 
                                                <img class="uk-border-circle" width="40" height="40" src="{{ url("storage/{$empresa->logo}") }}" alt="logo">
                                            @else
                                                <img class="uk-border-circle" width="40" height="40" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                                            @endif ->
                                        </div>
                                        <div class="uk-overlay uk-padding-remove uk-position-bottom ">
                                            <!-- <h4 class=" uk-margin-remove-bottom uk-padding-remove uk-light uk-accordion-title uk-position-top">{{ $empresa->name}}</h4> ->
                                            <h6>{{ $empresa->address}}</h6>
                                            <h6 class=" uk-margin-remove-top"><a href="{{ route('company.show', $empresa->id) }}" class="uk-button uk-text-center">{{ $empresa->company_name}}</a></h6>
                                        </div>
                                    </div>
                                </div>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
</div>
 -->
 @endsection
