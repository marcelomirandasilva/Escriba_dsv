<div class="x_panel modal-content"  id="contatos">
   <div class="x_title">
		<h2> Contatos </h2>

		<ul class="nav navbar-right panel_toolbox">
			<li>
				<a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa btn btn-pn-circulo btn-cor-padrao fa-chevron-down"></i></a>
			<li>
		</ul>
		<div class="clearfix"></div>
	</div>

	<div class="x_content" style="display: none">

		<div class="x_title" style="margin-bottom: 15px;"> Telefone  </div>
		<div class="clearfix"></div> 

			@foreach ($membro->telefones as $key =>  $telefone )

				<div class="x_panel panel_telefone1 ">            
					{{-- bloco de telefone --}}
					<div class="item form-group">
					{{--  TIPO DE TELEFONE  --}}
						<div class="col-md-5 panel_sem_margem" style="top: 4px;">
							<select id="telefones[{{$key}}][ic_telefone]"  name="telefones[{{$key}}][ic_telefone]"  
								class="form-control col-md-2 tipo-telefone"   placeholder="Tipo de telefone"   type="text" >
								@foreach($tipo_telefone as $tipo)
									@if ( $telefone->ic_telefone == $tipo)
										<option value="{{$tipo}}" selected="selected"> {{$tipo}} </option>  
									@else
										<option value="{{$tipo}}"> {{$tipo}} </option>  
									@endif
								@endforeach
							</select>
						</div>

						{{-- NUMERO DO TELEFONE  --}}
						<div class="col-md-6" style="top: 4px;">
							<input id="telefones[{{$key}}][nu_telefone]"   name="telefones[{{$key}}][nu_telefone]" class="form-control input-md telefone" 
								placeholder="(99) 9999-9999"  type="tel"
								value="{{ $telefone->nu_telefone or old('nu_telefone') }}" >
						</div>
						
						<button value="excluir_tel" data-toggle="tooltip" title="Remover o telefone" 
							class="btn btn-circulo btn-danger glyphicon 	glyphicon-trash excluir excluir_tel" selected style="display:block;">
						</button>
					</div>
					{{-- FIM bloco de telefone --}}
				</div>
			@endforeach

			<div class="x_panel panel_telefone panel_sem_margem ">            
					{{-- bloco de telefone --}}
					<div class="item form-group">
					{{--  TIPO DE TELEFONE  --}}
						<div class="col-md-5 panel_sem_margem" style="top: 4px;">
							<select id="telefones[{{$key}}][ic_telefone]"  name="telefones[{{$key}}][ic_telefone]"  
								class="form-control col-md-2 tipo-telefone"   placeholder="Tipo de telefone"   type="text" >
								@foreach($tipo_telefone as $tipo)
									@if ( $telefone->ic_telefone == $tipo)
										<option value="{{$tipo}}" selected="selected"> {{$tipo}} </option>  
									@else
										<option value="{{$tipo}}"> {{$tipo}} </option>  
									@endif
								@endforeach
							</select>
						</div>

						{{-- NUMERO DO TELEFONE  --}}
						<div class="col-md-6" style="top: 4px;">
							<input id="telefones[{{$key}}][nu_telefone]"   name="telefones[{{$key}}][nu_telefone]" class="form-control input-md telefone" 
								placeholder="(99) 9999-9999"  type="tel"
								value="{{ $telefone->nu_telefone or old('nu_telefone') }}" >
						</div>
						
						<button value="excluir_tel" data-toggle="tooltip" title="Remover o telefone" 
							class="btn btn-circulo btn-danger glyphicon 	glyphicon-trash excluir excluir_tel" selected style="display:block;">
						</button>
					</div>
					{{-- FIM bloco de telefone --}}
				</div>


			<div class="local_clone_tel"></div> {{-- Clonagem da div panel_dependentes --}}
		</div>
	</div>

   {{-- ==============================================================EMAIL ============================================ --}}

   <div class="col-md-6 ">
		<div class="clearfix"></div>
		<div class="x_title" style="margin-bottom: 15px;"> Email <div class="clearfix"></div> </div>

		<button  name="submit" value="clonar_email" class="btn-circulo btn btn-primary btn-md   pull-right  clonar_email "
			data-toggle="tooltip" title="Adiciona um Email">
			<span class="fa fa-plus">  </span>
		</button>   

		<div class="col-md-11">
			<div class="x_panel panel_emails panel_sem_margem">            
				{{-- bloco de email --}}
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
					<input id="emails[0][email]"   name="emails[0][email]"     data-cip-id="emails[0][email]"  
						class="form-control input-md " placeholder="email@servidor.com.br"  type="email" >
					</div>

					<div class="col-md-12"></div>
					<button name="submit" value="excluir_email" data-toggle="tooltip" title="Remover o email" 
						class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_email" 
						selected style="display:none;">
					</button>
				</div>
				{{-- FIM bloco de email --}}
			</div>
			<div class="local_clone_email"></div> {{-- Clonagem da div panel_emails --}}
		</div>
   </div>
</div>



















			