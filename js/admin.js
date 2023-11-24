
window.onload = function(){
    fetch("php/get.php", {

    });


}

async function login() {

    var form_login = document.getElementById('form-login');
    var dados = new FormData(form_login, form_cadastro);

    var promisse = await fetch("php/validar.php", {
        method: 'POST',
        body: dados
    });

    var retorno = await promisse.json();

    if (retorno) {
        // Se o login for bem-sucedido, redireciona para a página apropriada
        window.location.href = "php/sys_aunimal.php";
    } else {
        // Se o login falhar
        var mensagemErro = document.getElementById('mensagem-erro');
        mensagemErro.value = "Credenciais incorretas!";
    }
}