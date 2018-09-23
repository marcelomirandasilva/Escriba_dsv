<div class="x_panel modal-content panel_sem_margem" >
   <div class="clearfix"></div>
	<div class="col-md-12">
		<div class="x_panel  ">            

			<div class=" form-group ">
				<div  class="col-md-2" >
					<label class="control-label col-md-12" for="tel_cel">Celular</label>
					<input   id="tel_cel" class="form-control col-md-3 " placeholder="(99)99999-9999"  name="tel_cel"  
					value="{{$membro->tel_cel or old('tel_cel')}}" >
				</div>

				<div  class="col-md-2" >
					<label class="control-label col-md-12" for="tel_res"> Tel. Residêncial</label>
					<input   id="tel_res" class="form-control col-md-3 " placeholder="(99)9999-9999"  name="tel_res"  
					value="{{$membro->tel_res or old('tel_res')}}" >
				</div>

				<div  class="col-md-2" >
					<label class="control-label col-md-12" for="tel_com"> Tel. Comercial</label>
					<input   id="tel_com" class="form-control col-md-3 " placeholder="(99)9999-9999"  name="tel_com"  
					value="{{$membro->tel_com or old('tel_com')}}" >
				</div>
				<div  class="col-md-6" >
					<label class="control-label col-md-12" for="email">Email</label>
					<input type="email"  id="email" class="form-control col-md-3 " placeholder="xxxxxx@xxxxx.xxxx"  name="email"  
					value="{{$membro->email or old('email')}}" >
				</div>
				
			</div>

		</div>
	</div>
   	
</div>		