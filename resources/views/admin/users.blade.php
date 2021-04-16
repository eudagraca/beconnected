@extends('layouts.admin')

@section('content')
<div class="uk-container uk-container-large">
    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    Lista de usuários da plataforma/<span><a class="uk-text-meta" href="{{ route('users') }}"> Normal</a></span>   /  
                    <span><a class="uk-text-meta" href="{{ route('users') }}"> Empresa</a></span>
                </div>
                <div class="uk-card-body">
                    <table class="uk-table uk-table-striped uk-table-justify uk-table-divider">
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
    </div>
</div>
@endsection