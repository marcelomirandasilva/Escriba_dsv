@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')
<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Exclusão de Loja</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir essa Loja?
        <h5><b>{{ $loja->co_titulo }} {{ $loja->no_loja }} - Nº {{  $loja->nu_loja }} </b> </h5> 

      </div>
      <div class="modal-footer">
				 
        <a href="{{ url("lojas/$loja->id/destroy") }}"  type="button" class="btn btn-primary">Sim</a>
 		<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div> 
<!-- /.modal -->


<!-- page content -->
<!-- page content -->
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2> Visualização de Loja </h2>

				<a 
					data-target="#delete-modal"
					class="btn btn-danger btn-md    pull-right"  
					data-toggle="modal" 
					data-toggle="tooltip" 
					data-placement="bottom" 
					title="Exclui essa Loja">
					<i class="fa fa-trash"></i>
				</a>

				<a href="{{ url("lojas/$loja->id/edit") }}"
					class="btn btn-warning btn-md   pull-right "  
					data-toggle="tooltip" 
					data-placement="bottom" 
					title="Edita essa Loja">
					<i class="fa fa-pencil"></i>
				</a>

				<a href="{{ url("lojas/$proximo->id/show") }}"
					class="btn btn-primary btn-md   pull-right "  
					data-toggle="tooltip" 
					data-placement="bottom" 
					title="Próxima Loja">
					<i class="fa fa-step-forward"></i>
				</a>

				<a href="{{ url("lojas/$anterior->id/show") }}"
					class="btn btn-primary btn-md   pull-right "  
					data-toggle="tooltip" 
					data-placement="bottom" 
					title="Loja anterior">
					<i class="fa fa-step-backward"></i>
				</a>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="panel-body">   
					
					<h5><b>{{ $loja->co_titulo }} {{ $loja->no_loja }} - Nº {{  $loja->nu_loja }} </b> </h5> 

					
					<br><br>

					<div class="x_title"> </div>
					<br> Endereço: {{$loja->endereco->no_logradouro}}, {{$loja->endereco->nu_logradouro}} -
										{{$loja->endereco->no_bairro}} - {{$loja->endereco->no_municipio}} -
										{{$loja->endereco->de_complemento}} - {{$loja->endereco->nu_cep}} - 
										{{$loja->endereco->sg_uf}} - {{$loja->endereco->pais->no_pais}}  
					<br><br>

					<div class="x_title"> </div>
					<br> Telefone: {{$loja->telefone->nu_telefone}}
					<br> Email: {{$loja->email->de_email}}
					






						<!- botoes -> 
						<div class="ln_solid"></div>
						
						<div class="col-md-1 col-md-offset-11">
						  <a href="{{ url('lojas') }}" class="btn btn-primary">  Voltar     </a>

						</div>
						<!- fim botoes ->


				</div>
			</div>
		</div>
	</div>
</div>
<!-- page content -->





<!-- footer content -->
<footer>
	<div class="pull-right">
		Desenvolvido por Marcelo Miranda - 2017</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection

<script type="text/javascript">
$(document).ready(function(){
    $(".tip-top").tooltip({placement : 'top'});
    $(".tip-right").tooltip({placement : 'right'});
    $(".tip-bottom").tooltip({placement : 'bottom'});
    $(".tip-left").tooltip({ placement : 'left'});
});
</script>