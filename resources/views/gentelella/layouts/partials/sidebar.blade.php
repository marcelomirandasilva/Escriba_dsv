<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="clearfix"></div>
		<!-- menu profile quick info
		<div class="profile">
			<div class="profile_pic">
				<img src="{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of { Auth::user()->name }}" class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Bem-vindo,</span>
				<h2>{ Auth::user()->name }}</h2>
			</div>
		</div>

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
			<div class="menu_section">
				<ul class="nav side-menu">
					<li>
						<a><i class="fa fa-pencil"></i> Secretaria <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li>
								<li><a href="{{ url('/membros') }}">Membros</a></li>
							</li>

							<li>
								<a>Sessões<span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li class="sub_menu">
										<a href="{{ url('/sessoes') }}">Sessões</a>
									</li>
									<li>
											<a href="{{ url('/calendario') }}">Calendário</a>
									</li>
									<li>
										<a href="#">Atas</a>
									</li>
								</ul>
							</li>
							<li><a href="{{ url('/lojas') }}">Lojas</a></li>
						</ul>
					</li>
				</ul>
		
				<ul class="nav side-menu">
					<li>
						<a><i class="fa fa-key"></i> Tesouraria <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li>
								<a href="#">Level One</a>
								<li>
									<a>Level One<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li class="sub_menu">
											<a href="#">Level Two</a>
										</li>
										<li>
											<a href="#">Level Two</a>
										</li>
										<li>
											<a href="#">Level Two</a>
										</li>
									</ul>
								</li>
							</li>
						</ul>
					</li>
				</ul>

				<ul class="nav side-menu">
					<li>
						<a><i class="glyphicon glyphicon-pawn" style="margin-right: 10px" ></i> Chancelaria <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li>
								<a href="#">Level One</a>
								<li>
									<a>Level One<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li class="sub_menu">
											<a href="#">Level Two</a>
										</li>
										<li>
											<a href="#">Level Two</a>
										</li>
										<li>
											<a href="#">Level Two</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Level One</a>
								</li>
							</ul>

							{{-- @if(Auth::user()->admin == "Master") --}}
						
							<li><a><i class="fa fa-cog"></i>Configurações<span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									@if((Auth::user()->acesso == 'ADMINISTRADOR'))
									<li><a href="{{ url('/usuarios') }}">Usuários</a></li>
									@endif
									<li><a href="{{ url('senha') }}">Alerar Senha</a></li>
									<li><a href="{{ url('perfil') }}">Alerar Perfil</a></li>
								</ul>
							</li>
							{{-- @endif --}}

							<li><a href="{{ url('pessoas/relatorios') }}"><i class=" fa fa-clipboard"></i>Relatórios</a>
								{{-- <ul class="nav child_menu">
									<li><a href="{{ url('#') }}">Geral</a></li>
									<li><a href="{{ url('#') }}">Por Idade</a></li>
									<li><a href="{{ url('#') }}">Por Sexo</a></li>
									<li><a href="{{ url('#') }}">Por Dependentes</a></li>
									<li><a href="{{ url('#') }}">Por Bairro</a></li>
								</ul> --}}
							</li>
							
							<br>
							<div class="menu_section">
								<ul class="nav side-menu">
									<li>
										<a href="javascript:void(0)">
											<i class="fa fa-laptop"></i>
											One link
											<span class="label label-success pull-right">Flag</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					
					
					<!-- /menu footer buttons -->
				</div>
			</div>
		</div>
	
	
