function login() {

    var form_login = document.getElementById('form-login');
    var dados = new FormData(form_login);

    fetch("php/login.php", {
        method: 'POST',
        body: dados
    })    
}