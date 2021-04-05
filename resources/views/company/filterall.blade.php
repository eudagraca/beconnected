@extends('layouts.app')
@section('content')
<div class="uk-container">
    <!-- @if(Session::has('Ramo')) -->
        <div class="uk-card uk-alert-success uk-card-body" data-src="../storage/empresas/unnamed.png" uk-img>
            <p>Lista de empresas de <!-- {{Session::get('Ramo')}} --> neste endereço</p>
        <div>
        <!-- @else -->
        <div class="uk-card uk-card-default uk-card-body" >
            <!--<p>Lista de empresas de {{Session::get('Ramo')}} neste endereço </p> -->
        <div>
    <!-- @endif -->
        <div class="uk-child-width-1-4@m " uk-grid>
        @if(!$images->count())
           <a href="{{ route('home') }}">Voltar</a> <h4>Ainda não temos dados para sua consulta</h4>
        @endif
            @foreach ($images as $image)
            
            <div>
                <div class="uk-inline  uk-padding-remove">
                    @if ($image->imageDetail->src) 
                        <img style="width: 250px; height: 250px;" width="500" height="100" src="{{ url("storage/{$image->imageDetail->src}") }}" alt="Resultado">
                    @else
                        <img width="500" height="100" src="../storage/empresas/k0PxvXRgAia05jy9kgk85QaWyfxUH6IKZiiauvsu.jpg" alt="logo">
                    @endif
                    <div class="uk-overlay uk-overlay-default">
                        <p>
                            <div class="uk-card-header uk-padding-remove">
                                    <div class="uk-grid-small uk-flex-middle uk-overlay uk-padding-remove uk-overlay-default  uk-dark" uk-grid>
                                        <div class="uk-overlay uk-padding-remove uk-position-bottom ">
                                            <h6>{{ $image->name}}</h6><!-- <span>Preço: {{ $image->price}}</span> -->
                                            <h6 class=" uk-margin-remove-top"><a href="{{ route('company.show', $image->company_id) }}" class="uk-button uk-text-center">Ver mais detalhes</a></h6>
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
 @endsection