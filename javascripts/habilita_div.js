function habilita_div(selecao){

	$("#telefoneResp").css("display","none");
	$("#nomeResp").css("display","none");
	
	if($(selecao).val() == "nao"){
		$("#telefoneResp").css("display","block");
		$("#nomeResp").css("display","block");
	}
	else if($(selecao).val() == "sim") {
		$("#telefoneResp").css("display","none");
		$("#nomeResp").css("display","none");
	}
	else{
		$("#"+$(selecao).val()).css("display","block");
	}
}