@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            @include('layouts.include.menu')
        </div>
        <!--<div class="col-sm-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Status Geral</h4>
                        </div>
                        <div class="panel panel-default">


                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Gerador de Senha Segura</h4></div>
                            <div class="panel-body">
                                <p>Utilize o Gerador de Senha abaixo para criar uma senha muito segura e praticamente impossível de ser adivinhada.
                                    Marque as opções desejadas e clique em "Gerar".</p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="glyphicon glyphicon-plus-sign pull-right"></i>
                                        <h4>Cadastrar</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form action="/pwsrolimnet" method="POST" class="form form-vertical">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        <div class="control-group">
                                            <label>Nome</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="name" required placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="control-group ">
                                            <label>CPF</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="cpf" placeholder="___.___.___-__" data-mask="999.999.999-99" max="11">
                                            </div>
                                            <label>CNPJ</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" name="cnpj" placeholder="__.___.___/____-__" data-mask="99.999.999/9999-99" max="14">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Contrato</label>
                                            <div class="controls">
                                                <input type="number" class="form-control" name="contract" min="0" max="8" required placeholder="Contrato">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Tipo</label>
                                            <div class="controls">
                                                <select name="equipments" class="form-control">
                                                    <option>---</option>
                                                    <option value="1">Mikrotik</option>
                                                    <option value="2">Ubiquiti</option>
                                                    <option value="3">FiberHome</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label></label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Tamanho</span>
                                                <input class="form-control" name="tamanho-number" type="number" min="8" max="32" value="8" required="required" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <div class="well well-lg">                                
                                                <div class="control-group">
                                                    <input type="text" class="form-control" name="password" id="password" placeholder="Sua nova senha">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            {!! app('captcha')->display($attributes = [], $lang = null); !!}
                                        </div>
                                        
                                        <div class="control-group">
                                            <label></label>
                                            <div class="controls">
                                                <button type="button" class="btn btn-primary" id="bt_gerar_senha">Gerar</button>
                                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                                <button type="reset" class="btn btn-default">Limpar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-primary col-sm-3" disabled>
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <br> Cadastrar
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3" disabled>
                                    <i class="glyphicon glyphicon-cloud"></i>
                                    <br> Cloud
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3" disabled>
                                    <i class="glyphicon glyphicon-cog"></i>
                                    <br> Ferramentas
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#modal-duvida">
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                    <br> Dúvida?
                                </a>
                            </div>

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>Recentes</h3>
                                </div>
                                <div class="panel-body">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
                                        <thead>
                                            <th class="hidden-xs">ID</th>
                                            <th>Nome</th>
                                            <th>Senha</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-duvida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Duvida? 😊</h4>
            </div>
            <div class="modal-body">
                <h3>O que é uma senha forte?</h3>
                <p>Teste.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
