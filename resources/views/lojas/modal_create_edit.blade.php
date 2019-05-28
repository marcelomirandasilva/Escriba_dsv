<div class="modal fade" id="cad_loja" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="alert alert-danger" style="display: none" role="alert">
				This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
			</div>

			<div class="modal-body">

				<form id="form_modal_" method="post" action="#"  >

					{{ csrf_field() }}

					<div class="item form-group row">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="co_titulo">
							Título <span class="required">*</span>
						</label>
						<div class="col-md-2 ">
							<input id="co_titulo" class="form-control col-md-2"  name="co_titulo" placeholder="ARLS" required="required" type="text" style="text-transform: uppercase;" autofocus>
						</div>
					</div>

					<div class="item form-group row">
						<label class="control-label col-md-2 " for="no_loja">
							Nome 
							<span class="required">*</span>
						</label>
						<div class="col-md-9">
							<input type="no_loja" id="no_loja" name="no_loja" placeholder="Nome da Loja" required="required" class="form-control" type="text">
						</div>
					</div>
					<div class="item form-group row">
						<label class="control-label col-md-2" for="nu_loja">
							Número 
							<span class="required">*</span>
						</label>
						<div class="col-md-2 " >
							<input type="nu_loja" id="nu_loja" name="nu_loja" placeholder="00000" required="required" class="form-control  " type="number" min="0" max="9999999" step="1">
						</div>
					</div>

					<div class="item form-group row">
						<label class="control-label col-md-2 " for="potencia_id">Potência*</label>
						<div class="col-md-9" >
							<select id="potencia_id"  class="form-control col-md-5 "  name="potencia_id"  placeholder="Nome da Potência" type="text" data-live-search="true" style="width:90%;">
								@foreach($potencias as $potencia)
									@if ($potencia->no_potencia == ('Grande Oriente do Brasil'))
										<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
									@else 
										<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="item form-group row">
						<label class="control-label col-md-2 " for="ic_rito">Rito*</label>
						<div class="col-md-5 ">
							<select id="ic_rito" class="form-control col-md-2" name="ic_rito" placeholder="Rito praticado" type="text">
								@foreach($ritos as $rito)
									@if ($rito == ('Brasileiro'))
										<option value="{{$rito}}" selected="selected"> {{$rito}} </option>          
									@else 
										<option value="{{$rito}}"> {{$rito}} </option>  
									@endif
								@endforeach
							</select>
						</div>
					</div>
				</form>  
			</div>
			<div class="modal-footer">
				<div class="col-md-11 ">
					<button type="button" class="envia_nova_loja btn btn-success" data-toggle="tooltip" title="Confirma a operação"> 
						Confirma    
					</button>

					<button id="fecha_modal_cad_loja" type="button" data-toggle="tooltip" class="btn btn-danger btn_acao" title="Cancela e retorna a tela anterior" data-dismiss="modal">
						Cancela	
					</button>
				</div>
			</div>
		</div>
	</div> 

