function validacao() {
    var formulario = document.getElementById("register");
    var nome = formulario.nome;
    var email = formulario.email;

    if (nome.value == "") {
        alert("Insira um nome válido.");
        return false;
    }

    if(email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1) {
        alert("Insira um email válido");
        return false;
    }
}