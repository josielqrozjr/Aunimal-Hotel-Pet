async function login() {

    var form_login = document.getElementById('form-login');
    var dados = new FormData(form_login);

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
        window.location.href = "index.html";
    }
}