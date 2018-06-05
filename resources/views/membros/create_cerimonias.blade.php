<div class="x_panel modal-content"  id="cerimonias">
   <div class="x_title">
		<h2> Cerimônias </h2>

		<ul class="nav navbar-right panel_toolbox">
			<li>
				<a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa btn btn-pn-circulo btn-cor-padrao fa-chevron-down"></i></a>
			<li>
		</ul>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_content" {{-- style="display: none --}}">

		<div class="item form-group">
			<div class="row">
				<input type="hidden" name="cerimonias[0][ic_cerimonia]" value="Iniciação">
				<div class="col-md-2 ">
					<label class="control-label col-md-12 " for="dt_cerimonia0">Iniciação</label>
					<input id="dt_cerimonia0" name="cerimonias[0][dt_cerimonia]" class="form-control col-md-2 datas_input"  
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia0 or old('cerimonias.0.dt_cerimonia')}}" >
				</div>

				<div class="col-md-5">
					<label class="control-label col-md-12" for="loja_id0">Loja Iniciação</label>
					<select   
						id="loja_id0" name="cerimonias[0][loja_id]"  class="form-control col-md-5">
						<option value="null"  selected style="color: #ccc;"> --- </option>
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					</select>
				</div>
				
				<div class="col-md-1 ">
					<a data-target="#cad_loja" class="btn-circulo btn btn-primary btn-md   pull-right " data-toggle="modal" title="Adiciona uma Loja">
						<span class="fa fa-plus">  </span>
					</a>
				</div>
			</div>
		</div>
		
		<div class="item form-group">
			<div class="row">
				<input type="hidden" name="cerimonias[1][ic_cerimonia]" value="Elevação">
				<div class="col-md-2 ">
					<label class="control-label col-md-12 " for="dt_cerimonia1">Elevação</label>
					<input id="dt_cerimonia1" name="cerimonias[1][dt_cerimonia]" class="form-control col-md-2 datas_input"  
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia1 or old('cerimonias.1.dt_cerimonia')}}" >
				</div>

				<div class="col-md-5">
					<label class="control-label col-md-12 " for="loja_id1">Loja Elevação</label>
					<select id="loja_id1" name="cerimonias[1][loja_id]"  class="form-control col-md-5">
						<option value="null"  selected style="color: #ccc;"> --- </option>
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<div class="item form-group">
			<div class="row">
				<input type="hidden" name="cerimonias[2][ic_cerimonia]" value="Exaltação">
				<div class="col-md-2 ">
					<label class="control-label col-md-12 " for="dt_cerimonia2">Exaltação</label>
					<input id="dt_cerimonia2" name="cerimonias[2][dt_cerimonia]" class="form-control col-md-2 datas_input"  
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia2 or old('cerimonias.2.dt_cerimonia')}}" >      
				</div>
				<div class="col-md-5">
					<label class="control-label col-md-12 " for="loja_id2">Loja Exaltação</label>
					<select 
						id="loja_id2" name="cerimonias[2][loja_id]"  class="form-control col-md-5">
						<option value="null"  selected style="color: #ccc;"> --- </option>
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					</select>
				</div>
			</div>
		</div>

		<!------------------------------------>
		<div class="item form-group">
			<div class="row">
				<input type="hidden" name="cerimonias[3][ic_cerimonia]" value="Instalação">
				<div class="col-md-2 ">
					<label class="control-label col-md-12 " for="dt_cerimonia3">Instalação</label>
					<input id="dt_cerimonia3" name="cerimonias[3][dt_cerimonia]" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia3 or old('cerimonias.3.dt_cerimonia')}}" >      
				</div>

				<div class="col-md-5">
					<label class="control-label col-md-12 " for="loja_id3">Loja Instalação</label>
					<select id="loja_id3" name="cerimonias[3][loja_id]"  class="form-control col-md-5">
						<option value="null"  selected style="color: #ccc;"> --- </option>
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					</select>
				</div>
			</div>
		</div>
		
		<div class="x_title"></div>
		<div class="clearfix"></div>

		<div class="item form-group">
			<div class="row">
				<input type="hidden" name="cerimonias[4][ic_cerimonia]" value="Filiação">
				<div class="col-md-2 ">
					<label class="control-label col-md-1 " for="dt_cerimonia4">Filiação</label>
					<input id="dt_cerimonia4" name="cerimonias[4][dt_cerimonia]" class="form-control col-md-2 datas_input"  
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia4 or old('cerimonias.4.dt_cerimonia')}}" >      
				</div>

				<input type="hidden" name="cerimonias[5][ic_cerimonia]" value="Regularização">
				<div class="col-md-2 ">
					<label class="control-label col-md-2 alinha_esquerda" for="dt_cerimonia5">Regularização</label>
					<input id="dt_cerimonia5" name="cerimonias[5][dt_cerimonia]" class="form-control col-md-2 datas_input"  
					type="date" min="1500-01-01" max="2050-01-01" 
					value="{{$dt_cerimonia5 or old('cerimonias.5.dt_cerimonia')}}" >      
				</div>
			</div>
		</div>
	</div>
</div>