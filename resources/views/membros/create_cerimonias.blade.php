<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_iniciacao">Iniciação</label>
				<input id="dt_iniciacao" name="dt_iniciacao" class="form-control col-md-2 datas_input"  
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_iniciacao or old('dt_iniciacao')}}" >
			</div>

			<div class="col-md-5">
				<label class="control-label col-md-12" for="loja_id_iniciacao">Loja Iniciação</label>
				<select   
					id="loja_id_iniciacao" name="loja_id_iniciacao"  class="form-control col-md-5">
					<option value="null"  selected style="color: #ccc;"> --- </option>
					@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						@foreach($lojas as $loja)
							@if ( $membro->loja_id_iniciacao == $loja->id)
								<option value="{{$loja->id}}" selected="selected"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@else
								<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@endif
						@endforeach
					@else
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					@endif
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
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_elevacao">Elevação</label>
				<input id="dt_elevacao" name="dt_elevacao" class="form-control col-md-2 datas_input"  
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_elevacao or old('dt_elevacao')}}" >
			</div>

			<div class="col-md-5">
				<label class="control-label col-md-12 " for="loja_id_elevacao">Loja Elevação</label>
				<select id="loja_id_elevacao" name="loja_id_elevacao"  class="form-control col-md-5">
					<option value="null"  selected style="color: #ccc;"> --- </option>
					@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						@foreach($lojas as $loja)
							@if ( $membro->loja_id_elevacao == $loja->id)
								<option value="{{$loja->id}}" selected="selected"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@else
								<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@endif
						@endforeach
					@else
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					@endif
				</select>
			</div>
		</div>
   </div>

   <div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_exaltacao">Exaltação</label>
				<input id="dt_exaltacao" name="dt_exaltacao" class="form-control col-md-2 datas_input"  
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_exaltacao or old('dt_exaltacao')}}" >      
			</div>
			<div class="col-md-5">
				<label class="control-label col-md-12 " for="loja_id_exaltacao">Loja Exaltação</label>
				<select 
					id="loja_id_exaltacao" name="loja_id_exaltacao"  class="form-control col-md-5">
					<option value="null"  selected style="color: #ccc;"> --- </option>
					@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						@foreach($lojas as $loja)
							@if ( $membro->loja_id_exaltacao == $loja->id)
								<option value="{{$loja->id}}" selected="selected"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@else
								<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@endif
						@endforeach
					@else
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					@endif
				</select>
			</div>
		</div>
   </div>

   <!------------------------------------>
   <div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_instalacao">Instalação</label>
				<input id="dt_instalacao" name="dt_instalacao" class="form-control col-md-2 datas_input" 
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_instalacao or old('dt_instalacao')}}" >      
			</div>

			<div class="col-md-5">
				<label class="control-label col-md-12 " for="loja_id_instalacao">Loja Instalação</label>
				<select id="loja_id_instalacao" name="loja_id_instalacao"  class="form-control col-md-5">
					<option value="null"  selected style="color: #ccc;"> --- </option>
					@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						@foreach($lojas as $loja)
							@if ( $membro->loja_id_instalacao == $loja->id)
								<option value="{{$loja->id}}" selected="selected"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@else
								<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
							@endif
						@endforeach
					@else
						@foreach($lojas as $loja)
							<option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
						@endforeach
					@endif
				</select>
			</div>
		</div>
	</div>
	
   <div class="x_title"></div>
   <div class="clearfix"></div>

   <div class="item form-group">
		<div class="row">
			<div class="col-md-2 ">
				<label class="control-label col-md-1 " for="dt_filiacao">Filiação</label>
				<input id="dt_filiacao" name="dt_filiacao" class="form-control col-md-2 datas_input"  
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_filiacao or old('dt_filiacao')}}" >      
			</div>

			<div class="col-md-2 ">
				<label class="control-label col-md-2 alinha_esquerda" for="dt_regularizacao">Regularização</label>
				<input id="dt_regularizacao" name="dt_regularizacao" class="form-control col-md-2 datas_input"  
				type="date" min="1500-01-01" max="2050-01-01" 
				value="{{$membro->dt_regularizacao or old('dt_regularizacao')}}" >      
			</div>
		</div>
   </div>
</div>











