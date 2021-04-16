@extends('layouts.admin')

@section('content')
<div class="uk-container uk-container-large">
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <span class="statistics-text">Novos usuários</span><br />
                <span class="statistics-number">
                    14.164
                    <span class="uk-label uk-label-success">
                        8% <span class="ion-arrow-up-c"></span>
                    </span>
                </span>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <span class="statistics-text">Website Traffic</span><br />
                <span class="statistics-number">
                    123.238
                    <span class="uk-label uk-label-danger">
                        13% <span class="ion-arrow-down-c"></span>
                    </span>
                </span>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <span class="statistics-text">Total Invoices</span><br />
                <span class="statistics-number">
                    2.316
                    <span class="uk-label uk-label-success">
                        37% <span class="ion-arrow-up-c"></span>
                    </span>
                </span>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <span class="statistics-text">Total Income</span><br />
                <span class="statistics-number">
                    6.384€
                    <span class="uk-label uk-label-success">
                        26% <span class="ion-arrow-up-c"></span>
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
        <div>
            <!-- <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Website Traffic
                </div>
                <div class="uk-card-body">
                    <canvas id="chart1"></canvas>
                </div>
            </div> --><!-- <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Lista de usuários da plataforma
                </div>
                <div class="uk-card-body">
                    <table class="uk-table uk-table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuário</th>
                                <th>Email</th>
                                <th>Data de criação</th>
                                <th>Ultimo acesso</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
                                    <td>{{  date('d/m/Y H:i', strtotime($user->last_login))  }}</td>
                                    <td>
                                    <a class="uk-button uk-button-primary uk-button-small uk-text-capitalize" href="#modal-sections7" uk-toggle uk-icon="icon: lock"></a>
                                    <form action="{{ route('user.destroy', $user->id)}}" method="post">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="uk-button  uk-button-danger uk-button-small uk-text-capitalize" type="submit" uk-icon="icon: trash"></button>     
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Website Traffic
                </div>
                <div class="uk-card-body">
                    <canvas id="chart1"></canvas>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Website Traffic
                </div>
                <div class="uk-card-body">
                    <canvas id="chart2"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection