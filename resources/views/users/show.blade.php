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
								<li role="presentation" class="">
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
			<div class="row">
				<div class="col-sm-10">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="content">
								<h2 class="header">
									{{$user->name}}
									<span class="pull-right">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="ticket-edit-modal">Editar</button>
										<a href="http://ticketit.kordy.info/tickets/1" class="btn btn-danger deleteit" form="delete-ticket-1" node="#">Delete</a>
									</span>
								</h2>
								<div class="panel well well-sm">
									<div class="panel-body">
										<div class="col-md-12">
											<div class="col-md-6">
												<p><strong>ID</strong>: {{$user->id}}</p>
												<p><strong>E-mail</strong>: {{$user->email}}</p>
												<!--<p><strong>Senha</strong>: {{$user->password}}</p>-->
											</div>
											<div class="col-md-6">
												<p><strong>Tipo</strong>:</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop