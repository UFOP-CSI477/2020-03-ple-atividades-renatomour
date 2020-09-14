var valor;
var resultado;
function botao(num){
    valor = document.formCalculadora.visor.value += num;
}
function resetar(){
    document.formCalculadora.visor.value = '';
}
function calcular(){
    resultado = eval(valor);
    document.formCalculadora.visor.value = resultado.toLocaleString('pt-BR');
}