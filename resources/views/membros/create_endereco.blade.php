
<div class="x_panel modal-content">
   <div class="x_title">  Residencial </div>
   <div class="clearfix"></div>


   <div class="item form-group">
		<input type="hidden" value="Residencial" name="enderecos[0][ic_tipo_endereco]" for="enderecos[0][ic_tipo_endereco]">

		<label class="control-label col-md-1 " for="enderecos[0][no_pais]">Pais</label>
		<div class="col-md-2 ">
			<select id="no_pais0" class="form-control col-md-2" name="enderecos[0][no_pais]" placeholder="Nome do Pais" >
				@if(isset($edita))
					@foreach($paises as $pais)
						@if($pais->no_pais == $enderecos[0]->no_pais )
							<option value="{{ $pais->no_pais }}" selected="selected"> {{ $pais->no_pais }} </option>
						@else
							<option value="{{ $pais->no_pais }}"> {{ $pais->no_pais }} </option>
						@endif
					@endforeach
				@else
				@foreach($paises as $pais)
					@if ($pais->no_pais == ('Brasil'))
						<option value="{{$pais->no_pais}}" selected="selected"> {{$pais->no_pais}} </option>          
					@else 
						<option value="{{$pais->no_pais}}"> {{$pais->no_pais}} </option>  
					@endif
					@endforeach
				@endif
			</select>
		</div> 
	
		<!-- CEP-->
		<label class="col-md-1 control-label" for="enderecos[0][nu_cep]">CEP</label>
		<div class="col-md-2">
			<input id="cep1" name="enderecos[0][nu_cep]" type="text" placeholder="99.999-999" class="form-control input-md cep" 
				value="{{ $enderecos[0]->nu_cep or old('enderecos.0.nu_cep')}}" >

		</div>

		<!-- UF-->
		<label class="col-md-1 control-label" for="enderecos[0][sg_uf]">UF</label>
		<div class="col-md-1">
			<input id="sg_uf0" name="enderecos[0][sg_uf]" type="text"  class="form-control input-md uf" 
				value="{{$enderecos[0]->sg_uf or old('enderecos.0.sg_uf')}}" >
		</div>

		<!-- Município-->
		<label class="col-md-1 control-label" for="enderecos[0][no_municipio]">Município</label>
		<div class="col-md-3">
			<input id="no_municipio0" name="enderecos[0][no_municipio]" type="text" class="form-control input-md" 
				value="{{$enderecos[0]->no_municipio or old('enderecos.0.no_municipio')}}" >
		</div>
	</div>
	<div class="item form-group">
		{{-- Bairro --}}
		<label class="col-md-1 control-label" for="enderecos[0][no_bairro]">Bairro</label>
		<div class="col-md-3">
			<input id="no_bairro0" name="enderecos[0][no_bairro]" type="text" placeholder="Centro" class="form-control input-md"
				value="{{$enderecos[0]->no_bairro or  old('enderecos.0.no_bairro')}}" >
		</div>

		<!-- Logradouro ...Av...Rua....etc-->
		<label class="col-md-1 control-label" for="enderecos[0][no_logradouro]">Logradouro</label>
		<div class="col-md-7">
			<input id="no_logradouro0" name="enderecos[0][no_logradouro]" type="text" placeholder="Av, Rua, Travessa..." 
				class="form-control input-md"
				value="{{$enderecos[0]->no_logradouro or  old('enderecos.0.no_logradouro')}}" >
		</div>

	</div>
	<div class="item form-group">
		<!-- Número da residência-->
		<label class="col-md-1 control-label" for="enderecos[0][nu_logradouro]">Numero</label>
		<div class="col-md-2">
			<input id="nu_logradouro0" name="enderecos[0][nu_logradouro]" type="text" placeholder="999" class="form-control input-md"
				value="{{$enderecos[0]->nu_logradouro or old('enderecos.0.nu_logradouro')}}" >
		</div>

		{{-- Complemento --}}
		<label class="col-md-2 control-label" for="enderecos[0][de_complemento]">Complemento</label>
		<div class="col-md-3">
			<input id="de_complemento0" name="enderecos[0][de_complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md"
				value="{{$enderecos[0]->de_complemento or old('enderecos.0.de_complemento')}}" >
		</div>
	</div>   

	{{-- ============================================================================== --}}
	<br>
	<div class="x_title">  Comercial </div>
	<div class="clearfix"></div>

	<div class="item form-group">
		<input type="hidden" value="Comercial" name="enderecos[1][ic_tipo_endereco]" for="enderecos[1][ic_tipo_endereco]">

		<label class="control-label col-md-1 " for="enderecos[1][no_pais]">Pais</label>
		<div class="col-md-2 ">
			<select id="no_pais1" class="form-control col-md-2" name="enderecos[1][no_pais]" placeholder="Nome do Pais" >
				@foreach($paises as $pais)
					@if ($pais->no_pais == ('Brasil'))
						<option value="{{$pais->no_pais}}" selected="selected"> {{$pais->no_pais}} </option>          
					@else 
						<option value="{{$pais->no_pais}}"> {{$pais->no_pais}} </option>  
					@endif
				@endforeach
			</select>
		</div> 
		
		<!-- CEP-->
		<label class="col-md-1 control-label" for="enderecos[1][nu_cep]">CEP</label>
		<div class="col-md-2">
			<input id="cep1" name="enderecos[1][nu_cep]" type="text" placeholder="99.999-999" class="form-control input-md cep" 
				value="{{ $enderecos[1]->nu_cep or old('enderecos.1.nu_cep')}}" >
		</div>

		<!-- UF-->
		<label class="col-md-1 control-label" for="enderecos[1][sg_uf]">UF</label>
		<div class="col-md-1">
			<input id="sg_uf1" name="enderecos[1][sg_uf]" type="text" class="form-control input-md uf"
				value="{{$enderecos[1]->sg_uf or old('enderecos.1.sg_uf')}}" >
		</div>

		<!-- Município-->
		<label class="col-md-1 control-label" for="enderecos[1][no_municipio]">Município</label>
		<div class="col-md-3">
			<input id="no_municipio1" name="enderecos[1][no_municipio]" type="text" class="form-control input-md" 
				value="{{$enderecos[1]->no_municipio or old('enderecos.1.no_municipio')}}" >
		</div>
	</div>

	<div class="item form-group">
		{{-- Bairro --}}
		<label class="col-md-1 control-label" for="enderecos[1][no_bairro]">Bairro</label>
		<div class="col-md-3">
			<input id="no_bairro1" name="enderecos[1][no_bairro]" type="text" placeholder="Centro" class="form-control input-md"
				value="{{$enderecos[1]->no_bairro or  old('enderecos.1.no_bairro')}}" >
		</div>

		<!-- Logradouro ...Av...Rua....etc-->
		<label class="col-md-1 control-label" for="enderecos[1][no_logradouro]">Logradouro</label>
		<div class="col-md-7">
			<input id="no_logradouro1" name="enderecos[1][no_logradouro]" type="text" placeholder="Av, Rua, Travessa..." 
				class="form-control input-md"
				value="{{$enderecos[1]->no_logradouro or  old('enderecos.1.no_logradouro')}}" >
		</div>

	</div>

	<div class="item form-group">
		<!-- Número da residência-->
		<label class="col-md-1 control-label" for="enderecos[1][nu_logradouro]">Numero</label>
		<div class="col-md-2">
			<input id="nu_logradouro1" name="enderecos[1][nu_logradouro]" type="text" placeholder="999" class="form-control input-md"
				value="{{$enderecos[1]->nu_logradouro or old('enderecos.1.nu_logradouro')}}" >
		</div>

		{{-- Complemento --}}
		<label class="col-md-2 control-label" for="enderecos[1][de_complemento]">Complemento</label>
		<div class="col-md-3">
			<input id="de_complemento1" name="enderecos[1][de_complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md"
				value="{{$enderecos[1]->de_complemento or old('enderecos.1.de_complemento')}}" >
		</div>
	</div>
</div>
