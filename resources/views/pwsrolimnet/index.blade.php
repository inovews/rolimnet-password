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
        <div class="col-sm-10"></div>
    </div>
</div>
@endsection