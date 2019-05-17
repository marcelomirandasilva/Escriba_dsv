<div class="x_panel modal-content" >
   <div class="clearfix"></div>

	<div class="item form-group">
		<div class="row">
		  
				<div class="col-md-5 ">
					<label class="control-label col-md-1" for="no_visitante">Nome*</label>
				   <input  id="no_visitante" class="form-control col-md-5" name="no_visitante" placeholder="Nome completo do Membro" 
					required="required" type="text" autofocus value="{{$visitante->no_visitante or old('no_visitante')}}" >
				</div>

				<div class="col-md-2">
					<label class="control-label col-md-1 " for="ic_grau"> Grau* </label>
				   <select name="ic_grau" id="ic_grau" class="form-control col-md-1" >
						<option value=""  selected style="color: #ccc;" > --- </option>
						@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						   @foreach($grau as $ic_grau)
								@if ( $visitante->ic_grau == $ic_grau)
								   <option value="{{$ic_grau}}" selected="selected">{{$ic_grau}}</option>
								@else
								   <option value="{{$ic_grau}}">{{$ic_grau}}</option>  
								@endif
						   @endforeach
						@else
						   @foreach($grau as $ic_grau)
								<option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
						   @endforeach
						 @endif
				   </select>
				</div>
				<div  class="col-md-2" >
					<label class="control-label col-md-1" for="co_cim">CIM*</label>
					<input   id="co_cim" class="form-control col-md-2 cim" placeholder="999.999" 
					required="required" min="1" max="9999999"  
					name="co_cim"  value="{{$visitante->co_cim or old('co_cim')}}" >
				</div>

				<div class="col-md-1 col-md-offset-1">
				  {{--  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:120px; position:absolute; height: 150px; float: right; border-radius: 50%; margin-right: 25px; ">  --}}
				</div>
				
		  
		</div>
   </div>
		
   <div class="item form-group">
		<div class="row">
			
			<div class="col-md-2 ">
				<label class="control-label col-md-1 " for="dt_nascimento">Nascimento</label>
				<input id="dt_nascimento" class="form-control col-md-2 datas_input" name="dt_nascimento"  
				type="date" min="1500-01-01" max="2050-01-01"
				placeholder="Data de Nascimento"   
				value="{{$visitante->dt_nascimento or old('dt_nascimento')}}" >
			</div>

			<div class="col-md-3 ">
				<label class="control-label alinha_esquerda col-md-1" for="no_nacionalidade">Nacionalidade</label>
				<input  id="no_nacionalidade" class="form-control col-md-3" name="no_nacionalidade" placeholder="Nacionalidade" type="text"
				value="{{$visitante->no_nacionalidade or old('no_nacionalidade')}}" >
			</div>
		
			<div class="col-md-3 ">
				<label class="control-label alinha_esquerda col-md-2" for="no_naturalidade">Naturalidade</label>
				<input  id="no_naturalidade" class="form-control col-md-3" name="no_naturalidade" placeholder="Naturalidade" type="text"
				value="{{$visitante->no_naturalidade or old('no_naturalidade')}}" >
			</div>
		</div>
   </div>

   
   <div class="item form-group">
		<div class="row">
			<div class="col-md-5 ">
				<label class="control-label col-md-12" for="no_pai">Pai</label>
				<input  id="no_pai" class="form-control col-md-5" name="no_pai" placeholder="Nome do Pai do Membro" type="text" 
				value="{{$visitante->no_pai or old('no_pai')}}" >
			</div>

			<div class="col-md-5 ">
				<label class="control-label col-md-1" for="no_pai">Mãe</label>
				<input  id="no_mae" class="form-control col-md-5" name="no_mae" placeholder="Nome da Mãe do Membro" type="text"
				value="{{$visitante->no_mae or old('no_mae')}}" >
			</div>
		</div>
   </div>

	<div class="item form-group">
		<div class="row">
			<div class="col-md-3 ">
				<label class="control-label col-md-12 " for="ic_estado_civil">Estado Civil</label>
				<select   name="ic_estado_civil" id="ic_estado_civil" class="form-control col-md-2">
					<option value=""  selected style="color: #ccc;"> --- </option>

					@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
						@foreach($estado_civil as $ic_estado_civil)
							@if ( $visitante->ic_estado_civil == $ic_estado_civil)
								<option value="{{$ic_estado_civil}}" selected="selected">{{$ic_estado_civil}}</option>
							@else
								<option value="{{$ic_estado_civil}}">{{$ic_estado_civil}}</option>  
							@endif
						@endforeach
					@else
						@foreach($estado_civil as $ic_estado_civil)
							<option value="{{$ic_estado_civil}}"> {{$ic_estado_civil}} </option>    
						@endforeach
					@endif
				</select>
			</div>

			<div class="col-md-3">
				<label class="control-label col-md-12 " for="dt_casamento">Data casamento</label>
				<input id="dt_casamento" class="form-control col-md-2 datas_input"  type="date" min="1500-01-01" max="2050-01-01"
				name="dt_casamento" placeholder="Data de Casamento" disabled 
				value="{{$visitante->dt_casamento or old('dt_casamento')}}" >
			</div>
			
		</div>
	</div>
	
   <div class="item form-group">
		<div class="row">
			<div class="col-md-4 ">
				<label class="control-label col-md-2 " for="no_profissao">Profissão</label>
				<input id="no_profissao" class="form-control col-md-4" name="no_profissao" placeholder="Profissão do Membro" type="text" value="{{$visitante->no_profissao or old('no_profissao')}}" >
			</div>
			<div class="col-md-4 ">
				<label class="control-label alinha_esquerda col-md-1 " for="no_empregador">Empregador</label>
				<input id="no_empregador" class="form-control col-md-4 " name="no_empregador" placeholder="Nome do Empregador" 
				type="text" value="{{$visitante->no_empregador or old('no_empregador')}}" >
			</div>
			<div class="form-check item form-group">
					<label class="form-check-label" style="padding-left: 40px;margin-top: 10px;margin-bottom: 0px;"> Aposentado &nbsp;&nbsp;&nbsp;&nbsp;
					<input class="form-check-input checkbox_ok" type="checkbox" id="aposentado"  name="aposentado" style="height: 25px;width: 	25px;"
	
						@if (isset($edita)) 
							@if($visitante->ic_aposentado) 
								checked 
							@endif
						@else
							@if(old('$visitante->ic_aposentado')) 
								checked 
							@endif 
						@endif
					>
					</label>
				</div>
		</div>
   </div>

   <div class="item form-group">
		<div class="row">
			<div class="col-md-5 ">
				<label class="control-label alinha_esquerda col-md-1" for="no_proponente">Proponente</label>
				<input id="no_proponente" class="form-control col-md-5" name="no_proponente" placeholder="Nome do proponente" 
				type="text" value="{{$visitante->no_proponente or old('no_proponente')}}" >
			</div>
		</div>
	</div>
</div>

