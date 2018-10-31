function sizeFont(acao){
    // tamanho inicial da fonte (em px)
    var tamInic = 14;
    
    // tamanho minímo da [b]fonte (em px)
    var tamMin = 12;
    // tamanho máximo da fonte (em px)
    var tamMax = 16;
    
	if ($('#conteudo').css('font-size') == ""){	
    	var tamFonte = tamInic; 
    }
	else{
		
		//tamanho fonte
		var tamFonte = parseInt($('#conteudo').css('font-size'));
	}

    switch(acao){
        // aumenta o tamanho, enquanto for menor que 'tamMax'
        case '+':
            if(tamFonte < tamMax){
                $('#conteudo').css('font-size',parseInt(tamFonte + 1)+"px");
            }
            break;
                // diminui o tamanho, enquanto for maior que 'tamMin'
        case '-':
            if(tamFonte > tamMin){
                $('#conteudo').css('font-size',parseInt(tamFonte - 1)+"px");
            }
            break;
                //diminui o tamanho, enquanto for maior que 'tamMin'
        case 'default':
            $('#conteudo').css('font-size',parseInt(tamFonte = tamInic) + "px");
            break;


    }	
}