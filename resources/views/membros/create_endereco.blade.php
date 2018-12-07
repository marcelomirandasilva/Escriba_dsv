
<div class="x_panel modal-content">
   <div class="x_title">  Residencial </div>
   <div class="clearfix"></div>

   <div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-1 " for="pais_id_res">Pais</label>
				<select id="pais_id_res" class="form-control col-md-2" name="pais_id_res" placeholder="Nome do Pais" >
					@if(isset($edita))
						@foreach($paises as $pais)
							@if($pais->id == $membro->pais_id_res )
								<option value="{{ $pais->id }}" selected="selected"> {{ $pais->no_pais }} </option>
							@else
								<option value="{{ $pais->id }}"> {{ $pais->no_pais }} </option>
							@endif
						@endforeach
					@else
						@foreach($paises as $pais)
							@if ($pais->no_pais == ('Brasil'))
								<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
							@else 
								<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
							@endif
						@endforeach
					@endif
				</select>
			</div> 
		
			<div class="col-md-2">
				<label class="col-md-1 control-label" for="nu_cep_res">CEP</label>
				<input id="nu_cep_res" name="nu_cep_res" type="text" placeholder="99.999-999" class="form-control input-md cep" 
					value="{{ $membro->nu_cep_res or old('nu_cep_res')}}" >
			</div>
			<div class="col-md-1">
				<label class="col-md-1 control-label" for="sg_uf_res">UF</label>
				<input id="sg_uf_res" name="sg_uf_res" type="text"  class="form-control input-md uf" 
					value="{{$membro->sg_uf_res or old('sg_uf_res')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-1 control-label" for="no_municipio_res">Município</label>
				<input id="no_municipio_res" name="no_municipio_res" type="text" class="form-control input-md" 
					value="{{$membro->no_municipio_res or old('no_municipio_res')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-1 control-label" for="no_bairro_res">Bairro</label>
				<input id="no_bairro_res" name="no_bairro_res" type="text" placeholder="Centro" class="form-control input-md"
					value="{{$membro->no_bairro_res or  old('no_bairro_res')}}" >
			</div>
		</div>
	</div>
	<div class="item form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="col-md-1 control-label" for="no_logradouro_res">Logradouro</label>
				<input id="no_logradouro_res" name="no_logradouro_res" type="text" placeholder="Av, Rua, Travessa..." 
					class="form-control input-md"
					value="{{$membro->no_logradouro_res or  old('no_logradouro_res')}}" >
			</div>
			<div class="col-md-2">
				<label class="col-md-12 control-label" for="nu_logradouro_res">Numero</label>
				<input id="nu_logradouro_res" name="nu_logradouro_res" type="text" placeholder="999" class="form-control input-md"
					value="{{$membro->nu_logradouro_res or old('nu_logradouro_res')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-2 control-label" for="de_complemento_res">Complemento</label>
				<input id="de_complemento_res" name="de_complemento_res" type="text" placeholder="Ap., Fundos,..." class="form-control input-md"
					value="{{$membro->de_complemento_res or old('de_complemento_res')}}" >
			</div>
		</div>
	</div>
	

	{{-- ============================================================================== --}}
	<br>
	<div class="x_title">  Comercial </div>
	<div class="clearfix"></div>

	<div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-1 " for="pais_id_com">Pais</label>
				<select id="pais_id_com" class="form-control col-md-2" name="pais_id_com" placeholder="Nome do Pais" >
					@if(isset($edita))
						@foreach($paises as $pais)
							@if($pais->id == $membro->pais_id_com )
								<option value="{{ $pais->id }}" selected="selected"> {{ $pais->no_pais }} </option>
							@else
								<option value="{{ $pais->id }}"> {{ $pais->no_pais }} </option>
							@endif
						@endforeach
					@else
						@foreach($paises as $pais)
							@if ($pais->no_pais == ('Brasil'))
								<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
							@else 
								<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
							@endif
						@endforeach
					@endif
				</select>
			</div> 
		
			<div class="col-md-2">
				<label class="col-md-1 control-label" for="nu_cep_com">CEP</label>
				<input id="nu_cep_com" name="nu_cep_com" type="text" placeholder="99.999-999" class="form-control input-md cep" 
					value="{{ $membro->nu_cep_com or old('nu_cep_com')}}" >
			</div>
			<div class="col-md-1">
				<label class="col-md-1 control-label" for="sg_uf_com">UF</label>
				<input id="sg_uf_com" name="sg_uf_com" type="text"  class="form-control input-md uf" 
					value="{{$membro->sg_uf_com or old('sg_uf_com')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-1 control-label" for="no_municipio_com">Município</label>
				<input id="no_municipio_com" name="no_municipio_com" type="text" class="form-control input-md" 
					value="{{$membro->no_municipio_com or old('no_municipio_com')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-1 control-label" for="no_bairro_com">Bairro</label>
				<input id="no_bairro_com" name="no_bairro_com" type="text" placeholder="Centro" class="form-control input-md"
					value="{{$membro->no_bairro_com or  old('no_bairro_com')}}" >
			</div>
		</div>
	</div>
	<div class="item form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="col-md-1 control-label" for="no_logradouro_com">Logradouro</label>
				<input id="no_logradouro_com" name="no_logradouro_com" type="text" placeholder="Av, Rua, Travessa..." 
					class="form-control input-md"
					value="{{$membro->no_logradouro_com or  old('no_logradouro_com')}}" >
			</div>
			<div class="col-md-2">
				<label class="col-md-12 control-label" for="nu_logradouro_com">Numero</label>
				<input id="nu_logradouro_com" name="nu_logradouro_com" type="text" placeholder="999" class="form-control input-md"
					value="{{$membro->nu_logradouro_com or old('nu_logradouro_com')}}" >
			</div>
			<div class="col-md-3">
				<label class="col-md-2 control-label" for="de_complemento_com">Complemento</label>
				<input id="de_complemento_com" name="de_complemento_com" type="text" placeholder="Ap., Fundos,..." class="form-control input-md"
					value="{{$membro->de_complemento_com or old('de_complemento_com')}}" >
			</div>
		</div>
	</div>
</div>
