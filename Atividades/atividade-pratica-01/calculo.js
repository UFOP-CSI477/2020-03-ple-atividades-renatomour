function validar(campo, alerta, label) {
    
    let n = campo.value;

    if ( n.length == 0 || isNaN ( parseInt(n) ) ) {
        // Erro
        // Exibir alerta:
        document.getElementById(alerta).style.display = "block";

        // Reporte o campo como inválido
        campo.classList.add("is-invalid");

        // Reportar o label como inválido/atenção:
        document.getElementById(label).classList.add("text-danger");

        // Finalizar
        campo.value = "";
        campo.focus();
        return false;
    }

    // Tudo correto
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");

    document.getElementById(label).classList.remove("text-danger");

    document.getElementById(label).classList.add("text-success");

    return true;

}

function calcular() {

    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if ( validar(n1, "alerta1", "label1") 
            && validar(n2, "alerta2","label2") ) {

                let v1 = parseFloat(n1.value);
                let v2 = parseFloat(n2.value);
                let altura= v2**2;
                let resultado =v1/altura;
        
         document.dados.resultado.value = resultado;
    
         if(resultado < 18.5){
            alert(" SUBNUTRIDO!! "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(18.5*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
            }if(resultado>18.4 && resultado < 25.0){
                alert(" PESO SAUDAVEL!! "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(18.5*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
            }
            if(resultado>24.9 && resultado < 30.0){
                alert(" SOBREPESO!!  "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(18.5*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
                
            }if(resultado>29.9 && resultado < 35.0){
                alert(" OBESIDADE GRAU 1!!  "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(29.9*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
            }
            if(resultado>34.9 && resultado < 40.0){
                alert(" OBESIDADE GRAU 2!! "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(18.5*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
            }
            if(resultado>39.9){
                alert(" OBESIDADE GRAU 3!! "+" Seu IMC: "+resultado.toFixed(2)+" O intervalo de peso ideal"+(18.5*altura).toFixed(2)+" e "+(24.9*altura).toFixed(2)+" Kg ");
            
            }
    }
    

  

}