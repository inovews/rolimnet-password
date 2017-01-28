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
                @if (count($pwsrolimnet) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Lista de Senhas
                            <a href="#" class="btn btn-primary pull-right">Criar nova Senha</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>CNPJ</th>
                                    <th>Contrato</th>
                                    <th>Senha</th>
                                    <!--<th>Criado</th>
                                    <th>Atualizado</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pwsrolimnet as $pwrolimnet)
                                <tr>
                                    <td><a href="{{action('PasswordRolimnetController@show', [$pwrolimnet->id])}}">{{$pwrolimnet->id}}</a></td>
                                    <td><a href="{{action('PasswordRolimnetController@show', [$pwrolimnet->id])}}">{{$pwrolimnet->name}} </a></td>
                                    <td>{{$pwrolimnet->cpf}}</td>
                                    <td>{{$pwrolimnet->cnpj}}</td>
                                    <td>{{$pwrolimnet->contract}}</td>
                                    <td>{{$pwrolimnet->password}}</a></td>
                                    <!--<td>{{$pwrolimnet->created_at}}</a></td>
                                    <td>{{$pwrolimnet->updated_at}}</a></td>-->
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