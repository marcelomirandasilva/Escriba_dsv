<div class="x_panel modal-content"  id="anotacoes">
   <div class="x_title">
		<h2> Anotações </h2>

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
			<div class="col-md-12 ">
				<textarea id="de_anotacao"  name="de_anotacao" class="form-control" rows="10" >{{$membro->de_anotacao or old('de_anotacao')}}</textarea>
			{{--  --}}</div>
		</div>
	</div>
</div>






