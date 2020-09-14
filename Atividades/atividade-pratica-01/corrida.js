


function sortfunction(x, y) {return (x - y)}

let competidor=new Array(6);
let    ordenat=new Array(6);
let      tempo=new Array(6);
let   largada= new Array(6);



let contador = 0;
      function adiciona() {
    
    if (contador < 6) {

        largada[contador] = document.getElementById("largada").value;
        competidor[contador] = document.getElementById("competidor").value;
        tempo[contador] = document.getElementById("tempo").value;

        
        
        let table = document.getElementById("resultados");
             let row = table.insertRow(-1);
                 let pos1 = row.insertCell(0); /*comentario/*/
                    let pos2 = row.insertCell(1);
                        let pos3 = row.insertCell(2);
        
        
        
                        pos1.innerHTML = largada[contador];
                        pos2.innerHTML = competidor[contador];
                        pos3.innerHTML = tempo[contador];

        contador++;

        document.getElementById("largada").value = "";
        document.getElementById("competidor").value = "";
        document.getElementById("tempo").value = "";

                     if(contador == 6) {
                             window.alert("Número máximo de competidores permitido!");
                              
        }
    
    } }


function vencedores() {

    ordenat = tempo.slice();
    ordenat.sort(sortfunction);
    
    let table = document.getElementById("resultados");
        table.innerHTML = "";

    for (let i = 0; i <6; i++) {
        let numero = ordenat[i]

        let posicao = tempo.indexOf(numero);
                let row = table.insertRow(-1);
                    let pos0 = row.insertCell(0);
                         let pos1 = row.insertCell(1);
                            let pos2 = row.insertCell(2);
                                   let pos3 = row.insertCell(3);
                                        let pos4 = row.insertCell(4);

        pos0.innerHTML = largada[posicao];
        pos1.innerHTML = competidor[posicao];
        pos2.innerHTML = tempo[posicao];
        pos3.innerHTML = i + 1;



        if (i == 0 || i == 1) {
            pos4.innerHTML = "Vencedor!";
        } 
        
        else 
        {
            pos4.innerHTML = "--";
        }
    }

}

