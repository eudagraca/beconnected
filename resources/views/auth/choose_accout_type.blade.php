@extends('layouts.app')
{{-- @section('background')
{{'uk-background-primary' }}
@endsection --}}
@section('content')
<div class="uk-container">
    <div class="uk-section uk-section-small uk-tile-default">
        <div class="uk-margin-remove uk-padding-remove">
            <ul class="uk-flex-center" uk-tab>
                <li><h4 class="uk-text-muted  uk-text-center">Criar conta
                </h4></li>
            </ul>
        </div>

        <div class="uk-margin-medium-top">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#" class="uk-text-capitalize">Individual</a></li>
                <li><a href="#" class="uk-text-capitalize">Empresa</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-card uk-card-body  uk-text-center">
                        <h5 class="uk-text-muted uk-text-bold ">Conta individual</h5>
                            <p>Esta opção é para os usuário que desejam visitar as nossas empresas</p>
                        <a href="{{ route('register', ['query' => 'user']) }}" class=" uk-button uk-button-default uk-border-rounded">Seguinte</a>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-body uk-card-hover uk-text-center">
                        <h5 class="uk-text-muted uk-text-bold">Conta empresarial</h5>
                            <p>Esta opção é para as empresas que desejam juntar-se ao Be connected</p>
                            <ul class="uk-flex-center" uk-tab>
                                <!-- <li class="uk-active"><a href="#" class="uk-text-capitalize">Sobre</a></li> -->
                                <li class="uk-active"><a href="#" class="uk-text-capitalize">Plano</a></li>
                                <li><a href="#" class="uk-text-capitalize">Politícas</a></li>
                            </ul>

                            <ul class="uk-switcher uk-margin">
                                <!-- <li></li> -->
                                <li>
                                    <div>
                                        <div class="uk-card-body">
                                        <h5 class="uk-text-muted uk-text-bold">Nossos planos</h5>
                                            O acesso a plataforma Be connected por parte das empresas, esta sujeito a aplicação de taxas e politacas que visam cotribuir na melhoria da qualidade dos serviços aqui fornecidos, com isso, a Be connected agradece desde já colaboração de todas empresas que desejam juntar-se nós na erra digital<br><br><br><br>
                                            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                                                <div>
                                                    <div class="uk-card uk-card-default uk-card-body">
                                                        <h4 class="uk-text-muted uk-text-bold">Free</h4>
                                                        <p>
                                                            A Be connected oferece um plano free, com duração de 30 dias para efeito de teste. <br><br><br>
                                                            <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-default uk-border-rounded">Assinar</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card uk-card-default uk-card-body">
                                                        <h4 class="uk-text-muted uk-text-bold">PME (1/mês)</h4>
                                                        <p> 
                                                            A Be connected oferece um plano para PME, aplicando uma taxa simbolica de 200 MZN/mês. <br><br>
                                                            <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-primary uk-border-rounded">Assinar</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card uk-card-default uk-card-body">
                                                        <h4 class="uk-text-muted uk-text-bold">Grandes (1/mês)</h4>
                                                        <p>
                                                            A Be connected oferece um plano para Grandes empresas, aplicando uma taxa simbolica de 500 MZN/mês. <br><br>
                                                            <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-primary uk-border-rounded">Assinar</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <!-- <a href="{{ route('register', ['query' => 'company']) }}" class="uk-button uk-button-default uk-border-rounded">Assinar</a> -->
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
@endsection
