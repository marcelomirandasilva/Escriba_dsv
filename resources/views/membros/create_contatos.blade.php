<div class="x_panel modal-content panel_sem_margem" >
   <div class="clearfix"></div>
   <div class="col-md-6 ">
      <div class="clearfix"></div>
      <div class="x_title" style="margin-bottom: 15px;"> Telefones <div class="clearfix"></div> </div>

      <div class="col-md-11">
         <div class="x_panel panel_telefone panel_sem_margem ">            

				{{-- bloco de telefone --}}
				<div class="item form-group">
					@for ($i = 0; $i < 6; $i++)
						
						{{--  TIPO DE TELEFONE  --}}
						<div class="col-md-5 panel_sem_margem" style="top: 4px;">
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
						
					@endfor
			</div>
			{{-- FIM bloco de telefone --}}
         </div>
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