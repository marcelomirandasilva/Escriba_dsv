@extends('layouts.blank')

@push('stylesheets')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
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
	 				<button type="button" class="btn btn-default btn_acao" data-dismiss="modal">N&atilde;o</button>
	        		<a href="#"  type="button" class="btn btn-primary botao_deletar btn_acao">Sim</a>	 			
	      		</div>
		
				<form action="{{ route("lojas.destroy", ['id' => $loja->id]) }}" class="form-excluir" method="post" accept-charset="utf-8">
			      <input type="hidden" name="id" id="id_loja">
			      {{ method_field("DELETE") }}
			      {{ csrf_field() }}
				</form>
		    </div>
	  	</div>
	</div> 
	<!-- /.modal -->



	<!-- page content -->
	<div class="right_col" role="main">
		<div class=""> </div>
		<div class="clearfix"></div>
		<div class="row">
<!-- data-target="#delete-modal" -->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel modal-content">
					<div class="x_title">
						<h2> Visualização de Loja </h2>
							
						<button 
							id="deleta"
							
							class="btn btn-circulo btn btn-danger btn-md    pull-right"  
							data-toggle="modal" 
							title="Exclui essa Loja">
							<i class="fa fa-trash"></i>
						</button>

						<a href="{{ url("/lojas/$loja->id/edit") }}"
							class="btn btn-warning btn-md  btn btn-circulo pull-right "  
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Edita essa Loja">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="" 
							class="btn btn-circulo btn-default cor-padrao glyphicon glyphicon-print  pull-right"
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Envia para impressora">
						</a>

						<a href="{{ url("/lojas/$proximo->id") }}"
							class="btn  btn btn-circulo btn-primary btn-md   pull-right "  
							data-toggle="tooltip" 
							data-placement="bottom" 
							title="Próxima Loja">
							<i class="fa fa-step-forward"></i>
						</a>

						<a href="{{ url("/lojas/$anterior->id") }}"
							class="btn btn-circulo btn btn-primary btn-md   pull-right "  
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
							<br> Pertence a: {{$loja->potencia->no_potencia}}
							<br> Fundada em: 
						          @if( $loja->dt_fundacao <> '0000-00-00')
						            <td>{{ \Carbon\Carbon::parse( $loja->dt_fundacao)->format('d/m/Y')  }}</td>
						          @else
						            <td> -------------- </td>
						          @endif

							<br> Rito: {{$loja->ic_rito}}
							
							<br><br>

							<div class="x_title"> </div>
							<br> Endereço: {{$loja->endereco->no_logradouro}}, {{$loja->endereco->nu_logradouro}} -
												{{$loja->endereco->no_bairro}} - {{$loja->endereco->no_municipio}} -
												{{$loja->endereco->de_complemento}} - {{$loja->endereco->nu_cep}} - 
												{{$loja->endereco->sg_uf}} - {{$loja->endereco->no_pais}}  
							<br><br>

							<div class="x_title"> </div>
							<br> Telefone: {{$loja->telefone->nu_telefone}}
							<br> Email: {{$loja->email->de_email}}

							<!- botoes -> 
							<div class="ln_solid"></div>
							
							<div class="col-md-1 col-md-offset-11">

						  		<a href="{{ url('/lojas') }}" 
						  			class="btn btn-primary" 
						  			data-toggle="tooltip" 
						  			title="Retorna a tela anterior">  
						  			Voltar     
					  			</a>
							</div>
							<!- fim botoes ->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page content -->



@endsection

@push('scripts')

	<script type="text/javascript">
	$('[data-toggle="modal"][title]').tooltip();

	$(document).ready(function(){

	    $(".tip-top").tooltip({placement : 'top'});
	    $(".tip-right").tooltip({placement : 'right'});
	    $(".tip-bottom").tooltip({placement : 'bottom'});
	    $(".tip-left").tooltip({ placement : 'left'});

	    // Link para excluir o usuário
/*	    $("a.botao_deletar").click(function(e){

	    		e.preventDefault();

	    		$("form.form-excluir").submit();
	    });
*/

	    $("#deleta").click(function(e){ 
	    	e.preventDefault();
			swal({
				title: 'Deseja realmente apagar?',
				text: "{{ $loja->co_titulo }} {{ $loja->no_loja }} - Nº {{  $loja->nu_loja }} ",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Sim, apague!',
				cancelButtonText: 'Não, cancele!',
				confirmButtonClass: 'btn btn-success',
				cancelButtonClass: 'btn btn-danger',
				buttonsStyling: false
			}).then(function () {
				swal({title:'Apagada!',text: 'Loja apagada!!!',type:'success',})
				$("form.form-excluir").submit();
			  	
			})
		});
	});

	</script>

@endpush