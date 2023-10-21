function cadastrar() {

    var form_login = document.getElementById('form-login');
    var dados = new FormData(form_login);

    fetch("php/analisar.php", {
        method: 'POST',
        body: dados
    })
    
}