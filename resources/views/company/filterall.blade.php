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
                    @if ($image->imageDetail) 
                        <img style="width: 100%; height: 250px; border-radius: 10px;" width="500" height="100" src="{{ url("storage/{$image->imageDetail->src}") }}" alt="Resultado">
                    @else
                        <img style="width: 100%; height: 250px; border-radius: 10px;" width="500" height="100" src="{{ asset('storage/Company/2Yj3PEjVBMlc3WthJXgyRrWJt8hDiLUMXVYyJjJX.jpg')}}" alt="logo">
                    @endif
                    <br><br><br><br>
                    <div class="uk-overlay uk-overlay-default">
                        <div class="uk-card-header uk-padding-remove">
                            <div class="uk-grid-small uk-flex-middle uk-overlay uk-padding-remove uk-overlay-default  uk-dark" uk-grid>
                                <div class="uk-overlay uk-padding-remove uk-inline uk-position-bottom ">
                                    <h4 class="uk-text-muted">{{ $image->name}}</h4><span class="uk-float-right"> <h6>{{ $image->price }} MZN </h6></span>
                                    <button class="uk-button uk-button-primary uk-padding-remove uk-margin-remove-top  uk-button-small"><a href="{{ route('company.show', $image->company) }}" class="uk-button uk-text-center">CONTACTAR EMPRESA</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
</div>
 @endsection