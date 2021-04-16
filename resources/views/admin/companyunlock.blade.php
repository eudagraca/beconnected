@extends('layouts.admin')

@section('content')
<div class="uk-container uk-container-large">
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Lista de empresas da plataforma / 
                <span><a class="uk-text-meta" href="{{ route('Companyunlock') }}"> Activas</a></span>
                / <span><a class="uk-text-meta" href="{{ route('Companylock') }}"> Bloqueadas</a></span>
                </div>
                <div class="uk-card-body">
                    <table class="uk-table uk-table-striped uk-table-justify uk-table-divider">
                        <thead>
                            <tr>
                                <th>logo</th>
                                <th>Nome</th>
                                <th>Contacto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $Company)
                                <tr>
                                    <td>
                                        @if ($Company->logo) 
                                            <div >
                                            <a href="{{ url("storage/{$Company->logo}") }}" data-caption="{{ $Company->company_name}}">
                                                <img class="uk-border-circle" style="width: 50px; height: 50px; background-color: rgba(240, 248, 255, 0)"  src="{{ url("storage/{$Company->logo}") }}" alt="logo">
                                            </a>
                                            </div>
                                            @else
                                                <img class="uk-border-circle" style="width: 200px; height: 200px; background-color: rgba(240, 248, 255, 0)" alt="perfil"  uk-img data-src="../storage/photos/Deafult-Profile-Pitcher.png" />
                                        @endif
                                    </td>
                                    <td>{{ $Company->company_name }}</td>
                                    <td>{{ $Company->phone }}</td>
                                    <td>
                                        <a class="uk-button uk-button-primary uk-button-small uk-text-capitalize" href="{{ route('updatelock', $Company->id )}}" uk-toggle uk-icon="icon: lock">lock</a>
                                        <!-- <form action="{{ route('updatelock', $Company->id)}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="text" value="0" name="status" hidden >
                                            <button class="uk-button  uk-button-danger uk-button-small uk-text-capitalize" type="submit" uk-icon="icon: trash">unlock</button>     
                                        </form> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection