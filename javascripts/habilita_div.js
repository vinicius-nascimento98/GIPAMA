function habilita_div(selecao){

	$("#telefoneResp").css("display","none");
	$("#nomeResp").css("display","none");
	
	if($(selecao).val() == "nao"){
		$("#telefoneResp").css("display","block");
		$("#nomeResp").css("display","block");
	}
	else{
		$("#"+$(selecao).val()).css("display","block");
	}
}