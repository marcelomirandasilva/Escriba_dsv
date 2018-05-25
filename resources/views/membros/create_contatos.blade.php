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
		<div class="col-md-6">
			<div class="x_title" style="margin-bottom: 15px;"> Telefone  </div>
			<div class="clearfix"></div> 
			{{-- bloco de telefone --}}
			<div class="item form-group">
				@for ($i = 0; $i < 6; $i++)
					<div class="row" style="padding-top: 1px; padding-bottom: 1px;">
						{{--  TIPO DE TELEFONE  --}}
						<div class="col-md-5" style="top: 4px;">
							<select id="telefones[{{ $i }}][ic_telefone]"  name="telefones[{{ $i }}][ic_telefone]"  
								data-cod="{{ $i }}"
								class="form-control col-md-2 tipo-telefone"   placeholder="Tipo de telefone"   type="text" >
								<option value=""  selected style="color: #ccc;"> --- </option>

								@if (isset($edita)) 
									@if(isset($membro->telefones[$i]['ic_telefone']))
										@foreach($tipo_telefone as $tipo)
											@if ( $membro->telefones[$i]['ic_telefone'] == $tipo)
												<option value="{{$tipo}}" selected="selected">{{$tipo}}</option>
											@else
												<option value="{{$tipo}}">{{$tipo}}</option>  
											@endif
										@endforeach
									@endif
								@else
									@foreach($tipo_telefone as $tipo)
										<option value="{{$tipo}}"> {{$tipo}} </option>  
									@endforeach
								@endif


							</select>
						</div>
					
						{{-- NUMERO DO TELEFONE  --}}
						<div class="col-md-6" style="top: 4px;">
							<input id="telefones[{{ $i }}][nu_telefone]"   name="telefones[{{ $i }}][nu_telefone]"     
								class="form-control input-md telefone" placeholder="(99) 9999-9999" type="tel" 
								@if (isset($edita))
									value="{{  $telefones[$i]['nu_telefone'] or null  }}" 
								@else
									value="{{  old('telefones[$i][nu_telefone]')  }}" 
								@endif
							>
						</div>
					</div>	
				@endfor
		
			{{-- FIM bloco de telefone --}}
         </div>
		</div>
   
   	{{-- ==============================================================EMAIL ============================================ --}}

		<div class="col-md-6 "  >
			<div class="clearfix"></div>
			<div class="x_title" style="margin-bottom: 15px;"> Emails <div class="clearfix"></div> </div>

			<div class="col-md-11">
				<div class="x_panel panel_emails panel_sem_margem">            
					{{-- bloco de email --}}
					<div class="form-group">
						@for ($j = 0; $j < 6; $j++)					
							<div class="col-md-11" style="top: 4px;">
								<input id="emails[0][email]"   name="emails[0][email]"     data-cip-id="emails[0][email]"  
										class="form-control input-md " placeholder="email@servidor.com.br"  type="email" >
							</div>
						@endfor

					</div>
					{{-- FIM bloco de email --}}
				</div>

			</div>

		</div>
	</div>
</div>		