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
						<li><a href="{{ url('/visitantes') }}">Visitantes</a></li>
					</li>
					<li>
						<li><a href="{{ url('/candidatos') }}">Candidatos</a></li>
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
					<li>
						<li><a href="{{ url('/lojas') }}">Lojas</a></li>
					</li>
				</ul>
			</li>
		
			
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
							</ul>
						</li>
					</li>
				</ul>
			</li>
			
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
					</li>
				</ul>
			</li>

			{{-- @if(Auth::user()->admin == "Master") --}}
		
			<li><a><i class="fa fa-cog"></i>Configurações<span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					@if((Auth::user()->acesso == 'ADMINISTRADOR'))
						<li><a href="{{ url('/usuarios') }}">Usuários</a></li>
						<li><a href="{{ url('/configs') }}">Loja</a></li>
					@endif
					<li><a href="{{ url('senha') }}">Alerar Senha</a></li>
					<li><a href="{{ url('perfil') }}">Alerar Perfil</a></li>
				</ul>
			</li>
			{{-- @endif --}}

		</ul>
		<!-- /sidebar menu -->
	</div>
</div>


