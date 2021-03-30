@extends('layouts.admin')

@section('content')
<div class="uk-container uk-container-large">
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
        <div>
            <div class="uk-card uk-card-default">
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
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
                                    <td>{{  date('d/m/Y H:i', strtotime($user->last_login))  }}</td>
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