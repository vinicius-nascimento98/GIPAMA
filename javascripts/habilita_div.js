function habilita_div(selecao){
	
	if($(selecao).val() == "nao"){
		$("#telefoneResp").removeClass('hidden');
		$("#nomeResp").removeClass('hidden');
		$("#adicionar").removeClass('hidden');
		$("#remover").removeClass('hidden');
		$("#camposAdicionais").removeClass('hidden');
	
	}else{

		$("#telefoneResp").addClass('hidden');
		$("#nomeResp").addClass('hidden');
		$("#adicionar").addClass('hidden');
		$("#remover").addClass('hidden');
		$("#camposAdicionais").addClass('hidden');
	}
} 
	
var addId = 0;
function btnAdiconarCampos(selecao){
	
	var selecao = $("input[name='responsavel']:checked").val();

	addId++;

	if(selecao == "nao"){
		
		$("#campos").append(
			'<div id="'+ addId +'" class="form-row">\
				<div class="form-group col-xs-5 " id="nomeResp' + addId + '">\
					<label class="label-control" id="labelNome' + addId + '" for="nomeCompletoResponsavel">Nome Completo</label>\
					<input type="text" class="form-control " id="nomeCompletoResponsavel_' + addId + '" name="nomeCompletoResponsavel_' + addId + '"\
					placeholder="Nome do responsável..." /></div>\
				<div class="form-group col-xs-5 " id="telefoneResp' + addId + '">\
					<label class="label-control " id="labelTelefone' + addId + '" for="telefone">Telefone Responsável</label>\
					<input type="tel" class="form-control tel" id="telefoneResponsavel_' + addId + '" name="telefoneResponsavel_' + addId + '"\
					placeholder="Ex.: (00)0000-0000" />\
				</div>\
				<div class="form-group col-xs-2 ">\
					<button type="button" id="' + addId + '" class="btn btn-danger" onclick=" btnRemoverCampos(this)">-</button>\
				</div>\
			</div>'
		);

	}else{

		$("#campos").append(
			'<div id="'+ addId +'" class="form-row">\
				<div class="col-md-4 mb-3 hidden" id="nomeResp">\
					<label for="nomeCompletoResponsavel">Nome Completo</label>\
					<input type="text" class="form-control " id="nomeCompletoResponsavel" name="nomeCompletoResponsavel_' + addId + '"\
					placeholder="Informe o nome do responsável..." />\
				</div>\
				<div class="col-md-4 mb-3 hidden" id="telefoneResp">\
					<label for="telefone">Telefone Responsável</label><input type="tel" class="form-control tel"\
					 id="telefoneResponsavel" name="telefoneResponsavel_' + addId + '" placeholder="Ex.: (00)0000-0000" />\
				</div>\
				<div class="col-md-4 mb-3 ">\
					<button type="button" id="remover" class="btn btn-danger hidden " onclick=" btns(this)">-</button>\
				</div>\
			</div>'
		);
	}
}

function btnRemoverCampos(selecao){

	var id = selecao.id;
	
	$('#nomeCompletoResponsavel_' + id).val('');
	$('#telefoneResponsavel_' + id).val('');
	
	$('#' + id).remove();
}