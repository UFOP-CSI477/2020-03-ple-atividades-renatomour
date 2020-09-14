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


function validarString(){
 
    if(document.dados.valor1.value==""){
        alert("preencha ");
        document.dados.valor3.focus();
       
             return false;
      }
      if (document.dados.valor2.value.length == 0 || isNaN ( parseInt(valor2) ) ) {
        alert("preencha com numero ");
        document.dados.valor2.focus();
       
             return false;
      }
        return true;    
    

    
        
    }
    
function calcular() {

    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if ( validar(n1, "alerta1", "label1") 
            && validar(n2, "alerta2","label2") ) {
        let resultado = parseInt(n1.value) / (parseInt(n2.value)+ (parseInt(n2.value)));
        document.dados.resultado.value = resultado;
    }

}