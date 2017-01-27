@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            @include('layouts.include.menu')
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-md-12">
                    Aqui vai o Menu do Tasks
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-10">
            <div class="col-sm-10">
                @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Lista de Usuários
                            <a href="#" class="btn btn-primary pull-right">Criar novo Usuário</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Criado</th>
                                    <th>Atualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->id}}</a></td>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}} </a></td>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->email}} </a></td>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->created_at}} </a></td>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->updated_at}} </a></td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
