$(document).ready(function () { 
	//mask para campo telefone.
	$("#telefoneLocal").mask('(99)9999-9999');
	$("#telefoneResponsavel").mask('(99)9999-9999');

	$(".tel input").mask('(99)9999-9999');
	
	//mask para campo cpf
	$("#cpf").mask('999.999.999-99');
	
	//mask para campo rg
	$("#rg").mask('99.999.999-99');

	//mask para campo cep
	$("#cep").mask('99999-999');
});
