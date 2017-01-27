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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li role="presentation" class="active">
                                    <a href="#">Tarefas Ativas
                                        <span class="badge">0</span>
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#">Taferas Completas
                                        <span class="badge">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-sm-10">
            <div class="col-sm-10">
                <!--
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cadastrar
                    </div>

                    <div class="panel-body">
                        @include('common.errors')

                        <form action="/task" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Tarefa</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i> Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                -->

                <!-- Current Tasks -->
                @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Lista de Tarefas
                            <a href="#" class="btn btn-primary pull-right">Criar nova Tarefa</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
                            <thead>
                                <th class="hidden-xs">ID</th>
                                <th>Tarefas</th>
                                <th>Ações</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                  <td class="hidden-xs">{{ $task->id }}</td>
                                  <td class="table-text"><div>{{ $task->name }}</div></td>
                                  <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>
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
</div>
@endsection