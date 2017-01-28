<ul class="nav nav-stacked">
	<li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Dashboard <i class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav nav-stacked collapse in" id="userMenu">
			<li class="active"> <a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<li><a href="{{ url('/pwsrolimnet') }}"><i class="glyphicon glyphicon-exclamation-sign"></i> Senhas</a></li>
			<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off"></i> Sair</a></li>
			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</ul>
	</li>
	<li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Configurações <i class="glyphicon glyphicon-chevron-right"></i></a>

		<ul class="nav nav-stacked collapse" id="menu2">
			<li><a href="{{ url('/tools') }}"><i class="glyphicon glyphicon-cog"></i> Ferramentas</a></li>
			<li><a href="{{ url('/tasks') }}"><i class="glyphicon glyphicon-th-large"></i> Tarefas</a></li>
			<li><a href="{{ url('/users') }}"><i class="glyphicon glyphicon-user"></i> Usuários</a></li>
		</ul>
	</li>
</ul>