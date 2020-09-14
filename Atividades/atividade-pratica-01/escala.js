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
                let resultado = Math.log10(v1)  + (3*(Math.log10(8*v2))) - 2.92;
               
        
         document.dados.resultado.value = resultado;
         if (resultado< 3.5){
            alert("Geralmente não sentido, mas gravado. "+" MAGNITUDE M: "+resultado.toFixed(2));
            }
            if (resultado>= 3.5 && resultado <= 5.4) {
                alert("Às vezes sentido, mas raramente causa danos "+" MAGNITUDE M: "+resultado.toFixed(2));
            }
            if (resultado >= 5.5 && resultado <= 6){
                alert("No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas  "+" MAGNITUDE M: "+resultado.toFixed(2));
                
            }
            if (resultado >= 6.1 && resultado <= 6.9){
                alert("Pode ser destrutivo em áreas em torno de até 100km do epicentro  "+" MAGNITUDE M: "+resultado.toFixed(2));
            }
            if (resultado >= 7 &&resultado <= 7.9){
                alert(" Grande terremoto. Pode causar sérios danos numa grande faixa "+" MAGNITUDE M: "+resultado.toFixed(2));
            }
            if (resultado >= 8){
                alert("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros "+" MAGNITUDE M: "+resultado.toFixed(2));
            
            }
    }
    

  

}