function habilita_div(selecao){

	$("#telefoneResp").css("display","none");
	$("#nomeResp").css("display","none");
	$("#adicionar").css("display","none");
	
	if($(selecao).val() == "nao"){
		$("#telefoneResp").css("display","block");
		$("#nomeResp").css("display","block");
		$("#adicionar").css("display","block");
	}
	else{
		$("#"+$(selecao).val()).css("display","block");
	}
}

$(document).ready(function() {
	$("#adicionar").click(function() {
	
	var novoCampoNomeResp = $('#nomeResp').clone().removeAttr('id'); // Evitar id duplicado
	var novoCampoTelefoneResp = $("#telefoneResp").clone().removeAttr('id'); // Evitar id duplicado
    
	novoCampoNomeResp.children('input').val(''); //limpa o campo  Nome responsavel
    novoCampoTelefoneResp.children('input').val(''); //limpa o campo Telefone responsavel
    
    $("#adicionaCampo").append(novoCampoNomeResp);
    $("#adicionaCampo").append(novoCampoTelefoneResp);

	});
});