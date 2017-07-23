function limpa_formulário_cep() {
	// Limpa valores do formulário de cep.

	$('#enderecos[0][no_logradouro]').val("");
	$('#enderecos[0][no_bairro]').val("");
	$('#enderecos[0][no_municipio]').val("");
	$('#enderecos[0][sg_uf]').val("");

	$('#enderecos[1][no_logradouro]').val("");
	$('#enderecos[1][no_bairro]').val("");
	$('#enderecos[1][no_municipio]').val("");
	$('#enderecos[1][sg_uf]').val("");


}

$(document).ready(function() {

	$("select#enderecos[0][no_pais]").change(function(){

		if($("select#enderecos[0][no_pais]>option:selected").text() == " Brasil ")
		{
			$("input.enderecos[0][nu_cep], input.enderecos[0][sg_uf]").removeAttr('disabled');
		}
		else
		{
			$("input.enderecos[0][nu_cep], input.enderecos[0][sg_uf]").attr('disabled', 'disabled');
		}

	});
	
	//Quando o campo cep perde o foco.
	$("#cep").blur(function() {

		//Nova variável "cep" somente com dígitos.
		var cep = $(this).val().replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if(validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				$("#rua").val("...");
				$("#bairro").val("...");
				$("#cidade").val("...");
				$("#uf").val("...");
				$("#ibge").val("...");

				//Consulta o webservice viacep.com.br/
				$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

					if (!("erro" in dados)) {
						//Atualiza os campos com os valores da consulta.
						$("#rua").val(dados.logradouro);
						$("#bairro").val(dados.bairro);
						$("#cidade").val(dados.localidade);
						$("#uf").val(dados.uf);
						$("#ibge").val(dados.ibge);
					} //end if.
					else {
						//CEP pesquisado não foi encontrado.
						limpa_formulário_cep();
						alert("CEP não encontrado.");
					}
				});
			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	});

});
