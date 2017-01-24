@extends('layouts.app')
@section('title')
Index
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            @include('layouts.include.menu')
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-12">
                    Aqui vai o Menu do Tasks
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-9">
        @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Tarefas
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Tarefas</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}}</a></td>
                                    <td><div>{{$user->email}}</div></td>

                                    <td>
                                        <form action="/user/{{$user->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="editar-task-{{$user->id}}" class="btn btn-primary">
                                                <i class="fa fa-btn fa-trash"></i>Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/user/{{$user->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="delete-task-{{$user->id}}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Deletar
                                            </button>
                                        </form>
                                    </td>
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
@endsection