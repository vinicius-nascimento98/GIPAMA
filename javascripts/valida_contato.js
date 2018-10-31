function validarDados(){
    return validarCamposHTML5();
}

function validarCamposHTML5(){
    var elementos;
    var cont = 0;
    var camposIncorretos = [];

    elementos = document.getElementById("formID").elements;

    for (var i = 0; i < elementos.length; i++){
        if (!elementos[i].validity.valid){
            cont++;
            camposIncorretos[cont] =  "Campo: " + elementos[i].name + " Valor incorreto: " + elementos[i].value + "\n";
        }
    }
    
    if (cont > 0){        
        alert(camposIncorretos.toString());
        return false;
    }
    
}